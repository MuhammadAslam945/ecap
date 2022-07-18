<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUtypeToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->enum('utype',['ADM','USR','DRV'])->comment('USR for client, ADM for admin, and DRV for Driver')->after('email')->default('USR');
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
            //
            $table->enum('utype',['ADM','USR','DRV'])->comment('USR for client, ADM for admin, and DRV for Driver')->after('email')->default('USR');
        });
    }
}
