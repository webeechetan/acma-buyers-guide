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
        Schema::create('company_fproduct_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')
                ->references('id')->on('companies')
                ->onDelete('cascade');


            $table->string('f_collab1')->nullable();
            $table->string('f_prod1')->nullable();
            $table->string('nature1')->nullable();
            $table->string('per1')->nullable();
            $table->string('f_collab2')->nullable();
            $table->string('f_prod2')->nullable();
            $table->string('nature2')->nullable();
            $table->string('per2')->nullable();
            $table->string('f_collab3')->nullable();
            $table->string('f_prod3')->nullable();
            $table->string('nature3')->nullable();
            $table->string('per3')->nullable();
            $table->string('f_collab4')->nullable();
            $table->string('f_prod4')->nullable();
            $table->string('nature4')->nullable();
            $table->string('per4')->nullable();
            $table->string('f_collab5')->nullable();
            $table->string('f_prod5')->nullable();
            $table->string('nature5')->nullable();
            $table->string('per5')->nullable();
            $table->string('f_collab6')->nullable();
            $table->string('f_prod6')->nullable();
            $table->string('nature6')->nullable();
            $table->string('per6')->nullable();
            $table->string('f_collab7')->nullable();
            $table->string('f_prod7')->nullable();
            $table->string('nature7')->nullable();
            $table->string('per7')->nullable();
            $table->string('f_collab8')->nullable();
            $table->string('f_prod8')->nullable();
            $table->string('nature8')->nullable();
            $table->string('per8')->nullable();
            $table->string('f_collab9')->nullable();
            $table->string('f_prod9')->nullable();
            $table->string('nature9')->nullable();
            $table->string('per9')->nullable();
            $table->string('f_collab10')->nullable();
            $table->string('f_prod10')->nullable();
            $table->string('nature10')->nullable();
            $table->string('per10')->nullable();

            $table->string('member')->nullable();
            $table->string('iso')->nullable();
            $table->string('isodate')->nullable();
            $table->string('isoagency')->nullable();
            $table->string('qs')->nullable();
            $table->string('qsdate')->nullable();
            $table->string('qsagency')->nullable();
            $table->string('iso14')->nullable();
            $table->string('iso14date')->nullable();
            $table->string('iso14agency')->nullable();
            $table->string('ts')->nullable();
            $table->string('tsdate')->nullable();
            $table->string('tsagency')->nullable();
            $table->string('deming_award')->nullable();
            $table->string('japan_quality_medal')->nullable();
            $table->string('emark')->nullable();
            $table->string('bismark')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_fproduct_details');
    }
};
