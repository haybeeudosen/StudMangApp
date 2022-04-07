<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffBiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_bios', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->tinyInteger('phonenumber')->unique();
            $table->timestamp('dateofbirth');
            $table->tinyInteger('gender');
            $table->tinyInteger('maritalstatus');
            $table->string('src');
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
        Schema::dropIfExists('staff_bios');
    }
}
