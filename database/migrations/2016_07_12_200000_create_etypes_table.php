<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 12.07.2016
 * Time: 17:24
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('sport_id')->index();
            $table->integer('dimension');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('etypes');
    }
}