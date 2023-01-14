@extends('partials.master')
@section('content')
@php
use Illuminate\Support\Facades\Session;

if (Session::has('homepage')) {
    $homepage = Session::get('homepage');

    //dd($homepage);
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
                <a class="active" href="#">BUSINESS INFORMATION</a>
                <a href="#">MERCHANT/OWNER INFORMATION</a>
                <a href="#">PARTNER /OWNER INFORMATION</a>
                <a href="#">FINAL STEP</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <form method="POST" action="{{ route('submit_first_step') }}" enctype="multipart/form-data">
        @csrf
        <div class="checkout_area section_padding_100_50">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <span class="">Legal/Corporate Name <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="Legal/Corporate Name" name="business_name" required value="{{old('business_name', isset($homepage) ? $homepage['business_name']:'')}}">

                            @error('business_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <span class="">DBA</span>
                            <input type="text" class="form-control" placeholder="DBA"
                            name="business_date_of_birth" value="{{old('business_date_of_birth', isset($homepage) ? $homepage['business_date_of_birth'] :'')}}">
                            @error('business_date_of_birth')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <span class="">Address <span class="text-danger">*</span></span>
                            <textarea class="form-control" name="business_address" required>{{old('business_address',isset($homepage) ? $homepage['business_address'] :'')}}</textarea>
                            @error('business_address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="form-group">
                            <span class="">City <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="City" name="business_city" required value="{{old('business_city', isset($homepage) ? $homepage['business_city']:'')}}">

                            @error('business_city')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="form-group">
                            <span class="">State <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="State" name="business_state" required value="{{old('business_state', isset($homepage) ? $homepage['business_state']:'')}}">

                            @error('business_state')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="form-group">
                            <span class="">Zip <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="Zip" name="business_zip" required value="{{old('business_zip', isset($homepage) ? $homepage['business_zip']:'')}}">
                            @error('business_zip')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Telephone #<span class="text-danger">*</span></span>
                            <input type="tel" min="10" class="form-control" placeholder="Telephone" name="business_phone"
                            required value="{{old('business_phone',isset($homepage) ? $homepage['business_phone'] :'')}}">
                            @error('business_phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Fax #<span class="text-danger">*</span></span>
                            <input type="number" min="11" class="form-control" placeholder="Phone No" name="business_fax"
                            required value="{{old('business_fax',isset($homepage) ? $homepage['business_fax'] :'')}}">
                            @error('business_fax')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Federal Tax ID<span class="text-danger">*</span></span>
                            <input type="text" class="form-control" placeholder="Fax" name="federal_tax_id"
                            required value="{{old('federal_tax_id',isset($homepage) ? $homepage['federal_tax_id'] :'')}}">
                            @error('federal_tax_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Date Business Started<span class="text-danger">*</span></span>
                            <input type="date" class="form-control" placeholder="Date Business Started" required
                            name="businesss_start_date" value="{{old('businesss_start_date', isset($homepage) ? $homepage['businesss_start_date'] :'')}}">
                            @error('businesss_start_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                     {{-- <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Ownership: %<span class="text-danger">*</span></span>
                            <input type="number" class="form-control" placeholder="Ownership: %" name="lenght_of_ownership" required value="{{old('lenght_of_ownership',isset($homepage) ? $homepage['lenght_of_ownership'] :'')}}">
                            @error('merchant_ownership')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}

                     {{-- <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Website</span>
                            <input type="text" class="form-control" placeholder="Website" name="website"
                             value="{{old('website',isset($homepage) ? $homepage['website'] :'')}}">
                            @error('website')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Email <span class="text-danger">*</span></span>

                            <input type="email" class="form-control" placeholder="Email " name="business_email" required value="{{old('business_email', isset($homepage) ? $homepage['business_email']:'')}}">

                            @error('business_email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Product/Service Sold<span class="text-danger">*</span></span>
                            <input value="{{old('service_sold', isset($homepage) ? $homepage['service_sold']:'')}}" type="text" class="form-control" placeholder="Service sold" required name="service_sold">
                            @error('service_sold')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <span class="">Requested Advance Amount <span class="text-danger">*</span></span>

                            <input type="text" class="form-control" placeholder="Requested Advance Amount" name="requested_advance_amount" required value="{{old('requested_advance_amount', isset($homepage) ? $homepage['requested_advance_amount']:'')}}">

                            @error('requested_advance_amount')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="form-group">
                            <span class="">Type of Entity (circle one) <span class="text-danger">*</span></span>
                            <br>
                            <input type="radio" id="SoleProprietorship" name="type_of_entity" value="Sole Proprietorship" {{ isset($homepage)? ($homepage['type_of_entity'] === "Sole Proprietorship") ? 'checked' : '':'' }}>
                            <label for="SoleProprietorship">Sole Proprietorship</label>&nbsp;&nbsp;&nbsp;

                            <input type="radio" id="Partnership" name="type_of_entity" value="Partnership" {{ isset($homepage)? ($homepage['type_of_entity'] == "Partnership") ? 'checked=checked' : '':'' }}>
                            <label for="Partnership"> Partnership</label>&nbsp;&nbsp;&nbsp;&nbsp;

                            <input type="radio" id="Corporation" name="type_of_entity" value="Corporation" {{ isset($homepage)? ($homepage['type_of_entity'] == "Corporation") ? 'checked=checked' : '':'' }}>
                            <label for="Corporation"> Corporation</label>&nbsp;&nbsp;&nbsp;&nbsp;

                            <input type="radio" id="LLC" name="type_of_entity" value="LLC" {{ isset($homepage)? ($homepage['type_of_entity'] == "LLC") ? 'checked=checked' : '':'' }}>
                            <label for="LLC"> LLC</label>&nbsp;&nbsp;&nbsp;&nbsp;

                            <input type="radio" id="Other" name="type_of_entity" value="Other" {{ isset($homepage)? ($homepage['type_of_entity'] == "Other") ? 'checked=checked' : '':'' }}>
                            <label for="Other"> Other</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                    </div>



                    {{-- <div class="col-12 col-md-8">
                        <div class="form-group">
                            <span class="">Type of Business (circle all that apply) <span class="text-danger">*</span></span>
                            <br>
                            <input type="checkbox" id="RetailMOTO" name="type_of_business[]" value="Retail MO/TO" {{ isset($homepage)? in_array("Retail MO/TO" , json_decode($homepage['type_of_business']))? 'checked' : '':'' }}>
                            <label for="RetailMOTO">Retail MO/TO</label>&nbsp;&nbsp;&nbsp;

                            <input type="checkbox" id="Wholesale" name="type_of_business[]" value="Wholesale" {{ isset($homepage)? (in_array("Wholesale", json_decode($homepage['type_of_business'])))? 'checked' : '':'' }}>
                            <label for="Wholesale"> Wholesale</label>&nbsp;&nbsp;&nbsp;&nbsp;

                            <input type="checkbox" id="Restaurant" name="type_of_business[]" value="Restaurant" {{ isset($homepage)? (in_array("Restaurant",json_decode($homepage['type_of_business'])))? 'checked' : '':'' }}>
                            <label for="Restaurant"> Restaurant</label>&nbsp;&nbsp;&nbsp;&nbsp;

                            <input type="checkbox" id="Supermarket" name="type_of_business[]" value="Supermarket" {{ isset($homepage)? (in_array("Supermarket",json_decode($homepage['type_of_business'])))? 'checked' : '':'' }}>
                            <label for="Supermarket"> Supermarket</label>&nbsp;&nbsp;&nbsp;&nbsp;

                            <input type="checkbox" id="Service" name="type_of_business[]" value="Service" {{ isset($homepage)? (in_array("Service", json_decode($homepage['type_of_business'])))? 'checked' : '':'' }}>
                            <label for="Service"> Service</label>&nbsp;&nbsp;&nbsp;&nbsp;

                            <input type="checkbox" id="Other" name="type_of_business[]" value="Other" {{ isset($homepage)? (in_array("Other",json_decode($homepage['type_of_business'])))? 'checked' : '':'' }}>
                            <label for="Other"> Other</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                    </div> --}}
                    
                    
                    <div class="col-12">
                        <div class="checkout_pagination d-flex  justify-content-end">
                            <button type="submit" class="btn btn-sm btn-primary mt-2 ml-2 text-right">Next</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
@endsection
