@extends('layout')
@section('content')
   <!-- khoi sach moi  -->
    
    <section class="_1khoi sachmoi bg-white">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h1 class="header text-uppercase" style="font-weight: 400;">SÁCH MỚI TUYỂN CHỌN</h1>
                        <a href="" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>

                <div class="khoisanpham" style="padding-bottom: 2rem;">
                    <!-- 1 san pham -->
                    @foreach($all_product as $key => $all)
                     <div class="card ">
                                    <a href="{{url('/chi-tiet/'.$all->product_slug)}}" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="{{$all->product_name}}">
                                        <img class="card-img-top anh" src="{{asset('public/uploads/product/'.$all->product_image)}}"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">{{$all->product_name}}</h6>
                                            <small class="tacgia text-muted">{{$all->product_author}}</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">{{number_format($all->product_price_sale,0,',','.')}}đ</div>
                                                <div class="giacu text-muted">{{number_format($all->product_price,0,',','.')}}đ</div>
                                                @php 
                                                    $so1 =($all->product_price - $all->product_price_sale)/$all->product_price;
                                                    $phantram = $so1 * 100;
                                                @endphp
                                                <div class="sale">-{{ceil($phantram)}}%</div>

                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                    @endforeach

                </div>
            </div>
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h1 class="header text-uppercase" style="font-weight: 400;">SÁCH BÁN CHẠY</h1>
                        <a href="" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                    <!-- 1 san pham -->
                    @foreach($all_product_hot as $key => $all_hot)
                     <div class="card ">
                                    <a href="{{url('/chi-tiet/'.$all_hot->product_slug)}}" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="{{$all_hot->product_name}}">
                                        <img class="card-img-top anh" src="{{asset('public/uploads/product/'.$all_hot->product_image)}}"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">{{$all_hot->product_name}}</h6>
                                            <small class="tacgia text-muted">{{$all_hot->product_author}}</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">{{number_format($all_hot->product_price_sale,0,',','.')}}đ</div>
                                                <div class="giacu text-muted">{{number_format($all_hot->product_price,0,',','.')}}đ</div>
                                                    @php 
                                                    $so1 =($all_hot->product_price - $all_hot->product_price_sale)/$all_hot->product_price;
                                                    $phantram = $so1 * 100;
                                                @endphp
                                                <div class="sale">-{{ceil($phantram)}}%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection