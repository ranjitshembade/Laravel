<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
           
           // Removed auto-increment and primary key
            $table->string('email', 30)->nullable(false)->unique()->change();
            
        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};
