<?php

namespace App\Http\Controllers;

use App\Gateway;
use Illuminate\Http\Request;

class GatewayController extends Controller
{

    public function index()
    {
        $gateway = Gateway::all();
        return view('gateway.index', compact('gateway'));
    }

    public function store(Request $request)
    {
        if ($request->id) {
            $gateway = Gateway::find($request->id);
            $message = 'gateway Updated Successfully';
        } else {
            $gateway = new Gateway();
            $gateway->status = true;
            $message = 'Gateway Added Successfully';
        }

        $gateway->gateway_name = $request->gateway_name;
        $gateway->api_url = $request->api_url;
        $gateway->api_key = $request->api_key;
        $gateway->api_secret = $request->api_secret;
        $gateway->save();
        return redirect()->route('gateways')->with('success', $message);
    }

    public function gatewayStatus($id)
    {
        $gateway = Gateway::find($id);
        if ($gateway->status == true) {
            $gateway->status = false;
        } else {
            $gateway->status = true;
        }
        $gateway->save();
        return redirect()->route('gateways')->with('success', 'Gateway Updated Successfully');
    }

    public function destroy($id)
    {
        $gateway = Gateway::find($id);
        $gateway->delete();
        return redirect()->route('gateways')->with('success', 'Gatweway Deleted Successfully');
    }
}
