<?php

namespace App\Http\Controllers;
use App\Models\Concept;
use Illuminate\Http\Request;

class VendorFormController extends Controller
{
    function submit(Request $req){

        $req->validate([
            'name' => 'required | string',
            'surname' => 'required | string',
            'company_name' => 'required |string',
            'phone' => 'required | min:10 |numeric ', 
            // 'message' => 'required |string',
            // 'services' => 'required',
            // 'gender' => 'required',
            // 'city' => 'required',
        ]);

        // echo "Form submitted";
        // echo $req->input('name');
        // echo "<br>";
        // echo $req->input('company');
        // echo "<br>";
        // echo $req->input('phone');
        // echo "<br>";
        // print_r( $req->input('services'));
        // echo "<br>";
        // echo $req->input('gender');
        // echo "<br>";
        // echo $req->input('city');
        // echo "<br>";
        // return $req;
        
        $concept = new concept();
        $concept->name = $req->name;
        $concept->surname = $req->surname;
        $concept->company_name = $req->company_name;
        $concept->phone = $req->phone;
        $concept->message = $req->message;
        $concept->save();
        
        
        return redirect('vendor-form')->with('success', 'Form submitted successfully');

        
    }
}
