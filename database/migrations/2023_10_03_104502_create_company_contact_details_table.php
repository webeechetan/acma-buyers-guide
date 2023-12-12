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
            // $table->string('company_name')->nullable();
            $table->longText('company_address')->nullable();
            $table->string('pin')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            // $table->string('email')->nullable();
            // $table->string('website')->nullable();
            
            $table->longText('mainaddress1')->nullable();
            $table->longText('mainaddress2')->nullable();
            $table->longText('maincity')->nullable();
            $table->string('plant_pin')->nullable();
            $table->string('mainstate')->nullable();
            $table->string('plant_phone')->nullable();
            $table->string('plant_fax')->nullable();
            $table->string('plant_email')->nullable();           
            $table->longText('overseas_plant_1')->nullable();
            $table->longText('overseas_plant_2')->nullable();
            $table->longText('overseas_plant_3')->nullable();
            $table->longText('otheraddress')->nullable();
            $table->longText('otheraddress_1')->nullable();
            $table->longText('otherplant_address1')->nullable();
            $table->longText('otherplant_address2')->nullable();
            $table->longText('otherplant_address3')->nullable();
            $table->string('year_commencing')->nullable();
           

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
