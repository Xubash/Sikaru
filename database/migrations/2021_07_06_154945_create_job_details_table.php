<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->timestamp('posted_date')->nullable();;
            $table->timestamp('deadline')->nullable();;
            $table->text('short_description');
            $table->text('long_description');
            $table->text('key_responsibilities');
            $table->text('requirements');
            $table->integer('fk_company');
            $table->integer('fk_category');
            $table->integer('fk_skill');
            $table->integer('no_of_opeanings');
            $table->string('position_type');
            $table->string('experience');
            $table->string('education');
            $table->integer('fk_location');
            $table->integer('status');
            $table->integer('sort');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_details');
    }
}
