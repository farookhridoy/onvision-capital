
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title}}</title>
    <link href="assets/css/mpdf.css" rel="stylesheet">
    <style>
        @page {
            margin-top: 1.5in;
            margin-bottom: 1in;
            header: page-header;
            footer: page-footer;
        }

        html, body, p  {
            font-size:  12px !important;
            color: #000000;
        }
        table {
            width: 100% !important;
            border-spacing: 0px !important;
            margin-top: 10px !important;
            margin-bottom: 15px !important;
        }
        table caption {
            color: #000000 !important;
        }
        table td {
            padding-top: 1px !important;
            padding-bottom: 1px !important;
            padding-left: 7px !important;
            padding-right: 7px !important;
        }
        .table-non-bordered {
            padding-left: 0px !important;
        }
        .table-bordered {
            border-collapse: collapse;
        }
        .table-bordered td {
            border: 1px solid #000000;
            padding: 5px;
        }
        .table-bordered tr:first-child td {
            border-top: 0;
        }
        .table-bordered tr td:first-child {
            border-left: 0;
        }
        .table-bordered tr:last-child td {
            border-bottom: 0;
        }
        .table-bordered tr td:last-child {
            border-right: 0;
        }
        .mt-0 {
            margin-top: 0; 
        }
        .mb-0 {
            margin-bottom: 0; 
        }
        .image-space {
            white-space: wrap !important;
            padding-top: 45px !important;
        }
        .break-before {
            page-break-before: always;
            break-before: always;
        }
        .break-after {
            break-after: always;
        }
        .break-inside {
            page-break-inside: avoid;
            break-inside: avoid;
        }
        .break-inside-auto { 
            page-break-inside: auto;
            break-inside: auto;
        }
        .space-top {
            margin-top: 10px;
        }
        .space-bottom {
            margin-bottom: 10px;
        }

        .text-right{
            text-align:  right;
        }           
    </style>    
</head>

