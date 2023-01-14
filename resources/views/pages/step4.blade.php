@extends('partials.master')
@section('styles')
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css">
<style>
    .kbw-signature {
        width: 100%;
        height: 200px;
    }
</style>
@endsection
@php
if (Session::has('partner')) {
$partner = Session::get('partner');
}
@endphp
@section('content')
<div class="container">
    @include('partials.head')
    @include('partials.msg')
</div>
<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="checkout_steps_area mt-5">
                <a href="#">BUSINESS INFORMATION</a>
                <a href="#">MERCHANT/OWNER INFORMATION</a>
                <a href="#">PARTNER /OWNER INFORMATION</a>
                <a class="active" href="#">FINAL STEP</a>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <form method="POST" action="{{ route('signpad.save') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">

            {{-- <div class="col-12 col-md-4">
                <div class="form-group">
                    <span class="">Business Landlord or Business Mortgage Bank <span class="text-danger">*</span></span>

                    <input type="text" class="form-control" placeholder="Business Landlord or Business Mortgage Bank"
                        name="business_mortgage_bank" required value="{{old('business_mortgage_bank')}}">

                    @error('business_mortgage_bank')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <span class="">Contact Name and/or Account # <span class="text-danger">*</span></span>

                    <input type="text" class="form-control" placeholder="Contact Name and/or Account #"
                        name="business_mortgage_account" required value="{{old('business_mortgage_account')}}">

                    @error('business_mortgage_account')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <span class="">Phone # <span class="text-danger">*</span></span>

                    <input type="text" class="form-control" placeholder="Phone #" name="business_mortgage_phone"
                        required value="{{old('business_mortgage_phone')}}">

                    @error('business_mortgage_phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <center>
                    <h5>OTHER INFORMATION</h5>
                </center>
            </div>
            <hr>
            <div class="col-12 col-md-3">
                <div class="form-group">
                    <span class="">Credit Card Processing <span class="text-danger">*</span></span>

                    <input type="text" class="form-control" placeholder="Terminal(s)/Software Model:"
                        name="software_model" required value="{{old('software_model')}}">

                    @error('software_model')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="form-group">
                    <span class="">Number of Terminals <span class="text-danger">*</span></span>

                    <input type="text" class="form-control" placeholder="Number of Terminals" name="number_of_terminal"
                        required value="{{old('number_of_terminal')}}">

                    @error('number_of_terminal')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="form-group">
                    <span class="">Avg. Monthly Credit Card Volume <span class="text-danger">*</span></span>

                    <input type="text" class="form-control" placeholder="Avg. Monthly Credit Card Volume"
                        name="monthly_credit_card_volumn" required value="{{old('monthly_credit_card_volumn')}}">

                    @error('monthly_credit_card_volumn')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="form-group">
                    <span class="">Avg. Monthly Gross Sales Volume <span class="text-danger">*</span></span>

                    <input type="text" class="form-control" placeholder="Avg. Monthly Gross Sales Volume"
                        name="avg_monthly_gross_sales_volumn" required
                        value="{{old('avg_monthly_gross_sales_volumn')}}">

                    @error('avg_monthly_gross_sales_volumn')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="col-12 col-md-6">
                <div class="form-group">
                    <span class="">Do you Accept (Please circle all that apply)<span class="text-danger">*</span></span>
                    <br>
                    <input type="checkbox" id="Visa/MasterCard" name="do_you_accept[]" value="Visa/MasterCard">
                    <label for="Visa/MasterCard">Visa/MasterCard</label>&nbsp;&nbsp;&nbsp;

                    <input type="checkbox" id="Amex" name="do_you_accept[]" value="Amex">
                    <label for="Amex"> Amex</label>&nbsp;&nbsp;&nbsp;&nbsp;

                    <input type="checkbox" id="Discover" name="do_you_accept[]" value="Discover">
                    <label for="Discover"> Discover</label>&nbsp;&nbsp;&nbsp;&nbsp;

                    <input type="checkbox" id="Debit" name="do_you_accept[]" value="Debit">
                    <label for="Debit"> Debit</label>&nbsp;&nbsp;&nbsp;&nbsp;

                    <input type="checkbox" id="EBT" name="do_you_accept[]" value="EBT">
                    <label for="EBT"> EBT</label>&nbsp;&nbsp;&nbsp;&nbsp;

                </div>
            </div> --}}
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <span class="">Prior/Current Advance Taken (if applicable): </span>

                    <input type="text" class="form-control" placeholder="Prior/Current  Advance Taken (if applicable):"
                        name="current_cash_advance_company" value="{{old('current_cash_advance_company')}}">

                    @error('current_cash_advance_company')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <span class="">Balance </span>

                    <input type="text" class="form-control" placeholder="Balance" name="balance"
                        value="{{old('balance')}}">

                    @error('balance')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <span class="">Please provide your last 3 months business bank statements </span>

                    <input type="file" class="form-control" name="bank_statements_file"
                        value="{{old('bank_statements_file')}}" accept=".*pdf,.*png,.*jpeg">

                    @error('bank_statements_file')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            {{-- <div class="col-12 col-md-3">
                <div class="form-group">
                    <span class="">Underwriter Use Only <span class="text-danger">*</span></span>

                    <input type="text" class="form-control" placeholder="Split Funds __ ACH __ " name="underwrite"
                        required value="{{old('underwrite')}}">

                    @error('underwrite')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div> --}}

            <div class="col-12 col-md-12">
                <p class="text-left">Applicant authorizes each of the above listed business and business owner/officer
                    (individually and collectively, "Applicant") certify that the Applicant is an
                    owner of the above-named business and that all information provided in the application is true and
                    accurate. Applicant shall Immediately notify Onvision
                    Capital of any change in such information or financial condition. Applicant authorizes Onvision
                    Capital share this application with each of its representatives,
                    successors, assigns and designees ("Assignees") or any other parties that may be Involved with the
                    extension of credit pursuant to this application Including those
                    who offer commercial loans having daily repayment features or purchases of future receivables
                    including Merchant Cash Advance transactions, including without
                    limitation the application therefor (collectively, "Transactions). Applicant further authorizes
                    Onvision Capital and all Assignees to request and receive any thirdparty consumer or personal,
                    business and investigative reports and other information about Applicant, including credit card
                    processor statements and bank
                    statements, from one or more consumer reporting agencies, such as TransUnion, Experian, and Equifax,
                    and from other credit bureaus, banks, creditors and other
                    third parties. Applicant authorizes Onvision Capital to transmit this form, along with any other
                    foregoing information obtained in connection with this
                    application, to any or all of the Assignees for the foregoing purpose. You also consent to the
                    release, by any creditor or financial institution, of any information
                    relating to any of you, to Onvision Capital and to each of the Assignees on its own behalf.
                    Applicant waives and releases any claims against Recipients and any
                    information providers arising from any act or omission relating to the requesting, receiving or
                    release of the information obtained in connection with this
                    application.
                </p>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mt-3">
                <div class="form-group">
                    <span class="">Date<span class="text-danger">*</span></span>
                    <input type="date" class="form-control" placeholder="" required name="signature_date_one"
                        value="{{date(" Y-m-d");}}">
                    @error('signature_date_one')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <label>Applicant’s Signature : <span class="text-danger">*</span></label>
                            <br />
                            <div id="sig"></div>
                            <br /><br />
                            <button id="clear" class="btn btn-danger btn-sm">Clear</button>
                            <textarea id="signature" name="signature_one" style="display: none"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            @if($partner && $partner['partner_owner_name'] !='')
            <div class="col-md-6 col-sm-12 col-xs-12 mt-3">
                <div class="form-group">
                    <span class="">Date<span class="text-danger">*</span></span>
                    <input type="date" class="form-control" placeholder="" {{isset($partner) ?
                        $partner['partner_owner_name'] !='' ?'required' :'':''}} name="signature_date_two"
                        value="{{date(" Y-m-d");}}">
                    @error('signature_date_two')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <label>2nd Applicant’s Signature: <span class="text-danger">*</span></label>
                            <br />
                            <div id="sig2"></div>
                            <br /><br />
                            <button id="clear2" class="btn btn-danger btn-sm">Clear</button>
                            <textarea id="signature2" name="signature_two" style="display: none"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-12 mb-3">
                <div class="checkout_pagination d-flex  justify-content-end">
                    <a href="{{ route('third_step_view') }}" class="btn btn-sm btn-warning mt-2 ml-2">Previous</a>
                    <button type="submit" class="btn btn-primary btn-sm mt-2 ml-2 text-right">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
@section('scripts')

<script src="{{asset('assets')}}/js/jquery.signature.js"></script>
<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
    $('#clear').click(function (e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature").val('');
    });

    var sig2 = $('#sig2').signature({syncField: '#signature2', syncFormat: 'PNG'});
    $('#clear2').click(function (e) {
        e.preventDefault();
        sig2.signature('clear');
        $("#signature2").val('');
    });

</script>

@endsection