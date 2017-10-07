<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notifications', function(Blueprint $table){
            $table->foreign('organization_id')->references('id')->on('organizations');
        });

        Schema::table('people', function (Blueprint $table){
            $table->foreign('organization_id')->references('id')->on('organizations');
        });

        Schema::table('organizations', function (Blueprint $table){
            $table->foreign('address_id')->references('id')->on('adresses');
        });

        Schema::table('documents', function (Blueprint $table){
            $table->foreign('document_type_id')->references('id')->on('document_types');
            $table->foreign('organization_id')->references('id')->on('organizations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notifications', function (Blueprint $table){
            $table->dropForeign(['organization_id']);
        });

        Schema::table('people', function (Blueprint $table){
            $table->dropForeign(['organization_id']);
        });

        Schema::table('organizations', function (Blueprint $table){
            $table->dropForeign(['address_id']);
        });

        Schema::table('documents', function (Blueprint $table){
            $table->dropForeign(['document_type_id', 'organization_id']);
        });
    }
}
