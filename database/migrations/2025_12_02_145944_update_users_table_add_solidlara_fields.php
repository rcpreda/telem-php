<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\UserStatus;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable()->after('name');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('phone', 32)->nullable()->after('email');
            $table->smallInteger('phone_extension')->nullable()->after('phone');
            $table->enum('status', UserStatus::values())->default(UserStatus::INACTIVE->value)->after('password');
            $table->text('avatar')->nullable()->after('status');
            $table->softDeletes()->after('updated_at');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name', 'phone', 'phone_extension', 'status', 'avatar']);
            $table->dropSoftDeletes();
        });
    }
};
