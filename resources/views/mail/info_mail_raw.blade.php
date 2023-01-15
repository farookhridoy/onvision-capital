{{-- @php
$user = App\Models\User::find(19);
@endphp --}}
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

        *{
            margin: 0;
            padding: 0;
            text-indent: 0;
        }
        .s1 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }
        .s2 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }
        .s4 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }
        .s5 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 8pt;
        }
        .s7 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 6pt;
            vertical-align: 3pt;
        }
        table,
        tbody {
            vertical-align: top;
            overflow: visible;
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

        <span>
            <table border="0" cellspacing="0" cellpadding="0" style="padding-left: 325pt; text-indent: 0pt; text-align: left;">
                <tr>
                    <td>
                        <img width="167" height="65" src="{{ public_path('logo/logo.png') }}"/>
                    </td>
                </tr>
            </table>
        </span>

        <p style="text-indent: 0pt; text-align: left;"><br /></p>
        <table style="border-collapse: collapse; margin-left: 5.94pt;" cellspacing="0">
            <tr style="height: 16pt;">
                <td
                style="
                width: 530pt;
                border-top-style: solid;
                border-top-width: 1pt;
                border-left-style: solid;
                border-left-width: 1pt;
                border-bottom-style: solid;
                border-bottom-width: 1pt;
                border-right-style: solid;
                border-right-width: 1pt;
                "
                colspan="4"
                >
                <p class="s1" style="padding-left: 169pt; padding-right: 171pt; text-indent: 0pt; text-align: center;">BUSINESS INFORMATION</p>
            </td>
        </tr>
        <tr style="height: 19pt;">
            <td
            style="
            width: 259pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
            "
            >
            <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Legal/Corporate Name: <strong>{{$user->business_name}}</strong></p>
        </td>
        <td
        style="
        width: 271pt;
        border-top-style: solid;
        border-top-width: 1pt;
        border-left-style: solid;
        border-left-width: 1pt;
        border-bottom-style: solid;
        border-bottom-width: 1pt;
        border-right-style: solid;
        border-right-width: 1pt;
        "
        colspan="3"
        >
        <p class="s2" style="padding-left: 6pt; text-indent: 0pt; line-height: 10pt; text-align: left;">DBA: &nbsp;{{$user->business_date_of_birth}}</p>
    </td>
</tr>
<tr style="height: 17pt;">
    <td
    style="
    width: 259pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    >
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Physical Address: {{ $user->business_address }} &nbsp;
        <td
        style="
        width: 136pt;
        border-top-style: solid;
        border-top-width: 1pt;
        border-left-style: solid;
        border-left-width: 1pt;
        border-bottom-style: solid;
        border-bottom-width: 1pt;
        border-right-style: solid;
        border-right-width: 1pt;
        "
        >
        <p class="s2" style="padding-left: 6pt; text-indent: 0pt; line-height: 10pt; text-align: left;">City: &nbsp;{{ $user->business_city }}</p>
    </td>
    <td
    style="
    width: 64pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    >
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">State: &nbsp;{{ $user->business_state }}</p>
</td>
<td
style="
width: 71pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Zip: &nbsp;{{ $user->business_zip}}</p>
</td>
</tr>
<tr style="height: 17pt;">
    <td
    style="
    width: 202pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    >
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Telephone #:  {{ $user->business_phone }}</p>
</td>
<td
style="
width: 163pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 7pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Fax #: {{ $user->business_fax }}</p>
</td>
<td
style="
width: 165pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
colspan="2"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Federal Tax ID:  {{ $user->federal_tax_id }}</p>
</td>
</tr>
<tr style="height: 17pt;">
    <td
    style="
    width: 202pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    >
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Date Business Started: {{ $user->businesss_start_date !=""? date('jS F Y', strtotime($user->businesss_start_date)) :''}}</p>
</td>
<td
style="
width: 163pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 7pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Length of Ownership: {{ $user->lenght_of_ownership }}</p>
</td>
<td
style="
width: 165pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
colspan="2"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Website: {{ $user->website }}</p>
</td>
</tr>
<tr style="height: 31pt;">
    <td style="width: 365pt; border-top-style: solid; border-top-width: 1pt; border-left-style: solid; border-left-width: 1pt; border-right-style: solid; border-right-width: 1pt;" colspan="2">
        <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Type of Entity (circle one):</p>

        <input type="radio" id="SoleProprietorship" name="type_of_entity" value="Sole Proprietorship" {{ isset($user)? ($user['type_of_entity'] === "Sole Proprietorship") ? 'checked' : '':'' }}>
        <label for="SoleProprietorship">Sole Proprietorship</label>&nbsp;&nbsp;&nbsp;

        <input type="radio" id="Partnership" name="type_of_entity" value="Partnership" {{ isset($user)? ($user['type_of_entity'] == "Partnership") ? 'checked=checked' : '':'' }}>
        <label for="Partnership"> Partnership</label>&nbsp;&nbsp;&nbsp;&nbsp;

        <input type="radio" id="Corporation" name="type_of_entity" value="Corporation" {{ isset($user)? ($user['type_of_entity'] == "Corporation") ? 'checked=checked' : '':'' }}>
        <label for="Corporation"> Corporation</label>&nbsp;&nbsp;&nbsp;&nbsp;

        <input type="radio" id="LLC" name="type_of_entity" value="LLC" {{ isset($user)? ($user['type_of_entity'] == "LLC") ? 'checked=checked' : '':'' }}>
        <label for="LLC"> LLC</label>&nbsp;&nbsp;&nbsp;&nbsp;

        <input type="radio" id="Other" name="type_of_entity" value="Other" {{ isset($user)? ($user['type_of_entity'] == "Other") ? 'checked=checked' : '':'' }}>
        <label for="Other"> Other</label>&nbsp;

    </td>
    <td
    style="
    width: 165pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    colspan="2"
    >
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Email Address:  {{$user->business_email}}</p>
</td>
</tr>
<tr style="height: 30pt;">

    <td
    style="
    width: 224pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    colspan="2"
    >
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Product/Service Sold: {{ $user->service_sold }}</p>
</td>
</tr>
<tr style="height: 12pt;">
    <td
    style="
    width: 530pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    colspan="4"
    >
    <p class="s1" style="padding-left: 172pt; padding-right: 171pt; text-indent: 0pt; line-height: 11pt; text-align: center;">MERCHANT/OWNER INFORMATION</p>
</td>
</tr>
<tr style="height: 21pt;">
    <td
    style="
    width: 233pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    >
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Corporate Officer/Owner Name: {{$user->merchant_owner_name}}</p>
</td>
<td
style="
width: 162pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Title:  {{ $user->merchant_title }}</p>
</td>
<td
style="
width: 135pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
colspan="2"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Ownership %: {{ $user->merchant_ownership }}</p>
</td>
</tr>
<tr style="height: 21pt;">
    <td
    style="
    width: 233pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    >
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Home Address: {{ $user->merchant_home_address }}</p>
</td>
<td
style="
width: 162pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">City: {{ $user->merchant_city }}</p>
</td>
<td
style="
width: 64pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">State: {{ $user->merchant_state }}</p>
</td>
<td
style="
width: 71pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Zip: {{ $user->merchant_zip}}</p>
</td>
</tr>
<tr style="height: 17pt;">
    <td
    style="
    width: 149pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    >
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">SSN:  {{ $user->merchant_ssn }}</p>
</td>
<td
style="
width: 110pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Date of Birth: {{ $user->merchant_date_of_birth !=""? date('jS F Y', strtotime($user->merchant_date_of_birth)):'' }}</p>
</td>
<td
style="
width: 136pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 4pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Home #: {{ $user->merchant_home }}</p>
</td>
<td
style="
width: 135pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Cell#: {{ $user->merchant_phone_no }}</p>
</td>
</tr>
<tr style="height: 13pt;">
    <td
    style="
    width: 530pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    colspan="4"
    >
    <p class="s4" style="padding-left: 172pt; padding-right: 171pt; text-indent: 0pt; line-height: 10pt; text-align: center;">PARTNER INFORMATION</p>
</td>
</tr>
<tr style="height: 21pt;">
    <td
    style="
    width: 233pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    >
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Partner Name:  {{$user->partner_owner_name}}</p>
</td>
<td
style="
width: 162pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 4pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Title: {{ $user->partner_title }}</p>
</td>
<td
style="
width: 135pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
colspan="2"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Ownership %: {{ $user->partner_ownership }}</p>
</td>
</tr>
<tr style="height: 18pt;">
    <td
    style="
    width: 233pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    >
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Home Address: {{ $user->partner_home_address }}</p>
</td>
<td
style="
width: 162pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 4pt; text-indent: 0pt; line-height: 10pt; text-align: left;">City: {{ $user->partner_city }}</p>
</td>
<td
style="
width: 64pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">State: {{ $user->partner_state }}</p>
</td>
<td
style="
width: 71pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Zip: {{ $user->partner_zip }}</p>
</td>
</tr>
<tr style="height: 17pt;">
    <td
    style="
    width: 149pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    >
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">SSN: {{ $user->partner_ssn }}</p>
</td>
<td
style="
width: 110pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Date of Birth: {{ $user->partner_date_of_birth!=''? date('jS F Y', strtotime($user->partner_date_of_birth)):'' }}</p>
</td>
<td
style="
width: 136pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 6pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Home #: {{ $user->partner_home }}</p>
</td>
<td
style="
width: 135pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Cell #: {{ $user->partner_phone_no }}</p>
</td>
</tr>
{{-- <tr style="height: 13pt;">
<td
style="
width: 530pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
colspan="4"
>
<p class="s1" style="padding-left: 172pt; padding-right: 171pt; text-indent: 0pt; text-align: center;">BUSINESS PROPERTY INFORMATION</p>
</td>
</tr>
<tr style="height: 24pt;">
<td
style="
width: 233pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Business Landlord or Business Mortgage Bank:</p>
</td>
<td
style="
width: 162pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Contact Name and/or Account #:</p>
</td>
<td
style="
width: 135pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
colspan="2"
>
<p class="s2" style="padding-left: 5pt; text-indent: 0pt; line-height: 10pt; text-align: left;">Phone #:</p>
</td>
</tr>
<tr style="height: 11pt;">
<td
style="
width: 129pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
rowspan="2"
>
<p class="s2" style="padding-left: 1pt; padding-right: 19pt; text-indent: 0pt; line-height: 8pt; text-align: center;">Credit Card Processing</p>
<p class="s2" style="padding-left: 1pt; padding-right: 19pt; text-indent: 0pt; line-height: 10pt; text-align: center;">Terminal(s)/Software Model:</p>
</td>
<td
style="
width: 73pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
rowspan="2"
>
<p class="s5" style="padding-left: 24pt; padding-right: 11pt; text-indent: 0pt; line-height: 121%; text-align: left;">Number of Terminals:</p>
</td> --}}
<tr style="height: 13pt;">
    <td
    style="
    width: 530pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    colspan="4"
    >
    <p class="s4" style="padding-left: 172pt; padding-right: 171pt; text-indent: 0pt; line-height: 10pt; text-align: center;">OTHER INFORMATION</p>
</td>
</tr>
{{-- <td
style="
width: 193pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s1" style="padding-left: 7pt; text-indent: 0pt; line-height: 9pt; text-align: left;"></p>
</td>
<td
style="
width: 135pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
rowspan="2"
> --}}
{{-- <p class="s5" style="padding-left: 5pt; text-indent: 0pt; text-align: left;">Avg. Monthly Gross Sales Volume</p>
</td>
</tr>
<tr style="height: 27pt;">
<td
style="
width: 193pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s5" style="padding-left: 35pt; text-indent: 0pt; line-height: 9pt; text-align: left;">Avg. Monthly Credit Card Volume</p>
</td>
</tr>
<tr style="height: 33pt;">
<td
style="
width: 202pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
>
<p class="s2" style="padding-left: 3pt; text-indent: 0pt; text-align: left;">Requested Advance Amount:</p>
</td>
<td
style="
width: 328pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
colspan="3"
>
<p class="s2" style="padding-left: 20pt; padding-right: 62pt; text-indent: 0pt; text-align: left;">Do you Accept: Visa/MasterCard Amex Discover Debit EBT Please circle all that apply.</p>
</td>
</tr> --}}
<tr style="height: 27pt;">
    <td
    style="
    width: 208pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    colspan="2"
    >
    <p class="s2" style="padding-left: 1pt; text-indent: 0pt; line-height: 9pt; text-align: left;">Prior/Current Cash Advance Company (if applicable): <strong>{{ $user->current_cash_advance_company }}</strong></p>
</td>
<td
style="
width: 187pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
colspan="2"
>
<p class="s2" style="padding-left: 28pt; text-indent: 0pt; line-height: 9pt; text-align: left;">Balance: <strong> {{ $user->balance }}</strong></p>
</td>
{{-- <td
style="
width: 135pt;
border-top-style: solid;
border-top-width: 1pt;
border-left-style: solid;
border-left-width: 1pt;
border-bottom-style: solid;
border-bottom-width: 1pt;
border-right-style: solid;
border-right-width: 1pt;
"
colspan="2"
>
<p class="s2" style="padding-left: 4pt; text-indent: 0pt; line-height: 9pt; text-align: left;">Underwriter Use Only</p>
<p class="s2" style="padding-left: 4pt; text-indent: 0pt; text-align: left;">Split Funds <u>&nbsp; </u>ACH <u>&nbsp; </u></p>
</td> --}}
</tr>
<tr style="height: 211pt;">
    <td
    style="
    width: 530pt;
    border-top-style: solid;
    border-top-width: 1pt;
    border-left-style: solid;
    border-left-width: 1pt;
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;
    "
    colspan="4"
    >
    <p class="s5" style="padding-top: 1pt; padding-left: 4pt; padding-right: 6pt; text-indent: 0pt; text-align: left;">
        Applicant authorizes each of the above listed business and business owner/officer (individually and collectively, &quot;Applicant&quot;) certify that the Applicant is an owner of the above-named business and that all
        information provided in the application is true and accurate. Applicant shall Immediately notify Onvision Capital of any change in such information or financial condition. Applicant authorizes Onvision Capital share
        this application with each of its representatives, successors, assigns and designees (&quot;Assignees&quot;) or any other parties that may be Involved with the extension of credit pursuant to this application
        Including those who offer commercial loans having daily repayment features or purchases of future receivables including Merchant Cash Advance transactions, including without limitation the application therefor
        (collectively, &quot;Transactions). Applicant further authorizes Onvision Capital and all Assignees to request and receive any third-party consumer or personal, business and investigative reports and other
        information about Applicant, including credit card processor statements and bank statements, from one or more consumer reporting agencies, such as TransUnion, Experian, and Equifax, and from other credit bureaus,
        banks, creditors and other third parties. Applicant authorizes Onvision Capital to transmit this form, along with any other foregoing information obtained in connection with this application, to any or all of the
        Assignees for the foregoing purpose. You also consent to the release, by any creditor or financial institution, of any information relating to any of you, to Onvision Capital and to each of the Assignees on its own
        behalf. Applicant waives and releases any claims against Recipients and any information providers arising from any act or omission relating to the requesting, receiving or release of the information obtained in
        connection with this application.
    </p>
</td>
</tr>
<tr style="height: 27pt;">
    <td style="width: 208pt;border-left-style: solid;border-left-width: 1pt;border-bottom-style: solid;border-bottom-width: 1pt;
    " colspan="2">
    <br>
    <br>
    @if(!empty($user->signature_one) && file_exists(public_path($user->signature_one)))
    <span><img class="s2" src="{{ public_path($user->signature_one) }}" style="max-height: 100px; width:100%;padding-left: 5pt; text-indent: 0pt; text-align: left;"></span>
    @endif
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; text-align: left;">Applicant’s Signature</p>

    <br>
    <br>
    @if(!empty($user->signature_two) && file_exists(public_path($user->signature_two)))
    <span><img src="{{ public_path($user->signature_two) }}" style="max-height: 100px; width:100%"></span>
    @endif
    <p class="s2" style="padding-left: 5pt; text-indent: 0pt; text-align: left;">2nd Applicant’s Signature</p>
</td>
<td
style="width: 187pt;border-top-style: solid;
    border-top-width: 1pt;
    
    border-bottom-style: solid;
    border-bottom-width: 1pt;
    border-right-style: solid;
    border-right-width: 1pt;" colspan="2">
<br>
<br>
<p class="s2" style="padding-left: 28pt; text-indent: 0pt; line-height: 9pt; text-align: left;">Date: {{ $user->signature_date_one !=''? date('jS F Y', strtotime($user->signature_date_one)) :'' }}</p>
<hr>
<br>
<br>
<p class="s2" style="padding-left: 28pt; text-indent: 0pt; line-height: 9pt; text-align: left;">Date: {{ $user->signature_date_two !=''? date('jS F Y', strtotime($user->signature_date_two)) :'' }}</p>
<hr>
</td>
</tr>
</table>
<p style="text-indent: 0pt; text-align: left;" />
<p style="text-indent: 0pt; text-align: left;" />
</div>

<htmlpagefooter name="page-footer">
    <table class="table-bordered">
        <tbody>
            <tr>
                <td colspan="2" style="border: none !important">
                    <small></small>
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