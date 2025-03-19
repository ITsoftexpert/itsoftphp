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
        Schema::create('query_form', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('company_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('web_url')->nullable();
            $table->text('your_msg')->nullable();
            $table->string('preffered_option')->nullable();
            $table->string('budget')->nullable();
            $table->text('goals')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('category')->nullable();
            $table->text('Requirement')->nullable();
            $table->text('existing_tool')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('query_form');
    }
};
