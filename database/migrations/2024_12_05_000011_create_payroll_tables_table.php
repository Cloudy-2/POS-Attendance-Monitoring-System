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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id('payroll_id');
            // Remove the foreign key constraint below
            $table->unsignedBigInteger('employee_id'); // Remove the foreignId line
            $table->decimal('gross_salary', 10, 2);
            // Remove the foreign key constraint below
            $table->unsignedBigInteger('deduction_id'); // Remove the foreignId line
            $table->decimal('net_salary', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll_tables');
    }
};