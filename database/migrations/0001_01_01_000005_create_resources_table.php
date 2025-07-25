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
Schema::create('resources', function (Blueprint $table) {
    $table->uuid('id')->primary();

    $table->uuid('course_id')->nullable();
    $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');

    $table->string('title')->nullable();
    $table->string('type')->nullable();
    $table->timestamps();
    $table->softDeletes();
});


  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('resources');
  }
};
