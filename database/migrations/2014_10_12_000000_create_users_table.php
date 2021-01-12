<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('username')->unique();
            $table->string('expedicion');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('email');
            $table->string('autorizacion');
            $table->foreignId('idroles')->constrained('roles');
            $table->boolean('estado')->default(1);
            $table->string('password');
            //$table->timestamp('email_verified_at')->nullable();
            //$table->rememberToken();
            //$table->timestamps();
        });
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
}
