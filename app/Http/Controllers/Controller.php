<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use \Meneses\LaravelMpdf\Facades\LaravelMpdf;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function fileUpload($filedata,$folderName){

        $fileType = $filedata->getClientOriginalExtension();
        $fileName = uniqid() . '.' . $fileType;
        if (!file_exists(public_path($folderName))) {
            mkdir(public_path($folderName), 0777, true);
        }
        $img = $filedata->move(public_path($folderName),$fileName);
        $fileInfo=$folderName . $fileName;
        return $fileInfo;
    }


     public function base64FileUpload($filedata,$folderName,$userId){
        $image_parts = explode(";base64,", $filedata);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = $userId.'-'.'.'. $image_type;
        $file = $folderName . $fileName;
        file_put_contents(public_path($folderName).$fileName, $image_base64);
        return $file;
    }

    public function viewMPDF($view, $data, $title, $filename){
        LaravelMpdf::loadView($view, $data, [], [
          'title'      => $title,
          'margin_top' => 0,
          'showImageErrors' => true
      ])->stream($filename.'.pdf');
    }

    public function outputMPDF($view, $data, $title, $filename){
        return LaravelMpdf::loadView($view, $data, [], [
          'title'      => $title,
          'margin_top' => 0,
          'showImageErrors' => true
      ])->output();
    }

    public function saveMPDF($view, $data, $title, $filename){
        return LaravelMpdf::loadView($view, $data, [], [
          'title'      => $title,
          'margin_top' => 0,
          'showImageErrors' => true
      ])->save(public_path('attachments/'.$filename.'.pdf'));
    }

    public function downloadMPDF($view, $data, $title, $filename){
        LaravelMpdf::loadView($view, $data, [], [
          'title'      => $title,
          'margin_top' => 0,
          'showImageErrors' => true
      ])->download($filename.'_'.date('Y-m-d g:i a').'.pdf');
    }
}
