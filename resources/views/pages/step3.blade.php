@extends('partials.master')
@section('content')
@php
if (Session::has('partner')) {
    $partner = Session::get('partner');
}
@endphp
<section>
    <div class="container">
        <div class="text-center">
            <div class="row">
                <div class="col-12">
                    <h3 class="font-weight-bold">4 steps to funding</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="text-center">Thank you for placing your trust in us. Please take a few minutes to
                    complete the form below. We will process your request in 24-48 business hours.</p>
                </div>
            </div>
        </div>
        @include('partials.msg')
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="checkout_steps_area">
                <a href="#">BUSINESS INFORMATION</a>
                <a href="#">MERCHANT/OWNER INFORMATION</a>
                <a class="active" href="#">PARTNER /OWNER INFORMATION</a>
                <a href="#">BUSINESS PROPERTY INFORMATION</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <form action="{{ route('submit_third_step') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="checkout_area section_padding_100_50">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Partner Name <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="Partner Name" name="partner_owner_name" required value="{{old('partner_owner_name', isset($partner) ? $partner['partner_owner_name']:'')}}">

                            @error('partner_owner_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Title <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="Title " name="partner_title" required value="{{old('partner_title', isset($partner) ? $partner['partner_title']:'')}}">

                            @error('partner_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Ownership %<span class="text-danger">*</span></span>
                            <input type="number" class="form-control" placeholder="Ownership %" name="partner_ownership" required value="{{old('partner_ownership',isset($partner) ? $partner['partner_ownership'] :'')}}">
                            @error('partner_ownership')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Home Address <span class="text-danger">*</span></span>
                            <textarea type="textarea" class="form-control" placeholder="Home Address" name="partner_home_address" required>
                                {{old('partner_home_address',isset($partner) ? $partner['partner_home_address'] :'')}}
                            </textarea>
                            @error('partner_home_address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">City <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="City" name="partner_city" required value="{{old('partner_city', isset($partner) ? $partner['partner_city']:'')}}">

                            @error('partner_city')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="form-group">
                            <span class="">State <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="State" name="partner_state" required value="{{old('partner_state', isset($partner) ? $partner['partner_state']:'')}}">

                            @error('partner_state')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="form-group">
                            <span class="">Zip <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="Zip" name="partner_zip" required value="{{old('partner_zip', isset($partner) ? $partner['partner_zip']:'')}}">
                            @error('partner_zip')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <span class="">SSN<span class="text-danger">*</span></span>
                            <input type="text" class="form-control" placeholder="SSN" name="partner_ssn"
                            required value="{{old('partner_ssn',isset($partner) ? $partner['partner_ssn'] :'')}}">
                            @error('partner_ssn')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <span class="">Date of Birth<span class="text-danger">*</span></span>
                            <input type="date" class="form-control" placeholder="Date of Birth" required
                            name="partner_date_of_birth" value="{{old('partner_date_of_birth', isset($partner) ? $partner['partner_date_of_birth'] :'')}}">
                            @error('partner_date_of_birth')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <span class="">Home # <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="Home " name="partner_home" required value="{{old('partner_home', isset($partner) ? $partner['partner_home']:'')}}">
                            @error('partner_home')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <span class="">Cell #<span class="text-danger">*</span></span>
                            <input type="number" class="form-control" placeholder="Cell Phone" name="partner_phone_no"
                            required value="{{old('partner_phone_no',isset($partner) ? $partner['partner_phone_no'] :'')}}">
                            @error('partner_phone_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="checkout_pagination d-flex  justify-content-end">
                            <a href="{{ route('second_step_view') }}" class="btn btn-primary mt-2 ml-2">Previous</a>
                            <button type="submit" class="btn btn-primary mt-2 ml-2 text-right">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
