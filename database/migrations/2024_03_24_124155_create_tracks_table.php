<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Project;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();

            $table->string("name", 100);
            $table->string("filename", 200)->nullable();
            $table->string("color")->default("#ffffff"); // Default color is white if not specified

            $table->foreignIdFor(Project::class)->constrained()->cascadeOnDelete(); // project_id (foreign key)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracks');
    }
};
