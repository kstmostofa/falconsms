<?php

namespace App\Http\Controllers;

use App\Gateway;
use App\PaymentMethod;
use App\Service;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function service()
    {
        $service = Service::all();
        $gateway = Gateway::all();
        // dd($gateway);
        return view('setting.service', compact('service', 'gateway'));
    }

    public function addService(Request $request)
    {
        if ($request->id) {
            $service = Service::find($request->id);
            $message = 'Service Updated Successfully';
        } else {
            $service = new Service();
            $service->status = true;
            $message = 'Service Added Successfully';
        }

        $service->name = $request->name;
        $service->gateway_name = $request->gateway_name;
        $service->price = $request->price;
        $service->save();
        return redirect()->route('service')->with('success', $message);
    }

    public function serviceStatus($id)
    {
        $service = Service::find($id);
        if ($service->status == true) {
            $service->status = false;
        } else {
            $service->status = true;
        }
        $service->save();
        return redirect()->route('service')->with('success', 'Service Status Updated Successfully');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service')->with('success', 'Service Deleted Successfully');
    }

    //Payment Methods
    public function paymentMethod(Request $request)
    {
        if ($request->method() == 'POST') {
            $paymentmethod = new PaymentMethod();
            $paymentmethod->name = $request->name;
            $paymentmethod->api_url = $request->api_url;
            $paymentmethod->api_key = $request->api_key;
            $paymentmethod->api_secret = $request->api_secret;
            $paymentmethod->status = true;
            $paymentmethod->save();
            return redirect()->route('paymentMethod');
        }if($request->id){
            $paymentmethod = PaymentMethod::find($request->id);
            $paymentmethod->name = $request->name;
            $paymentmethod->api_url = $request->api_url;
            $paymentmethod->api_key = $request->api_key;
            $paymentmethod->api_secret = $request->api_secret;
            $paymentmethod->save();
            return redirect()->route('paymentMethod');
        }else{
            $paymentmethod=PaymentMethod::all();
            return view('setting.payment-method', compact('paymentmethod'));
        }

    }
}
