<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('id_type_product')->nullable();
            $table->string('name')->nullabale();
            $table->string('image')->nullabale();
            $table->string('detail')->nullabale();
            $table->integer('price')->nullabale();
            $table->integer('created_by')->comment('user ที่เพิ่ม');
            $table->integer('updated_by')->nullable()->comment('user ที่แก้ไข');
            $table->integer('deleted_by')->nullable()->comment('user ที่ลบ');
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
        Schema::dropIfExists('product');
    }
};
