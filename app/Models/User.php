<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'business_name',
        'business_date_of_birth',
        'business_address',
        'business_city',
        'business_state',
        'business_zip',
        'business_phone',
        'business_fax',
        'federal_tax_id',
        'businesss_start_date',
        'lenght_of_ownership',
        'website',
        'business_email',
        'type_of_entity',
        'type_of_business',
        'service_sold',
        'merchant_owner_name',
        'merchant_title',
        'merchant_ownership',
        'merchant_home_address',
        'merchant_city',
        'merchant_state',
        'merchant_zip',
        'merchant_ssn',
        'merchant_date_of_birth',
        'merchant_home',
        'merchant_phone_no',
        'partner_owner_name',
        'partner_title',
        'partner_ownership',
        'partner_home_address',
        'partner_city',
        'partner_state',
        'partner_zip',
        'partner_ssn',
        'partner_date_of_birth',
        'partner_home',
        'partner_phone_no',
        'business_mortgage_bank',
        'business_mortgage_account',
        'business_mortgage_phone',
        'software_model',
        'number_of_terminal',
        'monthly_credit_card_volumn',
        'avg_monthly_gross_sales_volumn',
        'requested_advance_amount',
        'do_you_accept',
        'current_cash_advance_company',
        'balance',
        'underwrite',
        'signature_one',
        'signature_date_one',
        'signature_two',
        'signature_date_two',
        'bank_statements_file',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];
}
