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
        Schema::create('company_contact_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')
                ->references('id')->on('companies')
                ->onDelete('cascade');
            $table->string('company_name');
            $table->longText('company_address');
            $table->string('pin');
            $table->string('phone');
            $table->string('fax');
            $table->string('email');
            $table->string('website');
            $table->longText('website_address')->nullable();
            $table->longText('main_plant_address')->nullable();
            $table->string('plant_pin')->nullable();
            $table->string('plant_phone')->nullable();
            $table->string('plant_fax')->nullable();
            $table->string('plant_email')->nullable();
            $table->string('plant_website')->nullable();
            $table->longText('overseas_plant_address')->nullable();
            $table->longText('other_plant_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_contact_details');
    }
};
