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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id('attendance_id');
            $table->foreignId('employee_id')
            ->constrained('employees', 'employee_id')
            ->onDelete('cascade');
            $table->date('date');
            $table->time('check_in_time');
            $table->time('check_out_time')->nullable();
            $table->foreignId('holiday_id')
            ->nullable()
            ->constrained('holidays', 'holiday_id')
            ->onDelete('cascade');
            $table->foreignId('overtime_id')
            ->nullable()
            ->constrained('overtimes', 'overtime_id')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};