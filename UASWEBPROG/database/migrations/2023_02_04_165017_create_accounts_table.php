<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('account_id');
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('gender_id');
            $table->foreign('role_id')->references('role_id')->on('roles');
            $table->foreign('gender_id')->references('gender_id')->on('genders');
            $table->string('first_name',25)->nullable(false);
            $table->string('last_name',25)->nullable(false);
            $table->string('email',100)->nullable(false);
            $table->string('display_picture_link',100)->nullable(false);
            $table->string('password',100)->nullable(false);
            $table->string('remember_token',11)->nullable(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('deleted_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
