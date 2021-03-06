<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produk_id')->unsigned();
            $table->foreign('produk_id')->references('id')->on('produk')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags')
                ->onUpdate('cascade')->onDelete('cascade');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produk_tag');
    }
}
