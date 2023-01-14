@extends('partials.master')
@section('content')
@php
use Illuminate\Support\Facades\Session;

if (Session::has('merchant')) {
   $merchant = Session::get('merchant');
}
@endphp
<section>
    <div class="container">
        @include('partials.head')
        @include('partials.msg')
    </div>
</section>

<!-- Checkout Steps Area -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="checkout_steps_area">
                <a href="#">BUSINESS INFORMATION</a>
                <a class="active" href="#">MERCHANT/OWNER INFORMATION</a>
                <a href="#">PARTNER /OWNER INFORMATION</a>
                <a href="#">FINAL STEP</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <form action="{{ route('submit_second_step') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="checkout_area section_padding_100_50">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Corporate Officer/Owner Name <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="Corporate Officer/Owner Name" name="merchant_owner_name" required value="{{old('merchant_owner_name', isset($merchant) ? $merchant['merchant_owner_name']:'')}}">

                            @error('merchant_owner_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Title <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="Title " name="merchant_title" required value="{{old('merchant_title', isset($merchant) ? $merchant['merchant_title']:'')}}">

                            @error('merchant_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Ownership %<span class="text-danger">*</span></span>
                            <input type="number" class="form-control" placeholder="Ownership %" name="merchant_ownership" required value="{{old('merchant_ownership',isset($merchant) ? $merchant['merchant_ownership'] :'')}}">
                            @error('merchant_ownership')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <span class="">Home Address <span class="text-danger">*</span></span>
                            <textarea type="textarea" class="form-control" placeholder="Home Address" name="merchant_home_address" required>{{old('merchant_home_address',isset($merchant) ? $merchant['merchant_home_address'] :'')}}</textarea>
                            @error('merchant_home_address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-2">
                        <div class="form-group">
                            <span class="">City <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="City" name="merchant_city" required value="{{old('merchant_city', isset($merchant) ? $merchant['merchant_city']:'')}}">

                            @error('merchant_city')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="form-group">
                            <span class="">State <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="State" name="merchant_state" required value="{{old('merchant_state', isset($merchant) ? $merchant['merchant_state']:'')}}">

                            @error('merchant_state')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="form-group">
                            <span class="">Zip <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="Zip" name="merchant_zip" required value="{{old('merchant_zip', isset($merchant) ? $merchant['merchant_zip']:'')}}">
                            @error('merchant_zip')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <span class="">SSN<span class="text-danger">*</span></span>
                            <input type="text" class="form-control" placeholder="SSN" name="merchant_ssn"
                            required value="{{old('merchant_ssn',isset($merchant) ? $merchant['merchant_ssn'] :'')}}">
                            @error('merchant_ssn')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <span class="">Date of Birth<span class="text-danger">*</span></span>
                            <input type="date" class="form-control" placeholder="Date of Birth" required
                            name="merchant_date_of_birth" value="{{isset($merchant) ? $merchant['merchant_date_of_birth'] !=''? $merchant['merchant_date_of_birth'] : date("Y-m-d"): date("Y-m-d")}}">
                            @error('merchant_date_of_birth')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="col-12 col-md-3">
                        <div class="form-group">
                            <span class="">Home # <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="Home " name="merchant_home" required value="{{old('merchant_home', isset($merchant) ? $merchant['merchant_home']:'')}}">
                            @error('merchant_home')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}

                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <span class="">Cell #<span class="text-danger">*</span></span>
                            <input type="tel" class="form-control" placeholder="Cell Phone" name="merchant_phone_no"
                            required value="{{old('merchant_phone_no',isset($merchant) ? $merchant['merchant_phone_no'] :'')}}">
                            @error('merchant_phone_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="checkout_pagination d-flex  justify-content-end">
                        <a href="{{ route('home_page') }}" class="btn btn-info btn-sm mt-2 ml-2">Previous</a>
                            <button type="submit" class="btn btn-primary btn-sm mt-2 ml-2 text-right">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
