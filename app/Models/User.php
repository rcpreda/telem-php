<?php

namespace App\Models;

use App\Enums\Role;
use App\Enums\UserStatus;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

/**
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $status
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasRoles;
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'name',
        'email',
        'password',
        'phone',
        'phone_extension',
        'status',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn () => sprintf('%s %s', ucfirst($this->first_name), ucfirst($this->last_name)),
        );
    }

    public function scopeName(): string
    {
        return sprintf('%s %s', $this->first_name, $this->last_name);
    }

    public static function statuses(): array
    {
        return UserStatus::values();
    }

    public function isActive(): bool
    {
        return $this->status !== UserStatus::INACTIVE->value;
    }

    public function scopeActive($query)
    {
        return $query->where(function ($q) {
            $q->where('status', '!=', UserStatus::INACTIVE->value)
                ->orWhereNull('status');
        });
    }

    public function getAvatarUrlAttribute(): string
    {
        if ($this->avatar) {
            return asset('storage/' . $this->avatar);
        }

        return asset('assets/media/avatars/blank.png');
    }

    public function isAdmin()
    {
        return $this->hasRole(Role::SUPER_ADMIN->value);
    }
}
