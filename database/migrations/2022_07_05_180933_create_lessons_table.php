<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules');
            $table->string('title');
            $table->text('lesson_image')->nullable();
            $table->string('video_link');
            $table->longText('lesson_text');
//            $table->string('video');
            $table->boolean('is_active');
            $table->timestamps();


//            ->module_id
//                ->title
//                ->lesson image
//                ->short text
//                ->full text
//                ->downloadable files
//                ->active/published
//                ->free_lesson
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
