<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('username');
            $table->bigInteger('password');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
        \Illuminate\Support\Facades\DB::table('admins')->insert([
            'fullname'=> 'Ravshanbek Isakov',
            'username'=> 'Ravshan',
            'password'=> '123'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
