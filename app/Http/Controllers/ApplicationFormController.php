<?php

namespace App\Http\Controllers;

use App\applicationform;
use PDF;
use Illuminate\Http\Request;

class ApplicationFormController extends Controller
{
    public function app(){
        return view('/ApplicationForm');
    }
    public function store(Request $request){
        $applicationforms= new applicationform();
        // 
        $applicationforms->Bill_Date=request('Bill_Date');
        
        $applicationforms->Bill_No_Consumer_Registration_No=request('Bill_No_Consumer_Registration_No');
        $applicationforms->Consumer_Name=request('Consumer_Name');
        $applicationforms->Email=request('Email');
        $applicationforms->Contact_No=request('Contact_No');
        $applicationforms->Address_Hno=request('Address_Hno');
        $applicationforms->Address_Sub_locality1=request('Address_Sub_locality1');
        $applicationforms->Address_Sub_locality2=request('Address_Sub_locality2');
        $applicationforms->Address_Location=request('Address_Location');
        $applicationforms->Sub_District=request('Sub_District');
        $applicationforms->District=request('District');
        $applicationforms->State=request('State');
        $applicationforms->Pin_Code=request('Pin_Code');
        $applicationforms->Country=request('Country');
        $applicationforms->CSC_No_E_Services_centre=request('CSC_No_E-Services_centre');
        $applicationforms->Zone_Code=request('Zone_Code');
        $applicationforms->Meter_Reader_No=request('Meter_Reader_No');
        $applicationforms->Area_Code=request('Area_Code');
        $applicationforms->Water_Connection_No=request('Water_Connection_No');
        $applicationforms->Total_Amount=request('Total_Amount');
        $applicationforms->Remark=request('Remark');
        // $applicationforms->Payment_Method=request('Payment_Method');
        $applicationforms->save();
        // $applicationforms->pay();


        return redirect('login');

    }
    public function show(){
        

    }
   

    public function pay($id)
    {
        $data=ApplicationForm::find($id);
        
        $data->pay=request('pay');
        $data->save();
       // return back();
        return view('Search',compact('data'));

    }
    public function payment($id){
        $data=ApplicationForm::find($id);
        $data->Payment_Date=request('Payment_Date');
        $data->AC_Holder_Name=request('AC_Holder_Name');
        $data->AC_Number=request('AC_Number');
        $data->Cheque_Number=request('Cheque_Number');
        $data->Bank_Name=request('Bank_Name');
        $data->IFSI_Code=request('IFSI_Code');
        $data->UPI_ID=request('UPI_ID');
        $data->Amount_Paid=request('Amount_Paid');
       
        $data->Remark='Paid';
        $data->save();
        return view('receipt',compact('data'));
    }
    public function pdf($id){
        
        $data=ApplicationForm::find($id);
        $data->Receipt_No=time();
        $data->Bank_Transaction_No=time();
        $pdf = PDF::loadView('receipt',compact('data'));
        $fileName ="";
        try{
            $fileName = $data->Bill_No_Consumer_Registration_No;
        }
        catch(Exception $e)
        {
            $fileName = 'myInfo';
        }
        return $pdf->stream();
        //return $pdf->download($fileName.'.pdf');
        
    }
    public function show1(){
        $data=ApplicationForm::all();
        $mMonth = applicationform::whereMonth('created_at',now()->month)->count();
        $mMonth = applicationform::whereMonth('created_at',now()->month)->count();
        $mYear = applicationform::whereYear('created_at',now()->year)->count();

        return view('MIS',compact('data','mMonth','mYear'));
        //return view ('MIS',['data'=>$data]);
    }
}
