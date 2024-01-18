<?php

namespace App\Http\Controllers\admin;
//namespace App\Models;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use validator;

class AdminController extends Controller
{
    public function viewDashboard()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $rules = [
                'email'=>'required|email|max:255',
                'password'=>'required|max:30'
            ];

            $customMessages = [
                'email.required'=> "Email is Required!",
                'email.email'=>"Invalid Email",
                'password.required'=>"Password is Required!",
            ];

            $this->validate($request, $rules, $customMessages);

            if (Auth('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect("admin/dashboard");
            } else {

                return redirect()->back()->with("error_message", "Invalid Email or Password!");
            }
        }else{
            return view('admin.login');
        }
    }

    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //check if current password is correct
            if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
                //confirm that the new password and the confirmation password are matching
                if($data['new_password'] == $data['confirm_password']){
                    //update Admin password
                    Admin::where('id',Auth::guard('admin')->user()->id)->update(
                        ['password'=>bcrypt($data['new_password'])]);
                    return redirect()->back()->with('success_message', "Password hsa been Updated Successfully!");

                }else{
                    return redirect()->back()->with('error_message', "the confirmation is not matching your new password!");
                }

            }else{
                return redirect()->back()->with('error_message', "Your Current Password is Incorrect");
            }
        }
        return view('admin.update_password');
    }

    public function checkCurrentPassword(Request $request){
        $data = $request->all();
        //check if the current password match to the password in database
        if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
            return "true";
        }else{
            return "false";
        }

    }

    public function updateAdminDetails(Request $request){

        if ($request->isMethod('post')) {
            $data = $request->all();
            $rules = [
                'admin_name' => 'required|alpha|max:25',
                'admin_phone' => 'required|numeric'
            ];

            $customMessages = [
                'admin_name.required' => "Name is Required!",
                'admin_name.alpha' => "Invalid Name",
                'admin_phone.required' => "Phone is Required!",
                'admin_phone.numeric' => "Invalid Phone Number",
            ];

            $this->validate($request, $rules, $customMessages);
            //update Admin Details
            Admin::where('email', Auth::guard('admin')->user()->email)->update(['name' => $data['admin_name'],
                'phone' => $data['admin_phone'], 'type' => $data['admin_type'], 'address' => $data['admin_address']]);
            return redirect()->back()->with('success_message', "Details hsa been Updated Successfully!");

        }
            return view('admin.update_admin_details');

    }

    public function logout(){
        Auth('admin')->logout();
        return redirect('admin/login');
    }
}

