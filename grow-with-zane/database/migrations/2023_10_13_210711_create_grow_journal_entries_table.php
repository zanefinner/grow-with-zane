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
        Schema::create('grow_journal_entries', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('journal_id');
            $table->foreign('journal_id')->references('id')->on('grow_journals');
            $table->date('entry_date');
            $table->text('summary')->nullable();
            $table->text('notes')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grow_journal_entries');
    }
};
