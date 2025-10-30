<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('suffix')->nullable();
            $table->date('birthdate');
            $table->string('place_of_birth');
            $table->string('gender'); 
            $table->string('civil_status');
            $table->string('citizenship');
            $table->string('email')->unique()->nullable();
            $table->string('contact_number');
            $table->string('address');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('user_type', ['user', 'admin', 'super admin'])->default('user');
            $table->softDeletes(); 
            $table->timestamps(); 
        });
    }

    
      public function down()
    {
        Schema::dropIfExists('users');
    }
};