<body>
    <htmlpageheader name="page-header">
        <div class="row mb-3 print-header">
            <div class="col-md-12" style="width: 100%;float:left;padding-top: 50px">
                <h4 style="text-align: center"><strong>{{ $title }}</strong></h4>
            </div>
        </div>
    </htmlpageheader>

    <div class="container">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td colspan="2"><center><img src="{{ public_path('logo/logo.png') }}" style="max-height: 100px; width:100%"></center></td>
                </tr>
                <tr>
                    <td colspan="2"><center><strong>BUSINESS INFORMATION</strong></center></td>
                </tr>
                <tr>
                    <td style="width: 50% !important">
                        <h5 class="mb-0"><strong>Business Name:&nbsp;</strong></h5>
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{$user->business_name}}&nbsp;
                    </td>
                </tr>

                <tr>
                    <td style="width: 50% !important">
                        <h5 class="mb-0"><strong>DBA:&nbsp;</strong></h5>
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{$user->business_date_of_birth}}&nbsp;
                    </td>
                </tr>

                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Address:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->business_address }} &nbsp;
                        <br>
                        City : &nbsp;&nbsp; {{ $user->business_city }} <br>
                        State : &nbsp;&nbsp; {{ $user->business_state }} <br>
                        Zip : &nbsp;&nbsp; {{ $user->business_zip}} <br>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Telephone:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->business_phone }}
                    </td>
                </tr>
                {{-- <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Fax #:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->business_fax }}
                    </td>
                </tr> --}}
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Federal Tax ID:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->federal_tax_id }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Date Business Started:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->businesss_start_date !=""? date('jS F Y', strtotime($user->businesss_start_date)) :''}}
                    </td>
                </tr>
                {{-- <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Length of Ownership: % :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->lenght_of_ownership }}
                    </td>
                </tr> --}}
                {{-- <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Website: % :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->website }}
                    </td>
                </tr> --}}
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Type of Entity (circle one): % :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        <input type="radio" id="SoleProprietorship" name="type_of_entity" value="Sole Proprietorship" {{ isset($user)? ($user['type_of_entity'] === "Sole Proprietorship") ? 'checked' : '':'' }}>
                        <label for="SoleProprietorship">Sole Proprietorship</label>&nbsp;&nbsp;&nbsp;

                        <input type="radio" id="Partnership" name="type_of_entity" value="Partnership" {{ isset($user)? ($user['type_of_entity'] == "Partnership") ? 'checked=checked' : '':'' }}>
                        <label for="Partnership"> Partnership</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="radio" id="Corporation" name="type_of_entity" value="Corporation" {{ isset($user)? ($user['type_of_entity'] == "Corporation") ? 'checked=checked' : '':'' }}>
                        <label for="Corporation"> Corporation</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="radio" id="LLC" name="type_of_entity" value="LLC" {{ isset($user)? ($user['type_of_entity'] == "LLC") ? 'checked=checked' : '':'' }}>
                        <label for="LLC"> LLC</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="radio" id="Other" name="type_of_entity" value="Other" {{ isset($user)? ($user['type_of_entity'] == "Other") ? 'checked=checked' : '':'' }}>
                        <label for="Other"> Other</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Email:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{$user->business_email}}
                    </td>
                </tr>
                {{-- <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Type of Business (circle all that apply) :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        <input type="checkbox" id="RetailMOTO" name="type_of_business[]" value="Retail MO/TO" {{ isset($user)? in_array("Retail MO/TO" , json_decode($user['type_of_business']))? 'checked' : '':'' }}>
                        <label for="RetailMOTO">Retail MO/TO</label>&nbsp;&nbsp;&nbsp;

                        <input type="checkbox" id="Wholesale" name="type_of_business[]" value="Wholesale" {{ isset($user)? (in_array("Wholesale", json_decode($user['type_of_business'])))? 'checked' : '':'' }}>
                        <label for="Wholesale"> Wholesale</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="checkbox" id="Restaurant" name="type_of_business[]" value="Restaurant" {{ isset($user)? (in_array("Restaurant",json_decode($user['type_of_business'])))? 'checked' : '':'' }}>
                        <label for="Restaurant"> Restaurant</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="checkbox" id="Supermarket" name="type_of_business[]" value="Supermarket" {{ isset($user)? (in_array("Supermarket",json_decode($user['type_of_business'])))? 'checked' : '':'' }}>
                        <label for="Supermarket"> Supermarket</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="checkbox" id="Service" name="type_of_business[]" value="Service" {{ isset($user)? (in_array("Service", json_decode($user['type_of_business'])))? 'checked' : '':'' }}>
                        <label for="Service"> Service</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="checkbox" id="Other" name="type_of_business[]" value="Other" {{ isset($user)? (in_array("Other",json_decode($user['type_of_business'])))? 'checked' : '':'' }}>
                        <label for="Other"> Other</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                </tr> --}}
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Product/Service Sold :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->service_sold }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Requested Advance Amount:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->requested_advance_amount }}
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2"><center>MERCHANT/OWNER INFORMATION</center></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Corporate Officer/Owner Name:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">

                        {{$user->merchant_owner_name}}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Title:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->merchant_title }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Ownership %:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->merchant_ownership }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                       Home Address :&nbsp; 
                   </td>
                   <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                    &nbsp;{{ $user->merchant_home_address }}
                    <br>
                    <br>
                    City : &nbsp;&nbsp; {{ $user->merchant_city }} <br>
                    State : &nbsp;&nbsp; {{ $user->merchant_state }} <br>
                    Zip : &nbsp;&nbsp; {{ $user->merchant_zip}} <br>
                </td>
            </tr>
            <tr>
                <td style="width: 50% !important;font-size: 14px !important;">
                    SSN:&nbsp; 
                </td>
                <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                    {{ $user->merchant_ssn }}
                </td>
            </tr>
            <tr>
                <td style="width: 50% !important;font-size: 14px !important;">
                    Date of Birth  :&nbsp; 
                </td>
                <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                    {{ $user->merchant_date_of_birth !=""? date('jS F Y', strtotime($user->merchant_date_of_birth)):'' }}

                </td>
            </tr>

            {{-- <tr>
                <td style="width: 50% !important;font-size: 14px !important;">
                    Home #  :&nbsp; 
                </td>
                <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                    {{ $user->merchant_home }}
                </td>
            </tr> --}}
            <tr>
                <td style="width: 50% !important;font-size: 14px !important;">
                    Cell # :&nbsp; 
                </td>
                <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                    {{ $user->merchant_phone_no }}
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th colspan="2"><center>PARTNER /OWNER INFORMATION</center></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width: 50% !important;font-size: 14px !important;">
                    Corporate Officer/Owner Name:&nbsp; 
                </td>
                <td style="width: 50% !important;font-size: 14px !important;" class="text-right">

                    {{$user->partner_owner_name}}
                </td>
            </tr>
            <tr>
                <td style="width: 50% !important;font-size: 14px !important;">
                    Title:&nbsp; 
                </td>
                <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                    {{ $user->partner_title }}
                </td>
            </tr>
            <tr>
                <td style="width: 50% !important;font-size: 14px !important;">
                    Ownership %:&nbsp; 
                </td>
                <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                    {{ $user->partner_ownership }}
                </td>
            </tr>
            <tr>
                <td style="width: 50% !important;font-size: 14px !important;">
                   Home Address :&nbsp; 
               </td>
               <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                &nbsp;{{ $user->partner_home_address }}
                <br>
                <br>
                City : &nbsp;&nbsp; {{ $user->partner_city }} <br>
                State : &nbsp;&nbsp; {{ $user->partner_state }} <br>
                Zip : &nbsp;&nbsp; {{ $user->partner_zip}} <br>
            </td>
        </tr>
        <tr>
            <td style="width: 50% !important;font-size: 14px !important;">
                SSN:&nbsp; 
            </td>
            <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                {{ $user->partner_ssn }}
            </td>
        </tr>
        <tr>
            <td style="width: 50% !important;font-size: 14px !important;">
                Date of Birth  :&nbsp; 
            </td>
            <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                {{ $user->partner_date_of_birth!=''? date('jS F Y', strtotime($user->partner_date_of_birth)):'' }}

            </td>
        </tr>

        {{-- <tr>
            <td style="width: 50% !important;font-size: 14px !important;">
                Home #  :&nbsp; 
            </td>
            <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                {{ $user->partner_home }}
            </td>
        </tr> --}}
        <tr>
            <td style="width: 50% !important;font-size: 14px !important;">
                Cell # :&nbsp; 
            </td>
            <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                {{ $user->partner_phone_no }}
            </td>
        </tr>
    </tbody>
