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
        // الأعمدة google_id و google_token مضافين بالفعل، فمش هنضيف حاجة هنا
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // مش هنشيل الأعمدة لأننا ما ضفناش حاجة في up()
    }
};
