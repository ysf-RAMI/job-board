<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // If the singular 'comment' table exists and 'comments' does not, rename it.
        if (Schema::hasTable('comment') && !Schema::hasTable('comments')) {
            Schema::rename('comment', 'comments');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('comments') && !Schema::hasTable('comment')) {
            Schema::rename('comments', 'comment');
        }
    }
};
