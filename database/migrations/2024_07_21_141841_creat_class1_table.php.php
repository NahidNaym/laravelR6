<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\ClassController;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('class1', function (Blueprint $table) {
            $table->id();
            $table->string('className', 100);
           $table->float('capacity');
            $table->float('price');
           $table->boolean('isFulled');
           $table->time('timeFrom');
           $table->time('timeTo');
           $table->timestamp('updated_at');
           });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
