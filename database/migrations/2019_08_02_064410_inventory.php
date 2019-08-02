<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedInteger('item_id');
            $table->unsignedTinyInteger('unit_id');
            $table->string('standard', 255);
            $table->decimal('stock',8, 1);
            $table->decimal('input', 8, 1);
            $table->decimal('usage', 8, 1);
            $table->unsignedInteger('user_id');
            $table->text('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
