<?php

namespace App\Http\Controllers;

use App\Mail\SandMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\UserBankStatement;
use File;
use DB;

class UserController extends Controller
{

    public function HomePage()
    {
        return view('pages.step1');
    }

    public function secondstepview()
    {
        return view('pages.step2');
    }

    public function thirdStep()
    {
        return view('pages.step3');
    }
    public function finalStepView()
    {
        return view('pages.step4');
    }

    public function show($id)
    {
        $user = User::findOrfail($id);
        $title = "information Mail";

        return view('mail.info_mail',compact('user','title'));
    }

    public function NextOne(Request $request)
    {
        $this->validate($request, [
            'business_name' => 'required|max:25|min:3',
            'business_address' => 'required',
            'business_city' => 'required',
            'business_state' => 'required',
            'business_zip' => 'required',
            'business_phone' => 'required|max:20|min:10',
            'federal_tax_id' => 'required',
            'businesss_start_date' => 'required',
            'business_email' => 'required|email',
        ]);

        Session::put('homepage', [
            "business_name" => $request->business_name,
            "business_date_of_birth" => $request->business_date_of_birth,
            "business_address" => $request->business_address,
            "business_city" => $request->business_city,
            "business_state" => $request->business_state,
            "business_zip" => $request->business_zip,
            "business_phone" => $request->business_phone,
            "business_fax" => $request->business_fax,
            "federal_tax_id" => $request->federal_tax_id,
            "businesss_start_date" => $request->businesss_start_date,
            "lenght_of_ownership" => $request->lenght_of_ownership,
            "website" => $request->website,
            "business_email" => $request->business_email,
            "type_of_entity" => $request->type_of_entity,
            "type_of_business" => json_encode($request->type_of_business),
            "service_sold" => $request->service_sold,
            "requested_advance_amount" => $request->requested_advance_amount,
        ]);

        return redirect(route('second_step_view'));
    }
    public function NextTow(Request $request)
    {

        $this->validate($request, [
            'merchant_owner_name' => 'required|max:34',
            'merchant_title' => 'required|string',
            'merchant_home_address' => 'required',
            'merchant_city' => 'required',
            'merchant_state' => 'required',
            'merchant_zip' => 'required',
            'merchant_ssn' => 'required',
            'merchant_date_of_birth' => 'required',
            'merchant_phone_no' => 'max:20|min:10',
        ]);

        Session::put('merchant', [
            "merchant_owner_name" => $request->merchant_owner_name,
            "merchant_title" => $request->merchant_title,
            "merchant_ownership" => $request->merchant_ownership,
            "merchant_home_address" => $request->merchant_home_address,
            "merchant_city" => $request->merchant_city,
            "merchant_state" => $request->merchant_state,
            "merchant_zip" => $request->merchant_zip,
            "merchant_ssn" => $request->merchant_ssn,
            "merchant_date_of_birth" => $request->merchant_date_of_birth,
            "merchant_phone_no" => $request->merchant_phone_no,
            "merchant_home" => $request->merchant_home,
        ]);

        return redirect(route('third_step_view'));
    }


    public function NextThree(Request $request)
    {   
        $this->validate($request, [
            'partner_phone_no' => 'max:20',
        ]);

        Session::put('partner', [
            "partner_owner_name" => $request->partner_owner_name,
            "partner_title" => $request->partner_title,
            "partner_ownership" => $request->partner_ownership,
            "partner_home_address" => $request->partner_home_address,
            "partner_city" => $request->partner_city,
            "partner_state" => $request->partner_state,
            "partner_zip" => $request->partner_zip,
            "partner_ssn" => $request->partner_ssn,
            "partner_date_of_birth" => $request->partner_date_of_birth,
            "partner_phone_no" => $request->partner_phone_no,
            "partner_home" => $request->partner_home,
        ]);

        //dd(Session::get('partner'));

        return redirect(route('final_step_view'));
    }

