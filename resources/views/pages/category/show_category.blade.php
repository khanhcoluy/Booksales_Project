@extends('layout')
@section('content')
  <style type="text/css">
    /* css cho trang sach-kinh-te  */
.img img {
    height: 80px;
    width: 60px;
    margin-bottom: 8px;
}

.the-loai-sach ul li {
    border: 1px solid #d1d1d1;
    border-radius: 3px;
    width: 105px;
    transition: 0.2s;
    margin-right: 7px;
    padding: 8px 0 8px 0;
    background: white;
}

.the-loai-sach ul li:last-child {
    margin-right: 0px;
}

.the-loai-sach ul li:hover {box-shadow: 0px 0px 2px 1px #d5d5d5;border: 1px solid #F5A623;}

.the-loai-sach .ten {
    color: #474747;
    text-align: center;
    font-size: 14px;
    transition: 0.2s;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.the-loai-sach ul li:hover .ten{color: #F5A623;}

.page-item .page-link {
    color: #939393;
}

.page-item.active  .page-link {
    background: #F5A623;
    border: 1px solid #F5A623;
    color: white;
}


/* page tai khoan  */
.account-page-tab-content .nav-tabs .nav-link {
    border-radius: 0;
}

.account-page-tab-content a.nav-link {
    margin-left: 0;
}

.account-page-tab-content .nav-tabs .nav-item.active {
    color: black;
    border-top: 4px solid #F5A623;
}

.account-page-tab-content .nav-tabs a {
    color: gray;
}

.button-capnhat {
    background: linear-gradient(#f8c168,#ffa142);
    color: white;
    font-weight: 500;
    padding: 7px 15px 7px 15px;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

table {
    border-collapse: collapse;
    width: 100%;
}

.donhang-table table th {
    font-weight: 500;
    background: #cecece;
}

h3.account-header {
    color: #9d9d9d;
    font-size: 18px;
}


  </style>
   <!-- breadcrumb  -->
    <section class="breadcrumbbar">
        <div class="container">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="">@foreach($category_name as $key => $name) {{$name->category_name}} @endforeach</a></li>
            </ol>
        </div>
    </section>

    <!-- ảnh banner  -->
   {{--  <section class="banner">
        <div class="container">
            <a href="sach-moi-tuyen-chon.html"><img src="{{asset('public/frontend/images/banner-sach-ktkn.jpg')}}" alt="banner-sach-ktkn"
                    class="img-fluid"></a>
        </div>
    </section> --}}

    <!-- thể loại sách: kinh tế chính trị nhân vật bài học kinh doanh ( từng ô vuông) -->
    <section class="page-content my-3">
        <div class="container">
            <div>
                <h4 class="header text-uppercase">@foreach($category_name as $key => $name) {{$name->category_name}} @endforeach</h4>
            </div>
          {{--   <div class="the-loai-sach">
                <ul class="list-unstyled d-flex">
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="{{asset('public/frontend/images/tls-kinh-te-chinh-tri.png')}}" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Kinh tế - chính trị
                            </div>
                        </a>
                    </li>
                   
                </ul>
            </div> --}}
        </div>
    </section>

    <!-- khối sản phẩm  -->
    <section class="content my-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <!-- header của khối sản phẩm : tag(tác giả), bộ lọc và sắp xếp  -->
                <div class="header-khoi-sp d-flex">
                   {{--  <div class="tag">
                        <label>Tác giả nổi bật:</label>
                        <a href="#">Tất cả</a>
                        <a href="#" data-tacgia=".MarieForleo">Marie Forleo</a>
                        <a href="#" data-tacgia=".DeanGraziosi">Dean Graziosi</a>
                        <a href="#" data-tacgia=".DavikClark">Davik Clark</a>
                        <a href="#" data-tacgia=".TSLêThẩmDương">TS Lê Thẩm Dương</a>
                        <a href="#" data-tacgia=".SimonSinek">Simon Sinek</a>
                    </div> --}}
                    {{-- <div class="sort d-flex ml-auto">
                        <div class="hien-thi">
                            <label for="hienthi-select" class="label-select">Hiển thị</label>
                            <select class="hienthi-select">
                                <option value="30">30</option>
                                <option value="60">60</option>
                            </select>
                        </div>
                        <div class="sap-xep">
                            <label for="sapxep-select" class="label-select">Sắp xếp</label>
                            <select class="sapxep-select">
                                <option value="moinhat">Mới nhất</option>
                                <option value="thap-cao">Giá: Thấp - Cao</option>
                                <option value="cao-thap">Giá: Cao - Thấp</option>
                            </select>
                        </div>
                    </div> --}}
                </div>
                
                <!-- các sản phẩm  -->
                <div class="items">
                    <div class="row">
                         @foreach($category_by_id as $key => $cate)
                            <div class="col-lg-3 col-md-4 col-xs-6 item DeanGraziosi">
                               
                                <div class="card ">
                                    <a href="{{url('/chi-tiet/'.$cate->product_slug)}}" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="{{$cate->product_name}}">
                                        <img class="card-img-top anh" src="{{asset('public/uploads/product/'.$cate->product_image)}}"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">{{$cate->product_name}}</h6>
                                            <small class="tacgia text-muted">{{$cate->product_author}}</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">{{number_format($cate->product_price,0,',','.')}}đ</div>
                                                <div class="giacu text-muted">{{number_format($cate->product_price_sale,0,',','.')}}đ</div>
                                                @php 
                                                    $so1 =($cate->product_price - $cate->product_price_sale)/$cate->product_price;
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
                               

                            </div>
                        @endforeach
                           
                    </div>
                </div>

                <!-- pagination bar -->
                <div class="pagination-bar my-3">
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                   <li>{{$category_by_id->links()}}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!--het khoi san pham-->
            </div>
            <!--het div noidung-->
        </div>
        <!--het container-->
    </section>
    <!--het _1khoi-->
@endsection
