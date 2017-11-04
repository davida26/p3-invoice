<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOptInToClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function($table)
        {
            $table->boolean('optin')->default(0);
        });
    }
    public function down()
    {
        Schema::table('clients', function($table){
            $table->dropColumn('optin');
        });
    }
}
