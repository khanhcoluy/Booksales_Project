<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Social;
use Socialite;
use App\Login;
use App\Customer;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Rules\Captcha; 
class AdminController extends Controller
{
    //Đăng nhập bằng google
    public function login_google(){
        return Socialite::driver('google')->redirect();
    }
    public function callback_google(){
            $users = Socialite::driver('google')->stateless()->user(); 
            $authUser = $this->findOrCreateUser($users, 'google');
            if($authUser){
               
                $account_name = Customer::where('customer_id',$authUser->user)->first();
                Session::put('customer_name',$account_name->customer_name);
                Session::put('customer_id',$account_name->customer_id);
            }elseif($hieu){
               
                $account_name = Customer::where('customer_id',$hieu->user)->first();
                Session::put('customer_name',$account_name->customer_name);
                Session::put('customer_id',$account_name->customer_id);
            }
            return redirect('/gio-hang')->with('message', 'Đăng nhập bằng google thành công');  

    }
    public function findOrCreateUser($users, $provider){

            $authUser = Social::where('provider_user_id', $users->id)->first();

            if($authUser){
                return $authUser;
               
            }else{
          
            //tao customer mới cho tbl_customer
            $orang = Customer::where('customer_email',$users->email)->first();

            if(!$orang){
                    $orang = Customer::create([
                        'customer_name' => $users->name,
                        'customer_email' => $users->email,
                        'customer_address' => '',
                        'customer_password' => '',
                        'customer_phone' => '0932023992'
                    ]);
                }

            $hieu = new Social([
                'provider_user_id' => $users->id,
                'provider' => strtoupper($provider)
            ]);

            $hieu->customer()->associate($orang);
                
            $hieu->save();
            return $hieu;
            }


    }

    //Đăng nhập bằng facebook
    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook(){
        $provider = Socialite::driver('facebook')->user();
        $account = Social::where('provider','facebook')->where('provider_user_id',$provider->getId())->first();

        if($account){
            //trả về trang giỏ hàng nếu tài khoản tồn tại
            $account_name = Customer::where('customer_id',$account->user)->first();
            Session::put('customer_name',$account_name->customer_name);
            Session::put('customer_id',$account_name->customer_id);
            return redirect('/gio-hang')->with('message', 'Đăng nhập bằng facebook thành công');
        }else{
            //trả về trang giỏ hàng và tạo tài khoản mới vào csdl
            $hieu = new Social([
                'provider_user_id' => $provider->getId(),
                'provider' => strtoupper('facebook')
            ]);

            $orang = Customer::where('customer_email',$provider->getEmail())->first();

            if(!$orang){
                $orang = Customer::create([
                    'customer_name' => $provider->getName(),
                    'customer_email' => $provider->getEmail(),
                    'customer_address' => '',
                    'customer_password' => '',
                    'customer_phone' => '0932023992'
                ]);
            }
            $hieu->customer()->associate($orang);
            $hieu->save();

            $account_name = Customer::where('customer_id',$hieu->user)->first();
            Session::put('customer_name',$account_name->customer_name);
            Session::put('customer_id',$account_name->customer_id);
            
            return redirect('/gio-hang')->with('message', 'Đăng nhập bằng facebook thành công');
        } 
    }

    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function index(){
    	return view('admin_login');
    }
    public function show_dashboard(){
        $this->AuthLogin();
    	return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        //$data = $request->all();
        $data = $request->validate([
            //validation laravel 
            'admin_email' => 'required',
            'admin_password' => 'required',
           'g-recaptcha-response' => new Captcha(),    //dòng kiểm tra Captcha
        ]);


        $admin_email = $data['admin_email'];
        $admin_password = md5($data['admin_password']);
        $login = Login::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($login){
            $login_count = $login->count();
            if($login_count>0){
                Session::put('admin_name',$login->admin_name);
                Session::put('admin_id',$login->admin_id);
                return Redirect::to('/dashboard');
            }
        }else{
                Session::put('message','Mật khẩu hoặc tài khoản bị sai.Làm ơn nhập lại');
                return Redirect::to('/admin');
        }
       

    }
    public function logout(){
        $this->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
