<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_name');
            $table->string('blog_title');
            $table->string('blog_author_name');
            $table->string('blog_image');
            $table->string('blog_video');
            $table->text('blog_content');
            $table->date('blog_publish_date');
            $table->string('blog_meta_titles');
            $table->string('blog_status');

            $table->bigInteger('blog_category')->unsigned()->index()->nullable();
            $table->foreign('blog_category')->references('id')->on('blog_categories')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
