<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('category_post', function (Blueprint $table) {
            $table->id();
            $table->integer('cetegory_id');
            $table->integer('post_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_post');
    }
};
