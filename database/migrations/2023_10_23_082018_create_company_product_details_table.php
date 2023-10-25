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
        Schema::create('company_product_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')
                ->references('id')->on('companies')
                ->onDelete('cascade');

            $table->string('products_manufactured')->nullable();
            $table->string('product2')->nullable();
            $table->string('product3')->nullable();
            $table->string('product4')->nullable();
            $table->string('scale')->nullable();
            $table->string('ssi_info')->nullable();
            $table->string('trademark')->nullable();
            $table->string('total_capital')->nullable();
            $table->string('net_investment_plant')->nullable();
            $table->string('total_investment_plant')->nullable();
            $table->string('sales_turnover')->nullable();
            $table->string('s_turn_in')->nullable();
            $table->string('export_turn_02_03')->nullable();
            $table->string('exports_in_mln')->nullable();
            $table->string('number_of_employees')->nullable();
            $table->string('skilled')->nullable();
            $table->string('semi_skilled')->nullable();
            $table->string('un_skilled')->nullable();
            $table->string('contractual')->nullable();
            $table->string('management_above')->nullable();
            
            $table->string('net_excise_duty_paid')->nullable();
            $table->string('total_custom_duty_paid')->nullable();
            $table->string('list_of_product_exported1')->nullable();
            $table->string('list_of_product_exported2')->nullable();
            $table->string('per_share_export_buy')->nullable();
            $table->string('per_share_export_oem')->nullable();
            $table->string('per_share_export_tier1')->nullable();
            $table->string('per_share_export_afm')->nullable();
            $table->string('per_share_domestic_oem')->nullable();
            $table->string('per_share_domestic_tier1')->nullable();
            $table->string('per_share_domestic_afm')->nullable();
            $table->string('product_patent')->nullable();
            $table->string('share_spent_on_rnd')->nullable();
            $table->string('dsir')->nullable();
            $table->string('expen_rd')->nullable();
            $table->string('employee_rd')->nullable();
            $table->string('person_name')->nullable();
            $table->string('person_designation')->nullable();
            $table->string('person_email')->nullable();
            $table->string('advertisement')->nullable();
            $table->string('field1')->nullable();
            $table->string('field2')->nullable();
            $table->string('net_duty_paid')->nullable();
            $table->string('custom_duty')->nullable();


            $table->string('other_mark1')->nullable();
            $table->string('other_mark2')->nullable();
            $table->string('domesticoe')->nullable();
            $table->string('domesticoe1')->nullable();
            $table->string('domesticoe2')->nullable();
            $table->string('domesticoe3')->nullable();
            $table->string('domesticoe4')->nullable();
            $table->string('domestic_tier_oe')->nullable();
            $table->string('domestic_tier_oe1')->nullable();
            $table->string('domestic_tier_oe2')->nullable();
            $table->string('domestic_tier_oe3')->nullable();
            $table->string('cusint1')->nullable();
            $table->string('cusint2')->nullable();
            $table->string('cusint3')->nullable();
            $table->string('cusint_tier1')->nullable();
            $table->string('cusint_tier2')->nullable();
            $table->string('cusint_tier3')->nullable();
            $table->string('afmkt1')->nullable();
            $table->string('afmkt2')->nullable();
            $table->string('afmkt3')->nullable();
           
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_product_details');
    }
};
