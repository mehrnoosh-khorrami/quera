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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('level')->default('user');
            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('mobile')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->string('level')->default('user');
            $table->string('family');
            $table->string('mobile')->unique();
            $table->timestamps();
        });

        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
        // Schema::table('users', function (Blueprint $table) {
        //     $table->string('level')->default('user');
        //     $table->string('name')->nullable(); 
        //     $table->string('family')->nullable();            
        //     $table->string('mobile'); 
        //     $table->string('email')->unique()->nullable(); 
        // });


    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
