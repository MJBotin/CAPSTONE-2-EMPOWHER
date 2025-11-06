<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'first_name');
            $table->string('last_name')->after('first_name');
            $table->string('middle_name')->nullable()->after('last_name');
            $table->string('suffix', 10)->nullable()->after('middle_name');
            $table->string('username')->unique()->after('suffix');

            $table->date('birthdate')->nullable()->after('email');
            $table->string('gender', 50)->nullable()->after('birthdate');
            $table->string('civil_status', 50)->nullable()->after('gender');
            $table->string('place_of_birth')->nullable()->after('civil_status');
            $table->string('citizenship')->nullable()->after('place_of_birth');
            $table->string('contact_number', 20)->nullable()->after('citizenship');
            $table->string('address')->nullable()->after('contact_number');

            $table->string('profile_photo')->nullable()->after('address');
            $table->string('id_front_photo')->nullable()->after('profile_photo');
            $table->string('id_back_photo')->nullable()->after('id_front_photo');

            $table->enum('user_type', ['user', 'admin', 'super admin'])->default('user')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'last_name', 'middle_name', 'suffix', 'username', 'birthdate',
                'gender', 'civil_status', 'place_of_birth', 'citizenship', 'contact_number',
                'address', 'profile_photo', 'id_front_photo', 'id_back_photo', 'user_type'
            ]);
            $table->renameColumn('first_name', 'name');
        });
    }
};