<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableToClientsNotesField extends Migration
{
    /**
     * Run the migrations to make the clientNotes nullable (not required)
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('clientNotes')->nullable()->change();
        });
    }
}
