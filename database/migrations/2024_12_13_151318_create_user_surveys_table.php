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
        Schema::create('user_surveys', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('jabatan');
            $table->text('email');
            $table->text('phone');
            $table->integer('jumlah_lulusan');
            $table->integer('ipk_minimal');
            $table->text('institution_name');
            $table->text('institution_address');
            $table->text('institution_province');
            $table->text('institution_city');
            $table->text('institution_email');
            $table->text('institution_phone');
            $table->text('institution_business_field');
            $table->text('kepatuhan');
            $table->text('sikap');
            $table->text('emosional');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_surveys');
    }
};