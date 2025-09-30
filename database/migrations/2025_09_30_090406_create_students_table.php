<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('students', function (Blueprint $table) {
            $table->id(); // Serial No.
            $table->string('sponsor_no')->nullable();
            $table->string('photo_path')->nullable();
            $table->string('student_id')->unique(); // শিক্ষার্থীর নং
            $table->string('dropped_out')->nullable();
               $table->string('name')->nullable();
               $table->string('gender')->nullable();
                  $table->string('class')->nullable();
                  $table->integer("roll")->nullable();
                     $table->string('weight')->nullable();
                        $table->string('height')->nullable();
                           $table->decimal('age')->nullable();
                              $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
              $table->string('father_occupation')->nullable();
            $table->string('mother_occupation')->nullable();
                 $table->integer('family_members')->default(0);
                          $table->string('mobile_number')->nullable();
                           $table->string('other_guardian')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('present_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
