<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            $table->string('business_name')->nullable();
            $table->string('business_date_of_birth')->nullable();
            $table->text('business_address')->nullable();
            $table->string('business_city')->nullable();
            $table->string('business_state')->nullable();
            $table->string('business_zip')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('business_fax')->nullable();
            $table->string('federal_tax_id')->nullable();
            $table->string('businesss_start_date')->nullable();
            $table->string('lenght_of_ownership')->nullable();
            $table->string('website')->nullable();
            $table->string('business_email')->nullable();
            $table->string('type_of_entity',64)->nullable();
            $table->string('type_of_business',64)->nullable();
            $table->string('service_sold',64)->nullable();

            $table->string('merchant_owner_name')->nullable();
            $table->string('merchant_title')->nullable();
            $table->string('merchant_ownership')->nullable();
            $table->text('merchant_home_address')->nullable();
            $table->string('merchant_city')->nullable();
            $table->string('merchant_state')->nullable();
            $table->string('merchant_zip')->nullable();
            $table->string('merchant_ssn')->nullable();
            $table->string('merchant_date_of_birth')->nullable();
            $table->string('merchant_home')->nullable();
            $table->string('merchant_phone_no')->nullable();

            $table->string('partner_owner_name')->nullable();
            $table->string('partner_title')->nullable();
            $table->string('partner_ownership')->nullable();
            $table->text('partner_home_address')->nullable();
            $table->string('partner_city')->nullable();
            $table->string('partner_state')->nullable();
            $table->string('partner_zip')->nullable();
            $table->string('partner_ssn')->nullable();
            $table->string('partner_date_of_birth')->nullable();
            $table->string('partner_home')->nullable();
            $table->string('partner_phone_no')->nullable();

            $table->string('business_mortgage_bank')->nullable();
            $table->string('business_mortgage_account')->nullable();
            $table->string('business_mortgage_phone')->nullable();

            $table->string('software_model')->nullable();
            $table->string('number_of_terminal')->nullable();
            $table->string('monthly_credit_card_volumn')->nullable();
            $table->string('avg_monthly_gross_sales_volumn')->nullable();
            $table->string('requested_advance_amount')->nullable();
            $table->string('do_you_accept')->nullable();
            $table->string('current_cash_advance_company')->nullable();
            $table->string('balance')->nullable();
            $table->string('underwrite')->nullable();

            $table->string('signature_one')->nullable();
            $table->string('signature_date_one')->nullable();
            $table->string('signature_two')->nullable();
            $table->string('signature_date_two')->nullable();
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
