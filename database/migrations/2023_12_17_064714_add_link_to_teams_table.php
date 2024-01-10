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
        Schema::table('teams', function (Blueprint $table) {
            $table->text('link1')->after('class1');
            $table->text('link2')->after('class2');
            $table->text('link3')->after('class3');
            $table->text('link4')->after('class4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn('link1');
            $table->dropColumn('link2');
            $table->dropColumn('link3');
            $table->dropColumn('link4');
        });
    }
};
