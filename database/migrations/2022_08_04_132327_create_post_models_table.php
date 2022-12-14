<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//return new class extends Migration
class CreatePostModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_news', function (Blueprint $table) 
        {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('likes')->nullable();
            $table->boolean('is_published')->default(1);
            $table->timestamps();

            $table->SoftDeletes();

            $table->unsignedBigInteger('category_id')->nullable();

    /*
        Порядок миграций ВАЖЕН! Если создаешь связь 
        таблицы №1 с таблицой №2, табл. №2 уже должна 
        существовать!
            
    */
            $table->index('category_id', 'post_category_idx');
            $table->foreign('category_id', 'post_category_fk')->on('categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_news');
    }
};
