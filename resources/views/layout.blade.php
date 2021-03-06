<!DOCTYPE html>
<html lang="vi">

<head>
    <title>{{$meta_title}}</title>
    <meta name="description"
        content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   {{--   <link rel="stylesheet" href="{{asset('public/frontend/css/product-item.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('public/frontend/css/home.css')}}">
    
    <link rel="stylesheet" href="{{asset('public/frontend/fontawesome_free_5.13.0/css/all.css')}}">
    
    <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/slick/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/slick/slick-theme.css')}}" />
   
   
  <link rel="canonical" href="{{$url_canonical}}"> 
     
   
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <script type="text/javascript" src="{{asset('public/frontend/slick/slick.min.js')}}"></script>

    <script type="text/javascript"
                src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    
    <script type="text/javascript" src="{{asset('public/frontend/js/main.js')}}"></script>
    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
    <meta name="google-site-verification" content="urDZLDaX8wQZ_-x8ztGIyHqwUQh2KRHvH9FhfoGtiEw" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">

    <link rel="manifest" href="favicon_io/site.webmanifest">
    <style></style>
    
    {{--  --}}
</head>

<body>
    <!-- code cho nut like share facebook  -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

    <!-- header -->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <!-- logo  -->
            <a class="navbar-brand" href="{{url('/')}}" style="color: #CF111A;"><b>DealBook</b>.xyz</a>

            <!-- navbar-toggler  -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <!-- form t??m ki???m  -->
                <form class="form-inline ml-auto my-2 my-lg-0 mr-3" method="GET" action="{{url('/tim-kiem')}}">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" class="form-control" name="keywords_submit" aria-label="small"
                            placeholder="Nh???p s??ch c???n t??m ki???m...">
                        <div class="input-group-append">
                            <button type="submit" class="btn" style="background-color: #CF111A; color: white;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- ?? ????ng nh???p ????ng k?? gi??? h??ng tr??n header  -->
                <ul class="navbar-nav mb-1 ml-auto">
                    <div class="dropdown">
                        <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                            @if(!Session::get('customer_id'))
                            <a href="#" class="btn btn-secondary rounded-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">T??i
                                kho???n</a>
                            @else 
                            <a href="#" class="btn btn-secondary rounded-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block"><strong>{{Session::get('customer_name')}}</strong></a>
                            @endif

                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item nutdangky text-center mb-2" href="#" data-toggle="modal"
                                data-target="#formdangky">????ng k??</a>
                            @if(Session::get('customer_id'))
                                <p><a class="dropdown-item nutdangnhap text-center" href="{{url('/order-tracking/'.Session::get('customer_id'))}}">????n h??ng ???? ?????t</a></p>
                                <a class="dropdown-item nutdangnhap text-center" href="{{url('/logout-checkout')}}">????ng xu???t</a>
                            @else 
                            <a class="dropdown-item nutdangnhap text-center" href="#" data-toggle="modal"
                                data-target="#formdangnhap">????ng nh???p</a>
                            @endif

                        </div>
                    </div>
                    <li class="nav-item giohang">
                        <a href="{{url('/gio-hang')}}" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-shopping-cart"></i>
                           {{--  <div class="cart-amount">0</div> --}}
                        </a>
                        <a class="nav-link text-dark giohang text-uppercase" href="{{url('/gio-hang')}}"
                            style="display:inline-block">Gi???
                            H??ng</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- form dang ky khi click vao button tren header-->
    <div class="modal fade mt-5" id="formdangky" data-backdrop="static" tabindex="-1" aria-labelledby="dangky_tieude"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none">????ng nh???p</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">????ng k??</a>
                            <hr>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="form-signup" class="form-signin mt-2" action="{{url('/add-customer')}}" method="POST">
                        @csrf
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nh???p h??? v?? t??n" name="customer_name" required
                                autofocus>
                        </div>
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nh???p ?????a ch???" name="customer_address"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nh???p s??? ??i???n tho???i" name="customer_phone"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nh???p ?????a ch??? email" name="customer_email"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="Nh???p m???t kh???u" name="customer_password"
                                required>
                        </div>
                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit"
                            style="background: #F5A623">????ng k??</button>
                        <hr class="mt-3 mb-2">
                        <div class="custom-control custom-checkbox">
                            <p class="text-center">B???ng vi???c ????ng k??, b???n ???? ?????ng ?? v???i DealBook v???</p>
                            <a href="#" class="text-decoration-none text-center" style="color: #F5A623">??i???u kho???n d???ch
                                v??? & Ch??nh s??ch b???o m???t</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <!-- form dang nhap khi click vao button tren header-->
    <div class="modal fade mt-5" id="formdangnhap" data-backdrop="static" tabindex="-1"
        aria-labelledby="dangnhap_tieude" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none">????ng nh???p</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">????ng k??</a>
                            <hr>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-signin" action="{{url('/login-customer')}}" method="POST" class="form-signin mt-2">
                        @csrf
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nh???p ?????a ch??? email" name="email_account"
                                required autofocus>
                        </div>

                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="M???t kh???u" name="password_account" required>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Nh??? m???t kh???u</label>
                            <a href="#" class="float-right text-decoration-none" style="color: #F5A623">Qu??n m???t
                                kh???u</a>
                        </div>

                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white" type="submit"
                            style="background: #F5A623">????ng nh???p</button>
                        <hr class="my-4">
                        <a class="btn btn-primary btn-sm btn-login-fb" width="100%" href="{{url('/login-facebook')}}">????ng nh???p Facebook</a>
                        <a class="btn btn-danger btn-sm  btn-login-gg" href="{{url('/login-google')}}">????ng nh???p Google</a> 
                        {{-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                                class="fab fa-google mr-2"></i> ????ng nh???p b???ng Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                                class="fab fa-facebook-f mr-2"></i> ????ng nh???p b???ng Facebook</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- thanh tieu de "danh muc sach" + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-md-3">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh m???c s??ch</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="benphai float-right">
                        <div class="hotline">
                            <i class="fa fa-phone"></i>
                            <span>Hotline:<b>1900 1999</b> </span>
                        </div>
                        <i class="fas fa-comments-dollar"></i>
                        <a href="#">H??? tr??? tr???c tuy???n </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('slide')

  
    @yield('content')
       <!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->
    <section class="abovefooter text-white" style="background-color: #CF111A;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="{{asset('public/frontend/images/icon-books.png')}}" alt="icon-books">
                        <div class="noidung">
                            <h3 class="tieude font-weight-bold">H??N 14.000 T???A S??CH HAY</h3>
                            <p class="detail">Tuy???n ch???n b???i DealBooks</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="{{asset('public/frontend/images/icon-ship.png')}}" alt="icon-ship">
                        <div class="noidung">
                            <h3 class="tieude font-weight-bold">MI???N PH?? GIAO H??NG</h3>
                            <p class="detail">T??? 150.000?? ??? TP.HCM</p>
                            <p class="detail">T??? 300.000?? ??? t???nh th??nh kh??c</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="{{asset('public/frontend/images/icon-gift.png')}}" alt="icon-gift">
                        <div class="noidung">
                            <h3 class="tieude font-weight-bold">QU?? T???NG MI???N PH??</h3>
                            <p class="detail">T???ng Bookmark</p>
                            <p class="detail">Bao s??ch mi???n ph??</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="{{asset('public/frontend/images/icon-return.png')}}" alt="icon-return">
                        <div class="noidung">
                            <h3 class="tieude font-weight-bold">?????I TR??? NHANH CH??NG</h3>
                            <p class="detail">H??ng b??? l???i ???????c ?????i tr??? nhanh ch??ng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        
    <!-- footer  -->
    <footer>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="gioithieu">
                        <h3 class="header text-uppercase font-weight-bold">V??? DealBook</h3>
                        <a href="#">Gi???i thi???u v??? DealBook</a>
                        <a href="#">Tuy???n d???ng</a>
                        <div class="fb-like" data-href="https://www.facebook.com/DealBook-110745443947730/"
                            data-width="300px" data-layout="button" data-action="like" data-size="small"
                            data-share="true"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="hotrokh">
                        <h3 class="header text-uppercase font-weight-bold">H??? TR??? KH??CH H??NG</h3>
                        <a href="#">H?????ng d???n ?????t h??ng</a>
                        <a href="#">Ph????ng th???c thanh to??n</a>
                        <a href="#">Ph????ng th???c v???n chuy???n</a>
                        <a href="#">Ch??nh s??ch ?????i tr???</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h3 class="header text-uppercase font-weight-bold">H???P T??C V?? LI??N K???T</h3>
                        <img src="{{asset('public/frontend/images/dang-ky-bo-cong-thuong.png')}}" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h3 class="header text-uppercase font-weight-bold">Ph????ng th???c thanh to??n</h3>
                        <img src="{{asset('public/frontend/images/visa-payment.jpg')}}" alt="visa-payment">
                        <img src="{{asset('public/frontend/images/master-card-payment.jp')}}g" alt="master-card-payment">
                        <img src="{{asset('public/frontend/images/jcb-payment.jpg')}}" alt="jcb-payment">
                        <img src="{{asset('public/frontend/images/atm-payment.jpg')}}" alt="atm-payment">
                        <img src="{{asset('public/frontend/images/cod-payment.jpg')}}" alt="cod-payment">
                        <img src="{{asset('public/frontend/images/payoo-payment.jpg')}}" alt="payoo-payment">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#"
            style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>

      <script type="text/javascript">

          $(document).ready(function(){
            $('.send_order').click(function(){
                swal({
                  title: "X??c nh???n ????n h??ng",
                  text: "????n h??ng s??? kh??ng ???????c ho??n tr??? khi ?????t,b???n c?? mu???n ?????t kh??ng?",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "C???m ??n, Mua h??ng",

                    cancelButtonText: "????ng,ch??a mua",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                     if (isConfirm) {
                        var shipping_email = $('.shipping_email').val();
                        var shipping_name = $('.shipping_name').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('input[name=shipping_method]:checked').val();
                        var shipping_payment = $('input[name=shipping_payment]:checked').val();

                        var order_fee = $('.order_fee').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();
                        if(shipping_email=='' || shipping_name=='' || shipping_address=='' || shipping_phone=='' || shipping_notes==''){
                            alert('L??m ??n ??i???n ng?????i nh???n h??ng');
                            window.setTimeout(function(){ 
                                location.reload();
                            } ,1000);
                        }else{
                            $.ajax({
                                url: '{{url('/confirm-order')}}',
                                method: 'POST',
                                data:{shipping_payment:shipping_payment,shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                                success:function(){
                                   swal("????n h??ng", "????n h??ng c???a b???n ???? ???????c g???i th??nh c??ng", "success");
                                }
                            });

                            window.setTimeout(function(){ 
                                location.reload();
                            } ,3000);
                        }


                      } else {
                        swal("????ng", "????n h??ng ch??a ???????c g???i, l??m ??n ho??n t???t ????n h??ng", "error");

                      }
              
                });
                    

               
            });
        });
    

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){

                var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                    success:function(){

                        swal({
                                title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                showCancelButton: true,
                                cancelButtonText: "Xem ti???p",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "??i ?????n gi??? h??ng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/gio-hang')}}";
                            });

                    }

                });
            });
        });
    </script>

</body>

</html>