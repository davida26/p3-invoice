<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameClientColumnsToSnakecaseFix extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->renameColumn('firstName', 'first_name');
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->renameColumn('lastName', 'last_name');
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->renameColumn('phoneNumber', 'phone_number');
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->renameColumn('clientNotes', 'client_notes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->renameColumn('first_name', 'firstName');
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->renameColumn('last_name', 'lastName');
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->renameColumn('phone_number', 'phoneNumber');
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->renameColumn('client_notes', 'clientNotes');
        });
    }
}
