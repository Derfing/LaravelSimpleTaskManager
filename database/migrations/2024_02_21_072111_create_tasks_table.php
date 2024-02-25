<?php

use App\Models\Table;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Table::class)->constrained();
            $table->string('name', 64);
            $table->string('description', 256);
            $table->text('body');
            $table->boolean('completed')->default(false);
            $table->foreignId('taken_by')->nullable()->constrained(
                table: 'users',
                indexName: 'takenBy'
            );
            $table->enum('difficulty', ['easy', 'medium', 'hard'])->nullable();
            $table->string('tag', 16)->nullable();
            $table->dateTime('deadline')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
