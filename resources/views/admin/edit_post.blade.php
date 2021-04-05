@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Cập nhật bài viết
                        </header>
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-post/'.$edit_post->post_id)}}" method="post" enctype="multipart/form-data">
                                   @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên bài viết</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="post_name" class="form-control" id="exampleInputEmail1" value="{{$edit_post->post_name}}">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="post_slug" class="form-control" id="exampleInputEmail1" value="{{$edit_post->post_slug}}">
                                </div>
                                   
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh bài viết</label>
                                    <input type="file" name="post_image" class="form-control" id="exampleInputEmail1">
                                       <img src="{{URL::to('public/uploads/post/'.$edit_post->post_image)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả bài viết</label>
                                    <textarea style="resize: none"  rows="8" class="form-control ckeditor" name="post_desc" id="ckeditor1">{{$edit_post->post_desc}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung bài viết</label>
                                    <textarea style="resize: none" rows="8" class="form-control ckeditor1" name="post_content"  id="id4" placeholder="Nội dung sản phẩm">{{$edit_post->post_content}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục bài viết</label>
                                      <select name="post_cate" class="form-control input-sm m-bot15">
                                            <option value="1">Giải pháp</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="post_status" class="form-control input-sm m-bot15">
                                        @if($edit_post->post_status==0)
                                            <option  value="1">Ẩn</option>
                                            <option selected value="0">Hiển thị</option>
                                        @else 
                                             <option selected value="1">Ẩn</option>
                                            <option  value="0">Hiển thị</option>
                                        @endif
                                            
                                    </select>
                                </div>
                               
                                <button type="submit" name="update_post" class="btn btn-info">Cập nhật bài viết</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection