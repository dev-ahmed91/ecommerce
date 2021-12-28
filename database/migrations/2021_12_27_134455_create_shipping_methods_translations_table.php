<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingMethodsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_methods_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("shipping_method_id")->unsigned();
            $table->string("locale");
            $table->string("title");
            $table->text("description")->nullable();

            $table->unique(['shipping_method_id','locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_methods_translations');
    }
}
