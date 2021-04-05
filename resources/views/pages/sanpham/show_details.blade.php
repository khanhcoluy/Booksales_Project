@extends('layout')
@section('content')
  <style type="text/css">
    /* css cho breadcrumb  */
.breadcrumbbar{
    height: 40px;
}

.breadcrumb{
    height: 40px;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: ">";
}

.breadcrumb-item a{
    font-size: 12px;
    color: #666666;
    text-decoration: none;
    transition: 0.2s;
    line-height: 40px;
}

.breadcrumb-item a:hover{
    color:#F5A623;
}

.breadcrumb-item.active a{
    color:#F5A623;
}
/* het css cho breadcrumb  */


/* css cho product-page  */
.product-detail .product-img{   
    transition: 0.2s;
}

.product-detail .thumb-img {
    height: 100%;
    width: 74px;
    border: 1px solid #F2F2F2;
}

.product-detail .list-anhchitiet {
    height: 76px;
}

.product-detail .thumb-img:hover{
    cursor: pointer;
}

.product-detail .thumb-img.vienvang{
    border: 1px solid #F5A623;
}
/* het css cho product-page  */
/* css cho khoi thong tin cua  product-page*/
.khoithongtin .header hr {
    margin-top: 10px;
}

.khoithongtin .rate {color: #D9D9D5;font-size: 14px;}

.khoithongtin .rate .active {
    color: #F5A623;
}

.khoithongtin .uudai .header {
    margin-top: 5px;
    padding: 10px 0px 2px 16px;
    font-size: 13px;
}

.khoithongtin .header h4 {
    font-weight: 400;
    font-size: 22px;
    margin-bottom: 5px;
}

.khoithongtin .gia {
    font-size: 13px;
}

.khoithongtin .input-number .btn-spin {
    background: white;
    border: 1px solid #ebebeb;
}

.khoithongtin .input-number .btn-spin:hover {
    cursor: pointer;
    color: #2196F3;
}

.khoithongtin .input-number .soluongsp {
    width: 38px;
    border: 1px solid #ebebeb;
}


.khoithongtin .soluong label {
    width: 101px;
    font-size: 14px;
    margin-top: 9px;
}

.thongtinsach a.tacgia {
    color: #F5A623;
    text-decoration: none;
}

.thongtinsach ul li {
    margin-bottom: 5px;
}

.khoithongtin .thongtinsach ul {
    list-style: none;
    margin-bottom: 0px;
}

.khoithongtin .thongtinsach {
    border: 1px solid #E5E5E5;
    border-radius: 5px;
    padding: 13px;
    font-size: 13px;
}

.khoithongtin .uudai ul {
    list-style: none;
}

.khoithongtin .uudai ul li::before {
    content: "\2022";
    color: #F5A623;
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
    font-size:15px;
}

.khoithongtin .uudai li a {
    color: gray;
}

.khoithongtin .uudai li {
    margin-left: 33px;
    margin-bottom: 5px;
}

.khoithongtin .uudai {
    background: #FEF6E9;
    border: 1px solid #F5A623;
    border-radius: 5px;
    font-size: 13px;
}

.khoithongtin .giaban {
    margin-top: 7px;
}

.khoithongtin .giaban .giamoi {
    color: red;
    font-size: 26px;
    position: absolute;
    top: 12px;
    left: 149px;
}

/* don vi tien  */
.khoithongtin .giaban .donvitien {
    color: red;
    font-size: 26px;
    position: absolute;
    top: 12px;
    left: 250px;
    font-weight: bold;
}

.khoithongtin .giabia .giacu {
    text-decoration: line-through;
    color: #b8b8b8;
}

.khoithongtin .tietkiem {
    margin-top: 7px;
}

.khoithongtin .tietkiem .sale {
    background: #F5A623;
    border-radius: 6px;
    font-size: 11px;
    color: white;
    padding: 1px 4px;
    position: absolute;
    font-weight: bold;
    left: 140px;
}

.khoithongtin small.share {
    font-size: 15px;
}

.khoithongtin .huongdanmuahang {
    color: #F7A623;
    font-size: 13px;
    margin: 10px 0px;
    display: block;
}

.khoithongtin .nutmua {
    background: linear-gradient(#f5a623,#fd8205);
    color: white;
    font-weight: bold;
    font-size: 15px;
}

.khoithongtin .nutmua:hover {
    box-shadow: 0px 11px 20px -10px #fd8205;
}
/*het css cho khoi thong tin cua product-page*/

/* .product-description  */
.formdanhgia .nutguibl {
    border: 1px solid #F7A623;
    color: #F7A623;
    width: 60%;
    font-weight: 500;
}

.formdanhgia .nutguibl:hover {background: #F7A623;color: white;}

.formdanhgia .form-group input {padding: 6px 15px;font-size: 14px;border: 1px solid #d7d2d2;}

.formdanhgia .danhgiacuaban {
    font-size: 14px;
    margin-bottom: 10px;
    display: block;
}

.formdanhgia .tieude {
    font-size: 17px!important;
}

.btn.vietdanhgia {border: 1px solid #F7A623;color: #F7A623;padding: 7px 20px;}

.btn.vietdanhgia:hover {
    color: white;
    background: #F7A623;
}

.tiledanhgia .motthanh {
    margin-bottom: 8px;
}

#nav-danhgia .tiledanhgia {
    margin-top: 53px;
}

.motthanh i.fa.fa-star {margin-left: 6px;color: #a5a5a5;}

.progress {
    width: 80%;
    height: 10px;
}

#nav-danhgia p.sonhanxet {
    font-size: 13px;
}

#nav-danhgia .sao i.fa.fa-star {
    color: #d1cccc;
}

#nav-danhgia .diem {
    font-size: 45px;
    color: red;
    font-weight: bold;
}

.product-description #nav-danhgia p.tieude {
    margin: 20px 0px 0px 0px;
}

.product-description h6.tieude {
    margin-top: 22px;
    font-size: 18px;
}

.product-description .nav-tabs a {
    color: gray;
    margin-right: 7px;
    border-radius: 0;
    font-size: 14px;
}

.product-description .nav-tabs .nav-item.active {
    color: black;
    border-top: 4px solid #F5A623;
}

.product-description {
    margin-left: 9px;
}

.formdanhgia .rating input{
    display: none;
    
}

.formdanhgia .rating label{
    display: block;
    cursor: pointer;
    width: 15px;
}

.formdanhgia .rating label::before{
    content: '\f005';
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 900;
    position: relative;
    display: block;
    font-size: 15px;
    color: rgb(187, 186, 186);
}

.formdanhgia .rating label::after{
    content: '\f005';
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 900;
    position: absolute;
    display: block;
    font-size: 15px;
    color: #F7A623;
    top:350px;
    opacity: 0;
    transition: 0.2s;
}

.formdanhgia .rating label:hover::after,
.formdanhgia .rating label:hover ~ label::after,
.formdanhgia .rating input:checked ~ label::after{
    opacity: 1;
}
/* het css cho .product-description  */

/* css cho _1khoi */

/* css cho nut xem tat ca  */
a.btn.btn-warning.btn-sm.text-white {
    height: 25px;
    width: 77px;
    background: #F5A623;
    font-size: 11px;
} 
/* het css cho nut xem tat ca  */

.card:hover .anh {
    top: 5px;
}

img.card-img-top.anh {
    position: relative;
    top: 15px;
    transition: 0.3s;
}

ul span.text-muted {
    font-size: 11px;
    padding-top: 6px;
    padding-left: 12px;
    color: #919191!important;
}

i.fa.fa-star {
    font-size: 10px;
    color: #bebebe;
}

li.active .fa-star {
    color: #F5A623;
}

.noidungsp .gia .sale {
    background: #F5A623;
    border-radius: 6px;
    font-size: 11px;color: white;
    padding: 1px 4px;
    position: absolute;
    right: 0
    ;
    top: 2px;
}

.giacu.text-muted {
    font-size: 13px;
    color: #919191!important;
}

.giamoi {
    color: red;
    font-size: 14px;
    font-weight: 500;
    padding-right: 10px;
}

.gia.d-flex {
    position: relative;
}

small.tacgia.text-muted {
    font-size: 12px;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    transition: 0.3s;
    padding: 3px 0px;
}

h6.card-title.ten {
    font-weight: 400;
    margin-bottom: 4px;
    font-size: 15px;
    height: 35px;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    transition: 0.3s;
}

.card-body.noidungsp {
    padding: 10px 10px 0px 10px;
}

.card {
    border-radius: 0;
}

.card:hover .ten {
    color: #F5A623;
}

/* xu ly margin slick  */
.card{
    margin: 0 10px;
}

.khoisanpham {
    margin: 0 -10px;
}

  </style>
    @foreach($product_details as $key => $details)
	<!-- breadcrumb  -->
    <section class="breadcrumbbar">
        <div class="container">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
                
                <li class="breadcrumb-item"><a href="{{url('/danh-muc/'.$details->slug_category_product)}}">{{$details->category_name}}</a></li>

                <li class="breadcrumb-item active"><a href="#">{{$details->product_name}}</a></li>
            </ol>
        </div>
    </section>

    <!-- nội dung của trang  -->
    <section class="product-page mb-4">
        <div class="container">
            <!-- chi tiết 1 sản phẩm -->
            <div class="product-detail bg-white p-4">
                <div class="row">
                    <!-- ảnh  -->
                    <div class="col-md-5 khoianh">
                        <div class="anhto mb-4">
                            <a class="active" href="{{asset('public/uploads/product/'.$details->product_image)}}" data-fancybox="thumb-img">
                                <img class="product-image" src="{{asset('public/uploads/product/'.$details->product_image)}}" alt="{{$details->product_name}}" style="width: 100%;">
                            </a>
                            <a href="{{asset('public/uploads/product/'.$details->product_image)}}" data-fancybox="thumb-img"></a>
                        </div>

                        <div class="list-anhchitiet d-flex mb-4" style="margin-left: 2rem;">
                            <img class="thumb-img thumb1 mr-3" src="{{asset('public/uploads/product/'.$details->product_image)}}" class="img-fluid" alt="lap-ke-hoach-kinh-doanh-hieu-qua-mt">
                            <img class="thumb-img thumb2" src="{{asset('public/uploads/product/'.$details->product_image)}}" class="img-fluid" alt="lap-ke-hoach-kinh-doanh-hieu-qua-ms">
                            <img class="thumb-img thumb2" src="{{asset('public/uploads/product/'.$details->product_image)}}" class="img-fluid" alt="lap-ke-hoach-kinh-doanh-hieu-qua-ms">

                        </div>
                    </div>
                    <!-- thông tin sản phẩm: tên, giá bìa giá bán tiết kiệm, các khuyến mãi, nút chọn mua.... -->
                    <div class="col-md-7 khoithongtin">
                        <div class="row">
                            <div class="col-md-12 header">
                                <h4 class="ten">{{$details->product_name}}</h4>
                                <div class="rate">
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star "></i>
                                </div>
                                <hr>
                            </div>
                            <div class="col-md-7">
                                <div class="gia">
                                    <div class="giabia">Giá bìa:<span class="giacu ml-2">{{number_format($details->product_price,0,',','.')}}đ</span></div>
                                    <div class="giaban">Giá bán tại DealBooks: <span
                                            class="giamoi font-weight-bold">{{number_format($details->product_price_sale,0,',','.')}}</span><span class="donvitien">₫</span></div>

                                  
                                </div>
                                <div class="uudai my-3">
                                    <h6 class="header font-weight-bold">Khuyến mãi & Ưu đãi tại DealBook:</h6>
                                    <ul>
                                        <li><b>Miễn phí giao hàng </b>cho đơn hàng từ 150.000đ ở TP.HCM và 300.000đ ở
                                            Tỉnh/Thành khác <a href="#">>> Chi tiết</a></li>
                                        <li><b>Combo sách HOT - GIẢM 25% </b><a href="#">>>Xem ngay</a></li>
                                        <li>Tặng Bookmark cho mỗi đơn hàng</li>
                                        <li>Bao sách miễn phí (theo yêu cầu)</li>
                                    </ul>
                                </div>
                                <div class="soluong d-flex">
                                    <label class="font-weight-bold">Số lượng: </label>
                                    <div class="input-number input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text btn-spin btn-dec">-</span>
                                        </div>
                                        <input type="text" value="1" class="soluongsp cart_product_qty_{{$details->product_id}}  text-center">
                                        <div class="input-group-append">
                                            <span class="input-group-text btn-spin btn-inc">+</span>
                                        </div>
                                    </div>
                                </div>
                                 <form>
                                        @csrf
                                            <input type="hidden" value="{{$details->product_id}}" class="cart_product_id_{{$details->product_id}}">
                                            <input type="hidden" value="{{$details->product_name}}" class="cart_product_name_{{$details->product_id}}">
                                            <input type="hidden" value="{{$details->product_image}}" class="cart_product_image_{{$details->product_id}}">
                                            <input type="hidden" value="{{$details->product_price_sale}}" class="cart_product_price_{{$details->product_id}}">
                                            
                                            <input type="button" value="Thêm giỏ hàng" class="btn btn-warning add-to-cart" data-id_product="{{$details->product_id}}" name="add-to-cart">
                                            </form>
                               
                            </div>
                            <!-- thông tin khác của sản phẩm:  tác giả, ngày xuất bản, kích thước ....  -->
                            <div class="col-md-5">
                                <div class="thongtinsach">
                                    {!!$details->product_desc!!}
                                    {{-- <ul>
                                        <li>Tác giả: {{$details->product_author}}</li>
                                        <li>Ngày xuất bản: <b>{{$details->product_date}}</b></li>
                                        <li>Kích thước: <b>20.5 x 13.5 cm</b></li>
                                        <li>Dịch giả: {{$details->product_author}}</li>
                                        <li>Nhà xuất bản: Nhà Xuất Bản Thanh Niên</li>
                                        <li>Hình thức bìa: <b>Bìa mềm</b></li>
                                        <li>Số trang: <b>336</b></li>
                                        <li>Cân nặng: <b>0</b></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- decripstion của 1 sản phẩm: giới thiệu , đánh giá độc giả  -->
                    <div class="product-description col-md-9">
                        <!-- 2 tab ở trên  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active text-uppercase" id="nav-gioithieu-tab"
                                    data-toggle="tab" href="#nav-gioithieu" role="tab" aria-controls="nav-gioithieu"
                                    aria-selected="true">Giới thiệu</a>
                                <a class="nav-item nav-link text-uppercase" id="nav-danhgia-tab" data-toggle="tab"
                                    href="#nav-danhgia" role="tab" aria-controls="nav-danhgia"
                                    aria-selected="false">Đánh
                                    giá của độc giả</a>
                            </div>
                        </nav>
                        <!-- nội dung của từng tab  -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active ml-3" id="nav-gioithieu" role="tabpanel"
                                aria-labelledby="nav-gioithieu-tab">
                               
                                <p>{!!$details->product_content!!}</p>
                           
                            </div>
                            <div class="tab-pane fade" id="nav-danhgia" role="tabpanel" aria-labelledby="nav-danhgia-tab">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <p class="tieude">Đánh giá trung bình</p>
                                        <div class="diem">0/5</div>
                                        <div class="sao">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p class="sonhanxet text-muted">(0 nhận xét)</p>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="tiledanhgia text-center">
                                            <div class="motthanh d-flex align-items-center">5 <i class="fa fa-star"></i>
                                                <div class="progress mx-2">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> 0%
                                            </div>
                                            <div class="motthanh d-flex align-items-center">4 <i class="fa fa-star"></i>
                                                <div class="progress mx-2">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> 0%
                                            </div>
                                            <div class="motthanh d-flex align-items-center">3 <i class="fa fa-star"></i>
                                                <div class="progress mx-2">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> 0%
                                            </div>
                                            <div class="motthanh d-flex align-items-center">2 <i class="fa fa-star"></i>
                                                <div class="progress mx-2">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> 0%
                                            </div>
                                            <div class="motthanh d-flex align-items-center">1 <i class="fa fa-star"></i>
                                                <div class="progress mx-2">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> 0%
                                            </div>
                                            <div class="btn vietdanhgia mt-3">Viết đánh giá của bạn</div>
                                        </div>
                                        <!-- nội dung của form đánh giá  -->
                                        <div class="formdanhgia">
                                            <h6 class="tieude text-uppercase">GỬI ĐÁNH GIÁ CỦA BẠN</h6>
                                            <span class="danhgiacuaban">Đánh giá của bạn về sản phẩm này:</span>
                                            <div class="rating d-flex flex-row-reverse align-items-center justify-content-end">
                                                <input type="radio" name="star" id="star1"><label for="star1"></label>
                                                <input type="radio" name="star" id="star2"><label for="star2"></label>
                                                <input type="radio" name="star" id="star3"><label for="star3"></label>
                                                <input type="radio" name="star" id="star4"><label for="star4"></label>
                                                <input type="radio" name="star" id="star5"><label for="star5"></label>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="txtFullname w-100" placeholder="Mời bạn nhập tên(Bắt buộc)">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="txtEmail w-100" placeholder="Mời bạn nhập email(Bắt buộc)">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="txtComment w-100" placeholder="Đánh giá của bạn về sản phẩm này">
                                            </div>
                                            <div class="btn nutguibl">Gửi bình luận</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- het tab nav-danhgia  -->
                        </div>
                        <!-- het tab-content  -->
                    </div>
                    <!-- het product-description -->
                </div>
                <!-- het row  -->
            </div>
            <!-- het product-detail -->
        </div>
        <!-- het container  -->
    </section>
    <!-- het product-page -->
    @endforeach

    <!-- khối sản phẩm tương tự -->
    <section class="_1khoi sachmoi">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light pt-4">
                        <h5 class="header text-uppercase" style="font-weight: 400;">Sản phẩm tương tự</h5>
                        <a href="sach-moi-tuyen-chon.html" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                    <!-- 1 sản phẩm -->
                    @foreach($relate as $key => $rel)
                    <div class="card ">
                                    <a href="{{url('/chi-tiet/'.$rel->product_slug)}}" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="{{$rel->product_name}}">
                                        <img class="card-img-top anh" src="{{asset('public/uploads/product/'.$rel->product_image)}}"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">{{$rel->product_name}}</h6>
                                            <small class="tacgia text-muted">{{$rel->product_author}}</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">{{number_format($rel->product_price,0,',','.')}}đ</div>
                                                <div class="giacu text-muted">{{number_format($rel->product_price_sale,0,',','.')}}đ</div>
                                                @php 
                                                    $so1 =($rel->product_price - $rel->product_price_sale)/$rel->product_price;
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