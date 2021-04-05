<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class PostController extends Controller
{
	 public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
     public function add_post(){
        $this->AuthLogin();
        return view('admin.add_post');
    }
    public function all_post(){
        $this->AuthLogin();
    	$all_post = Post::orderBy('post_id','DESC')->paginate(5);
    	
    	return view('admin.all_post')->with(compact('all_post'));

    }
    public function save_post(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['post_name'] = $request->post_name;
      
        $data['post_slug'] = $request->post_slug;
    	
    	$data['post_desc'] = $request->post_desc;
        $data['post_content'] = $request->post_content;
        $data['category_id'] = $request->post_cate;
      
        $data['post_status'] = $request->post_status;
        $data['post_image'] = $request->post_image;
        $get_image = $request->file('post_image');
      
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/post',$new_image);
            $data['post_image'] = $new_image;
            DB::table('tbl_post')->insert($data);
            Session::put('message','Thêm bài viết thành công');
            return Redirect::to('add-post');
        }else{
            $data['post_image'] = '';
        	DB::table('tbl_post')->insert($data);
        	Session::put('message','Thêm bài viết thành công');
        	return Redirect::to('add-post');
        }
    }
    public function unactive_post($post_id){
         $this->AuthLogin();
        DB::table('tbl_post')->where('post_id',$post_id)->update(['post_status'=>1]);
        Session::put('message','Không kích hoạt sản phẩm thành công');
        return Redirect::to('all-post');

    }
    public function active_post($post_id){
        $this->AuthLogin();
        DB::table('tbl_post')->where('post_id',$post_id)->update(['post_status'=>0]);
        Session::put('message','Kích hoạt sản phẩm thành công');
        return Redirect::to('all-post');
    }
    public function edit_post($post_id){
        $this->AuthLogin();
     
        $edit_post = Post::where('post_id',$post_id)->first();

        return view('admin.edit_post')->with(compact('edit_post'));
    }
    public function update_post(Request $request,$post_id){
         $this->AuthLogin();
        $data = array();
        
        $get_image = $request->file('post_image');
        
        if($get_image){
                    $get_name_image = $get_image->getClientOriginalName();
                    $name_image = current(explode('.',$get_name_image));
                    $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                    $get_image->move('public/uploads/post',$new_image);
                    $data['post_name'] = $request->post_name;
                    $data['post_slug'] = $request->post_slug;
                    $data['post_desc'] = $request->post_desc;
                    $data['post_content'] = $request->post_content;
                    $data['category_id'] = $request->post_cate;
                    $data['post_status'] = $request->post_status;
                    $data['post_image'] = $new_image;
                   
        }else{
                    $data['post_name'] = $request->post_name;
                    $data['post_slug'] = $request->post_slug;
                    $data['post_desc'] = $request->post_desc;
                    $data['post_content'] = $request->post_content;
                    $data['category_id'] = $request->post_cate;
                    $data['post_status'] = $request->post_status;
        }
        DB::table('tbl_post')->where('post_id',$post_id)->update($data);
        Session::put('message','Cập nhật bài viết thành công');
        return Redirect::to('all-post');  
    }
    public function delete_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return Redirect::to('all-product');
    }
    //End Admin Page
}
