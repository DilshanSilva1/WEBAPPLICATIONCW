<?php

use App\Models\school;
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
        Schema::create('developers', function (Blueprint $table) {
            $table->id(); // auto-incrementing unsignedBigInteger for primary key
            $table->timestamps(); // timestamp columns (created_at, updated_at)
            $table->string('name'); // developer's name
            $table->integer('Exp'); // developer's experience (as an integer)
            $table->text('bio'); // developer's bio (text type for larger content)
            $table->foreignIdFor(school::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developers');
    }
};
