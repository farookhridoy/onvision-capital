
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
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Email:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                         {{$user->business_email}}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                       Phone  No:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->business_phone }}
                    </td>
                </tr>
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
                       Business Start Date:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ date('jS F Y', strtotime($user->businesss_start_date)) }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                       State of Incorporation :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->state_of_incorporation }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                       Do you have any open merchant cash advance or business loan accounts? :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{($user->is_it_business_loan_account)=='yes'?"Yes":"No"}}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                       Merchant Cash Advance/Business Loan Lender(s) :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->business_loan_lender }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                       Merchant Cash Advance/Business Loan Balance :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        Home City: &nbsp;{{ $user->business_loan_balance }}
                       
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        Address:&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->business_address }}
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
                        {{ date('jS F Y', strtotime($user->merchant_date_of_birth)) }}

                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                       Merchant Email :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->merchant_email }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                       Cell Phone :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->merchant_phone_no }}
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                       Merchant Address :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        &nbsp;{{ $user->merchant_home_address }}
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
                        {{ date('jS F Y', strtotime($user->partner_date_of_birth)) }}

                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                       Merchant Email :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->partner_email }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                       Cell Phone :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ $user->partner_phone_no }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                       Merchant Address :&nbsp; 
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        &nbsp;{{ $user->partner_home_address }}
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2"><center>CONSENT</center></th>
                </tr>
            </thead>
            <tbody>
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
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ date('jS F Y', strtotime($user->signature_date_one)) }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 50% !important;font-size: 14px !important;">
                        @if(!empty($user->signature_two) && file_exists(public_path($user->signature_two)))
                            <img src="{{ public_path($user->signature_two) }}" style="max-height: 100px; width:100%">
                        @endif
                    </td>
                    <td style="width: 50% !important;font-size: 14px !important;" class="text-right">
                        {{ date('jS F Y', strtotime($user->signature_date_two)) }}
                    </td>
                </tr>
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