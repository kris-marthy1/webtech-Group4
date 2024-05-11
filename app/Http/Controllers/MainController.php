<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperAdmin;
use App\Models\Establishments;

class MainController extends Controller
{
    // Show dashboard =========================================================
    public function super_dashboard(Request $request){

        // if($request->session()->get('loggedin')){
            return view('super_pages/super_dashboard');
        // }else{
        //     return redirect('/')->with('failed', 'Please log in first!');
        // }

    }
    // Show dashboard =========================================================

    // Show USERS =========================================================
    public function super_users(Request $request){
        // $data = array(
        //     'info' => Establishments::all(),
        // );
        // if($request->session()->get('loggedin')){
            // return view('super_pages/super_users', $data);
            return view('super_pages/super_users');
        // }else{
        //     return redirect('/')->with('failed', 'Please log in first!');
        // }
    }
    // Show USERS =========================================================

    // Show FORM =========================================================
    public function add_establishments(Request $request){
        $data = array(
            'edit' => false,
        );
        // if($request->session()->get('loggedin')){
            return view('super_pages/super_add_est', $data);
        // }else{
        //     return redirect('/')->with('failed', 'Please log in first!');
        // }
    }
    // Show FORM =========================================================

    // Show EDIT FORM =========================================================
    public function update_est(Request $request, $id){
        $data = array(
            // 'item' => Establishments::where('est_id', $id)->first(),
            'edit' => true,
        );
        // if($request->session()->get('loggedin')){
            // return view('super_pages/super_add_est', $data);
            return view('super_pages/super_add_est');
        // }else{
        //     return redirect('/')->with('failed', 'Please log in first!');
        // }
    }
    // Show EDIT FORM =========================================================

    // UPDATE BACKEND =========================================================
    // public function update_record(Request $request){
    //     $info = array(
    //         'info' => Establishments::all(),
    //     );
    //     foreach($info['info'] as $key){
    //         if($request->input('est_username') === $key['est_username']){
    //             return redirect()->back()->with('username_taken', 'Taken');
    //         }
    //     }
    //     if($request->input('est_password1') !== $request->input('est_password2')){
    //         return redirect()->back()->with('password_match', 'password');
    //     }
    //     else{
    //         $photoName = time().'.'.$request->file('est_image')->getClientOriginalExtension();
    //         $request->file('est_image')->move(public_path('/image'), $photoName);
    //         $records = array(
    //             'est_name' => $request->input('est_name'),
    //             'est_username' => $request->input('est_username'),
    //             'est_password' => $request->input('est_password1'),
    //             'est_image' => $photoName,
    //         );
    //         Establishments::where('est_id',$request->input('est_id'))->update($records);
    //         return redirect('/super_users')->with('Success', 'Account Successfully Updated!');
    //     }   
    // }
    // UPDATE BACKEND =========================================================
    
    // DESTROY LOGIN SESSION =========================================================
    public function super_sign_out(Request $request){
        // $request->session()->forget('loggedin');
        return redirect('/');
    }
    // DESTROY LOGIN SESSION =========================================================

    // VERIFY LOGIN SESSION =========================================================
    public function verify_login(Request $request){
        // $record = SuperAdmin::all();
        // $auth = array(
        //     'info' => $record,
        // );
        // foreach($auth['info'] as $key){
        //     if($request->input('account_username') === $key['acc_user'] && $request->input('account_password') === $key['acc_pass']){
        //         $request->session()->put('loggedin', '1');
                return redirect('/super_dashboard');
        //     }else{
        //         return redirect('/')->with('failed', 'Wrong credentials, please log in again!');
        //     }   
        // }
    }
    // VERIFY LOGIN SESSION =========================================================

    // ADD ESTABLISHMENT ============================================================
    // public function add_est(Request $request){
    //     $info = array(
    //         'info' => Establishments::all(),
    //     );
    //     foreach($info['info'] as $key){
    //         if($request->input('est_username') === $key['est_username']){
    //             return redirect('/add_establishments')->with('username_taken', 'Taken');
    //         }
    //     }
    //     if($request->input('est_password1') !== $request->input('est_password2')){
    //         return redirect('/add_establishments')->with('password_match', 'password');
    //     }
    //     else{
    //         $photoName = time().'.'.$request->file('est_image')->getClientOriginalExtension();
    //         $request->file('est_image')->move(public_path('/image'), $photoName);
    //         $records = array(
    //             'est_name' => $request->input('est_name'),
    //             'est_username' => $request->input('est_username'),
    //             'est_password' => $request->input('est_password1'),
    //             'est_image' => $photoName,
    //         );
    //         Establishments::create($records);
    //         return redirect('/add_establishments')->with('Success', 'Account Successfully Registered!');
    //     }   
    // }
    // ADD ESTABLISHMENT ============================================================

    // DELETE ESTABLISHMENT ============================================================
    // public function delete_record($id)
    // {       
    //     Establishments::where('est_id',$id)->delete();
    //     return redirect('/super_users')->with('Delete', 'Account Successfully Deleted!');

    // }
    // DELETE ESTABLISHMENT ============================================================
}
