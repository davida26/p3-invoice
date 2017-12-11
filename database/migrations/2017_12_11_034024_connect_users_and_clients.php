<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectUsersAndClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {

            # create the field - unsigned = cannot be negative
            $table->integer('user_id')->unsigned();

            # Specify the foreign key referencing the id on the users table.
            $table->foreign('user_id')->references('id')->on('users');
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
                # combine tableName + foreign key name + "foreign"
                $table->dropForeign('clients_user_id_foreign');
                $table->dropColumn('user_id');
         });
    }
}
