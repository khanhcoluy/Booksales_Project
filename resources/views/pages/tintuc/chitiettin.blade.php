@extends('layout')
@section('content')
    <div class="container">
            <div class="row">
               <div class="detail col-xs-12 col-sm-12 col-md-9">
                  @foreach($post as $key => $val)
                  <div class="bread ">
                     <div id="crumbs"><a class="colorgia" href="{{url('/')}}"> <i class="fa fa-home"> </i>  Trang chủ </a> /<i class="fa fa-angle-double-right colorgia"> </i> <a href="{{url('/tin-tuc')}}" rel="category tag">Giải pháp</a> <i class="fa fa-angle-double-right">  </i>   {{$val->post_name}}</div>
                  </div>
                  <h1 class="title-post"><span>{{$val->post_name}}</span></h1>
                  <article class="post-content">

                  </article>
                  <div class="tab-content">
                     <div role="tabpanel" class="tab-pane active" id="home">
                        {!!$val->post_desc!!}
                        <br>
                        <br>
                        {!!$val->post_content!!}
                     </div>
                     <div role="tabpanel" class="tab-pane fade " id="profile">
                        <div class="alert alert-danger notice text-center" role="alert">Rất tiết, mục này chưa có dữ liệu.</div>
                     </div>
                  </div>
                  @endforeach
   
                
                  <div class="title default"><span><i class="fa fa-money"></i> Tin tức khác</span></div>

                     @foreach($related_post as $key => $val)
                  <div class="row clearfix feature list-post">
                     <div class="col-xs-12 col-sm-6 col-md-4">
                        <a class="post-img"  href="{{url('chi-tiet-tin/'.$val->post_slug)}}" title="{{$val->post_name}}">
                           <img width="960" height="1280"   alt="" data-srcset="{{asset('public/uploads/post/'.$val->post_image)}}" sizes="(max-width: 960px) 100vw, 960px" data-src="{{asset('public/uploads/post/'.$val->post_image)}}" class="img-responsive center-block wp-post-image lazyload" src="{{asset('public/uploads/post/'.$val->post_image)}}" />
                         
                        </a>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-8">
                        <h3>
                           <a href="{{url('chi-tiet-tin/'.$val->post_slug)}}" title="{{$val->post_name}}" class="post-title">
                           {{$val->post_name}}     </a>
                        </h3>
                        <p>{!!$val->post_desc!!}</p>
                        <a href="{{url('chi-tiet-tin/'.$val->post_slug)}}" title="Nhà Hàng Kokugyo Nhật Bản Lắp Đặt Chuông Gọi Không Dây" class="readmore">Chi tiết <i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
                  @endforeach

                
               </div>
              @include('pages.sidebar')
            </div>
         </div>
         <!--/container -->
@endsection