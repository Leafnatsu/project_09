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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullabale();
            $table->string('image')->nullabale();
            $table->integer('created_by')->nullable()->comment('user ที่เพิ่ม');
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
        Schema::dropIfExists('type_contents');
    }
    
};