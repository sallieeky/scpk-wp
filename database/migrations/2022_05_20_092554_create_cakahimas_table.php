<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCakahimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cakahimas', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("ipk");
            $table->string("sk2pm");
            $table->string("jml_op");
            $table->string("total_ktm");
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
        Schema::dropIfExists('cakahimas');
    }
}