</table>

{{-- <table class="table table-bordered">
    <thead>
        <tr>
            <th colspan="2"><center>BUSINESS PROPERTY INFORMATION</center></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="width: 50% !important;font-size: 14px !important;">
                Credit Card Processing:&nbsp; 
            </td>
            <td style="width: 50% !important;font-size: 14px !important;" class="text-right">

                {{$user->software_model}}
            </td>
        </tr>
        <tr>
            <td style="width: 50% !important;font-size: 14px !important;">
                Number of Terminals:&nbsp; 
            </td>
            <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                {{ $user->number_of_terminal }}
            </td>
        </tr>
    </tbody>
</table> --}}

<table class="table table-bordered">
    <thead>
        <tr>
            <th colspan="2"><center>OTHER INFORMATION</center></th>
        </tr>
    </thead>
    <tbody>
   {{--  <tr>
        <td style="width: 50% !important;font-size: 14px !important;">
            Avg. Monthly Credit Card Volume:&nbsp; 
        </td>
        <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
            {{ $user->monthly_credit_card_volumn }}
        </td>
    </tr>
    <tr>
        <td style="width: 50% !important;font-size: 14px !important;">
            Avg. Monthly Gross Sales Volume :&nbsp; 
        </td>
        <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
            &nbsp;{{ $user->avg_monthly_gross_sales_volumn }}

        </td>
    </tr>
    
    <tr>
        <td style="width: 50% !important;font-size: 14px !important;">
            Do you Accept (Please circle all that apply)  :&nbsp; 
        </td>
        <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
            <br>
            <input type="checkbox" id="Visa/MasterCard" name="do_you_accept[]" value="Visa/MasterCard"  {{ isset($user)? in_array("Visa/MasterCard" , json_decode($user['do_you_accept']))? 'checked' : '':'' }}>
            <label for="Visa/MasterCard">Visa/MasterCard</label>&nbsp;&nbsp;&nbsp;

            <input type="checkbox" id="Amex" name="do_you_accept[]" value="Amex"  {{ isset($user)? in_array("Amex" , json_decode($user['do_you_accept']))? 'checked' : '':'' }}>
            <label for="Amex"> Amex</label>&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="checkbox" id="Discover" name="do_you_accept[]" value="Discover"  {{ isset($user)? in_array("Discover" , json_decode($user['do_you_accept']))? 'checked' : '':'' }}>
            <label for="Discover"> Discover</label>&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="checkbox" id="Debit" name="do_you_accept[]" value="Debit" {{ isset($user)? in_array("Debit" , json_decode($user['do_you_accept']))? 'checked' : '':'' }}>
            <label for="Debit"> Debit</label>&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="checkbox" id="EBT" name="do_you_accept[]" value="EBT"  {{ isset($user)? in_array("EBT" , json_decode($user['do_you_accept']))? 'checked' : '':'' }}>
            <label for="EBT"> EBT</label>&nbsp;&nbsp;&nbsp;&nbsp;

        </td>
    </tr> --}}

    <tr>
        <td style="width: 50% !important;font-size: 14px !important;">
            Prior/Current Advances Taken (if applicable)  :&nbsp; 
        </td>
        <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
            {{ $user->current_cash_advance_company }}
        </td>
    </tr>
    <tr>
        <td style="width: 50% !important;font-size: 14px !important;">
            Balance :&nbsp; 
        </td>
        <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
            {{ $user->balance }}
        </td>
    </tr>

    {{-- <tr>
        <td style="width: 50% !important;font-size: 14px !important;">
            Underwriter Use Only :&nbsp; 
        </td>
        <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
            {{ $user->underwrite }}
        </td>
    </tr> --}}
    <tr>
        <td colspan="2"> 
            <p class="text-left font-weight-bold">Applicant authorizes each of the above listed business and business owner/officer (individually and
                collectively, "Applicant") certify that the Applicant is an owner of the above-named business and that
                all information provided in the application is true and accurate. Applicant shall Immediately notify
                Onvision Capital of any change in such information or financial condition. Applicant authorizes
                Onvision Capital share this application with each of its representatives, successors, assigns and
                designees ("Assignees") or any other parties that may be Involved with the extension of credit
                pursuant to this application Including those who offer commercial loans having daily repayment
                features or purchases of future receivables including Merchant Cash Advance transactions, including
                without limitation the application therefor (collectively, "Transactions). Applicant further authorizes
                Onvision Capital and all Assignees to request and receive any third-party consumer or personal,
                business and investigative reports and other information about Applicant, including credit card
                processor statements and bank statements, from one or more consumer reporting agencies, such as
                TransUnion, Experian, and Equifax, and from other credit bureaus, banks, creditors and other third
                parties. Applicant authorizes Onvision Capital to transmit this form, along with any other foregoing
                information obtained in connection with this application, to any or all of the Assignees for the
                foregoing purpose. You also consent to the release, by any creditor or financial institution, of any
                information relating to any of you, to Onvision Capital and to each of the Assignees, on its own behalf.
                Applicant waives and releases any claims against Recipients and any information providers arising
                from any act or omission relating to the requesting, receiving or release of the information obtained
            in connection with this application</p>
        </td>
    </tr>
    <tr>
        <td style="width: 50% !important;font-size: 14px !important;">
            @if(!empty($user->signature_one) && file_exists(public_path($user->signature_one)))
            <img src="{{ public_path($user->signature_one) }}" style="max-height: 100px; width:100%">
            @endif
            <hr>
            Applicant’s Signature
        </td>
        <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
            {{ $user->signature_date_one !=''? date('jS F Y', strtotime($user->signature_date_one)) :'' }}
        </td>
    </tr>
    @if($user->partner_owner_name !='')
    <tr>
        <td style="width: 50% !important;font-size: 14px !important;">
            @if(!empty($user->signature_two) && file_exists(public_path($user->signature_two)))
            <img src="{{ public_path($user->signature_two) }}" style="max-height: 100px; width:100%">
            @endif
            <hr>
            2nd Applicant’s Signature
        </td>
        <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
            {{ $user->signature_date_two !=''? date('jS F Y', strtotime($user->signature_date_two)):'' }}
        </td>
    </tr>
    @endif
</tbody>
</table>
</div>

<htmlpagefooter name="page-footer">
    <table class="table-bordered">
        <tbody>
            <tr>
                <td colspan="2" style="border: none !important">
                    <small>(Note: This mail doesn’t require signature as it is automatically generated from system)</small>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right;border: none !important">
                    <small>Page {PAGENO} of {nb}</small>
                </td>
            </tr>
        </tbody>
    </table>
</htmlpagefooter>
</body>
</html>                                                                                                                                                                                                                             