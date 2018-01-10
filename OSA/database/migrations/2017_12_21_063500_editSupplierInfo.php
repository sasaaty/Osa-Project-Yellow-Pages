<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditSupplierInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('supplier', function (Blueprint $table){
            $table->dropColumn('service_type');
            $table->string('contact_person')->nullable();
            $table->integer('admin_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('supplier', function (Blueprint $table){
            $table->string('service_type');
            $table->drop('admin_id')->unsigned()->nullable();
        });
    }
}
