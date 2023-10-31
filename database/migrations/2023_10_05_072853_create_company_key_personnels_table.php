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
        Schema::create('company_key_personnels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')
                ->references('id')->on('companies')
                ->onDelete('cascade');
            $table->string('managing_director')->nullable();
            $table->string('managing_director_email')->nullable();
            $table->string('managing_director_contact')->nullable();
            $table->string('chief_executive')->nullable();
            $table->string('chief_executive_email')->nullable();
            $table->string('chief_executive_contact')->nullable();
            $table->string('sales_in_charge')->nullable();
            $table->string('sales_in_charge_email')->nullable();
            $table->string('sales_in_charge_contact')->nullable();
            $table->string('export_in_charge')->nullable();
            $table->string('export_in_charge_email')->nullable();
            $table->string('export_in_charge_contact')->nullable();
            $table->string('production_in_charge')->nullable();
            $table->string('production_in_charge_email')->nullable();
            $table->string('production_in_charge_contact')->nullable();
            $table->string('hr_in_charge')->nullable();
            $table->string('hr_in_charge_email')->nullable();
            $table->string('hr_in_charge_contact')->nullable();
            $table->string('it_in_charge')->nullable();
            $table->string('it_in_charge_email')->nullable();
            $table->string('it_in_charge_contact')->nullable();
            $table->string('quality_in_charge')->nullable();
            $table->string('quality_in_charge_email')->nullable();
            $table->string('quality_in_charge_contact')->nullable();
            $table->string('r_d_in_charge')->nullable();
            $table->string('r_d_in_charge_email')->nullable();
            $table->string('r_d_in_charge_contact')->nullable();
            $table->string('metallurgy_in_charge')->nullable();
            $table->string('metallurgy_in_charge_email')->nullable();
            $table->string('metallurgy_in_charge_contact')->nullable();
            $table->string('finance_in_charge')->nullable();
            $table->string('finance_in_charge_email')->nullable();
            $table->string('finance_in_charge_contact')->nullable();
            $table->string('scm_in_charge')->nullable();
            $table->string('scm_in_charge_email')->nullable();
            $table->string('scm_in_charge_contact')->nullable();
            $table->string('plant_in_charge')->nullable();
            $table->string('plant_in_charge_email')->nullable();
            $table->string('plant_in_charge_contact')->nullable();

            $table->string('hrd_incharge')->nullable();
            $table->string('rnd_incharge')->nullable();

            $table->string('responded')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('update')->nullable();
            $table->string('update_date')->nullable();
            $table->string('region')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_key_personnels');
    }
};
