<?php

namespace App\Console\Commands;

use App\Enums\Role;
use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\password;
use function Laravel\Prompts\text;

class CreateSuperAdminCommand extends Command
{
    protected $signature = 'user:create-super-admin
                            {--email= : The email address of the super admin}
                            {--first-name= : The first name of the super admin}
                            {--last-name= : The last name of the super admin}
                            {--password= : The password for the super admin}';

    protected $description = 'Create a new super admin user with validated credentials';

    public function handle(): int
    {
        $this->info('Creating Super Admin User');
        $this->newLine();

        // Get and validate email
        $email = $this->option('email') ?: text(
            label: 'Email address',
            placeholder: 'admin@example.com',
            required: true,
            validate: fn (string $value) => $this->validateEmail($value)
        );

        // Check if user already exists
        if (User::where('email', $email)->exists()) {
            $this->error("A user with email {$email} already exists!");

            return self::FAILURE;
        }

        // Get and validate first name
        $firstName = $this->option('first-name') ?: text(
            label: 'First name',
            placeholder: 'John',
            required: true,
            validate: fn (string $value) => $this->validateName($value, 'First name')
        );

        // Get and validate last name
        $lastName = $this->option('last-name') ?: text(
            label: 'Last name',
            placeholder: 'Doe',
            required: true,
            validate: fn (string $value) => $this->validateName($value, 'Last name')
        );

        // Get and validate password
        $password = $this->option('password') ?: password(
            label: 'Password',
            placeholder: 'Minimum 8 characters',
            required: true,
            validate: fn (string $value) => $this->validatePassword($value)
        );

        // Validate all options if provided via command line
        if ($this->option('email') || $this->option('first-name') || $this->option('last-name') || $this->option('password')) {
            $emailValidation = $this->validateEmail($email);
            if ($emailValidation !== null) {
                $this->error($emailValidation);

                return self::FAILURE;
            }

            $firstNameValidation = $this->validateName($firstName, 'First name');
            if ($firstNameValidation !== null) {
                $this->error($firstNameValidation);

                return self::FAILURE;
            }

            $lastNameValidation = $this->validateName($lastName, 'Last name');
            if ($lastNameValidation !== null) {
                $this->error($lastNameValidation);

                return self::FAILURE;
            }

            $passwordValidation = $this->validatePassword($password);
            if ($passwordValidation !== null) {
                $this->error($passwordValidation);

                return self::FAILURE;
            }
        }

        try {
            // Create the user
            $user = User::create([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'name' => $firstName.' '.$lastName,
                'email' => $email,
                'password' => Hash::make($password),
                'status' => UserStatus::ACTIVE->value,
            ]);

            // Mark email as verified
            $user->email_verified_at = now();
            $user->save();

            // Assign super-admin role
            $user->assignRole(Role::SUPER_ADMIN->value);

            $this->newLine();
            $this->info('✓ Super admin user created successfully!');
            $this->newLine();
            $this->table(
                ['Field', 'Value'],
                [
                    ['Name', $user->name],
                    ['Email', $user->email],
                    ['Role', 'Super Admin'],
                    ['Status', 'Active'],
                ]
            );

            return self::SUCCESS;
        } catch (\Exception $e) {
            $this->error('Failed to create super admin user: '.$e->getMessage());

            return self::FAILURE;
        }
    }

    protected function validateEmail(string $email): ?string
    {
        $validator = Validator::make(
            ['email' => $email],
            ['email' => ['required', 'email', 'max:255']]
        );

        if ($validator->fails()) {
            return $validator->errors()->first('email');
        }

        return null;
    }

    protected function validateName(string $name, string $field): ?string
    {
        $validator = Validator::make(
            ['name' => $name],
            ['name' => ['required', 'string', 'min:2', 'max:255']]
        );

        if ($validator->fails()) {
            return str_replace('name', $field, $validator->errors()->first('name'));
        }

        return null;
    }

    protected function validatePassword(string $password): ?string
    {
        $validator = Validator::make(
            ['password' => $password],
            ['password' => ['required', 'string', 'min:8']]
        );

        if ($validator->fails()) {
            return $validator->errors()->first('password');
        }

        return null;
    }
}
