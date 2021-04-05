<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Mail;
use App\Slider;
use App\Post;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
   
    public function show_tintuc(Request $request){
          //seo 
         //slide
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();

        $meta_desc = "Tin tức"; 
        $meta_keywords = "tin tức";
        $meta_title = "Tin tức";
        $url_canonical = $request->url();
        //--seo
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 
        $all_post = Post::orderBy('post_id','DESC')->get();
        return view('pages.tintuc.tintuc')->with('category',$cate_product)->with('brand',$brand_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->with('slider',$slider)->with('post',$all_post);
    }
    public function chi_tiet_tin(Request $request, $post_slug){
        //seo 
         //slide
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();

        $meta_desc = ""; 
        $meta_keywords = "";
        $meta_title = "";
        $url_canonical = $request->url();
        //--seo
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 
        $post = Post::where('post_slug',$post_slug)->take(1)->get();
        $related_post = DB::table('tbl_post')->whereNotIn('tbl_post.post_slug',[$post_slug])->take(4)->get();
        foreach($post as $key => $value){
              
                //seo 
                $meta_desc = $value->post_desc;
                $meta_keywords = $value->post_slug;
                $meta_title = $value->post_name;
                $url_canonical = $request->url();
                //--seo
            }
        return view('pages.tintuc.chitiettin')->with('category',$cate_product)->with('brand',$brand_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->with('slider',$slider)->with('post',$post)->with('related_post',$related_post);
    }
    public function send_mail(){
         //send mail
                $to_name = "Hieu Tan Tutorial";
                $to_email = "hieuchance2018@gmail.com";//send to this email
               
             
                $data = array("name"=>"Mail từ tài khoản Khách hàng","body"=>'Mail gửi về vấn về hàng hóa'); //body of mail.blade.php
                
                Mail::send('pages.send_mail',$data,function($message) use ($to_name,$to_email){

                    $message->to($to_email)->subject('Test thử gửi mail google');//send this mail with subject
                    $message->from($to_email,$to_name);//send from this mail
                });
                // return redirect('/')->with('message','');
                //--send mail
    }

    public function index(Request $request){
        //slide
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        //seo 
        $meta_desc = "Sách hay nghệ thuật"; 
        $meta_keywords = "Sách hay nghệ thuật";
        $meta_title = "Sách hay";
        $url_canonical = $request->url();
        //--seo
        
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 

        // $all_product = DB::table('tbl_product')
        // ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        // ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        // ->orderby('tbl_product.product_id','desc')->get();
        
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby(DB::raw('RAND()'))->get(); 
        $all_product_hot = DB::table('tbl_product')->where('product_status','0')->where('product_hot','1')->orderby(DB::raw('RAND()'))->get(); 

    	return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->with('slider',$slider)->with('all_product_hot',$all_product_hot); //1
        // return view('pages.home')->with(compact('cate_product','brand_product','all_product')); //2
    }
    public function search(Request $request){
         //slide
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();

        //seo 
        $meta_desc = "Tìm kiếm sách"; 
        $meta_keywords = "Tìm kiếm sách";
        $meta_title = "Tìm kiếm sách";
        $url_canonical = $request->url();
        //--seo
        $keywords = $request->keywords_submit;
        
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get(); 


        return view('pages.sanpham.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->with('slider',$slider)->with('keywords',$keywords);

    }
}
