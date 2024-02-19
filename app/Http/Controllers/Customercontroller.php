<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class Customercontroller extends Controller
{
    public function index(){
        return view ('/customer/registration');
    }
    public function show(Request $request){
        $request->validate([
             'name'=>'required',
             'email'=>'required',
             'password'=>'required',
             'confirm_password'=>'required|same:password',
             'address'=>'required',
        ]);
        $customer = new Customer;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->password=Hash::make($request['password']);
        $customer->gender=$request['gender'];
        $customer->address=$request['address'];
        $customer->save();

        return redirect('/customer/view');
     }
          public function view(){
            $customers = Customer::all();
           $data= compact('customers');
              return view('/customer/view')->with($data); 
          } 
                  public function delete($id){
                    $customer = Customer::find($id);
                    if (!is_null($customer) ){
                        $customer->delete();

                    }
                    return redirect('customer/view');
                  }
                  public function edit($id){
                    $customer = Customer::find($id);
                    if(is_null($customer)){
                        return view ('customer/view');
                    }
                    else{
                        $data = compact('customer');
                        return view ('customer.register');
                    }
                  }
}
