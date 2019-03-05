<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsFooter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us_footer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->text('map_link')->nullable();
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
        Schema::dropIfExists('contact_us_footer');
    }
}