    public function FinalStep(Request $request)
    {   
        $this->validate($request, [
            'signature_one' => 'required',
            'signature_date_one' => 'required',
        ]);

        DB::beginTransaction();
        try {   

            $user = new User();
            $user->business_name = Session::get('homepage')['business_name'];
            $user->business_date_of_birth = Session::get('homepage')['business_date_of_birth'];
            $user->business_address = Session::get('homepage')['business_address'];
            $user->business_city = Session::get('homepage')['business_city'];
            $user->business_zip = Session::get('homepage')['business_zip'];
            $user->business_state = Session::get('homepage')['business_state'];
            $user->business_phone = Session::get('homepage')['business_phone'];
            $user->business_fax = Session::get('homepage')['business_fax'];
            $user->federal_tax_id = Session::get('homepage')['federal_tax_id'];
            $user->businesss_start_date = Session::get('homepage')['businesss_start_date'];
            $user->lenght_of_ownership = Session::get('homepage')['lenght_of_ownership'];
            $user->website = Session::get('homepage')['website'];
            $user->business_email = Session::get('homepage')['business_email'];
            $user->type_of_entity = Session::get('homepage')['type_of_entity'];
            $user->type_of_business = Session::get('homepage')['type_of_business'];
            $user->service_sold = Session::get('homepage')['service_sold'];

            $user->merchant_owner_name = Session::get('merchant')['merchant_owner_name'];
            $user->merchant_title = Session::get('merchant')['merchant_title'];
            $user->merchant_ownership = Session::get('merchant')['merchant_ownership'];
            $user->merchant_home_address = Session::get('merchant')['merchant_home_address'];
            $user->merchant_city = Session::get('merchant')['merchant_city'];
            $user->merchant_zip = Session::get('merchant')['merchant_zip'];
            $user->merchant_state = Session::get('merchant')['merchant_state'];
            $user->merchant_ssn = Session::get('merchant')['merchant_ssn'];
            $user->merchant_date_of_birth = Session::get('merchant')['merchant_date_of_birth'];
            $user->merchant_home = Session::get('merchant')['merchant_home'];
            $user->merchant_phone_no = Session::get('merchant')['merchant_phone_no'];
            
            if(Session::has('partner')){
            
                $user->partner_owner_name = Session::get('partner')['partner_owner_name'];
                $user->partner_title = Session::get('partner')['partner_title'];
                $user->partner_ownership = Session::get('partner')['partner_ownership'];
                $user->partner_home_address = Session::get('partner')['partner_home_address'];
                $user->partner_city = Session::get('partner')['partner_city'];
                $user->partner_zip = Session::get('partner')['partner_zip'];
                $user->partner_state = Session::get('partner')['partner_state'];
                $user->partner_ssn = Session::get('partner')['partner_ssn'];
                $user->partner_date_of_birth = Session::get('partner')['partner_date_of_birth'];
                $user->partner_home = Session::get('partner')['partner_home'];
                $user->partner_phone_no = Session::get('partner')['partner_phone_no'];
            }
            $user->business_mortgage_bank=$request->business_mortgage_bank;
            $user->business_mortgage_account=$request->business_mortgage_account;
            $user->business_mortgage_phone=$request->business_mortgage_phone;
            $user->software_model=$request->software_model;
            $user->number_of_terminal=$request->number_of_terminal;
            $user->monthly_credit_card_volumn=$request->monthly_credit_card_volumn;
            $user->avg_monthly_gross_sales_volumn=$request->avg_monthly_gross_sales_volumn;
            $user->requested_advance_amount=$request->requested_advance_amount;
            $user->do_you_accept=json_encode($request->do_you_accept);
            $user->current_cash_advance_company=$request->current_cash_advance_company;
            $user->balance=$request->balance;
            $user->business_mortgage_phone=$request->business_mortgage_phone;
            $user->underwrite=$request->underwrite;

            $user->signature_date_one=$request->signature_date_one;
            $user->signature_date_two=$request->signature_date_two;
            $user->signature_name_one=$request->signature_name_one;
            $user->signature_name_two=$request->signature_name_two;

            $user->save();
            
            if ($request->has('signature_one')) {
                $signature_one = $this->base64FileUpload($request->signature_one,'uploads/signatures-one/',$user->id);
                $user->signature_one=$signature_one;
                $user->save();
            }

            if ($request->has('signature_two')) {
                $signature_two = $this->base64FileUpload($request->signature_two,'uploads/signatures-two/',$user->id);
                $user->signature_two=$signature_two;
                $user->save();
            }

            if($request->hasFile('bank_statements_file'))
            {
                foreach ($request->bank_statements_file as $key=> $photo) {
                    $title = $user->id . '-' . date('dmyhis');
                    $filename = $this->fileUpload($photo,'uploads/bank-statement/',$title);
                    UserBankStatement::create([
                        'user_id' => $user->id,
                        'file_name' => $filename,
                        'status' => 1,
                    ]);
                }
            }

            //DB Commit
            DB::commit();

            $data["email"] = $user->business_email;
            $data["title"] = "Mail from onvisioncapital.com";
            $data["user"] = $user;

            $pdf_filename = 'information'.date('ymdHis');
            $pdf = $this->saveMPDF('mail.info_mail_raw', $data,  'Mail from onvisioncapital.com', $pdf_filename);

            Mail::send('mail.mail_body', $data, function ($message) use ($data, $pdf_filename) {
                $message->to($data['email'])
                // ->cc(['mizan.bd2369@gmail.com','info@onvisioncapital.com','deals@onvisioncapital.com'])
                ->cc(['gmfaruk2021@gmail.com'])
                ->subject($data["title"])
                ->attach(public_path('attachments/'.$pdf_filename.'.pdf'));
                foreach($data['user']->userBankStatement as $file){
                    $message->attach(public_path($file->file_name));
                }
            });

            Session::forget('homepage');
            Session::forget('merchant');
            Session::forget('partner');

            return redirect()->route('thanks')->with('success', 'Data has been saved successfully. Thank you for your time. We will contact you soon.');

        }catch(\Throwable $th){
            DB::rollback();
            return back()->with('error',$th->getMessage());
        }
    }
}

