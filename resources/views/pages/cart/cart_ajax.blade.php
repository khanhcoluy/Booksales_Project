@extends('layout')
@section('content')
<style type="text/css">
  *{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}


/* css cho header formdangnhap dangky  */
.modal-header {
    padding-bottom: 0;
}

ul.tabs li.tab a {
    font-size: 18px;
    color: #646464;
    transition: 0.2s;
}

ul.tabs li:hover a {
    color: #F5A623;
}

ul.tabs li:hover{
    cursor: pointer;
}

ul.tabs li hr {position: relative;width: 50%;top: 0px;left: 25%;visibility: hidden;border-top: 2px solid #F5A623;transition: 0.2s;}

ul.tabs li:hover hr {
    visibility: visible;
    border-top: 2px solid #F5A623;
    width: 100%;
    left: 0;
}

ul.tabs {
    width: 100%;
    height: 100%;
}

ul.tabs li {
    width: 40%;
    height: 100%;
}

ul.tabs li.active a{
    color: #F5A623;
}
ul.tabs li.active hr {
    visibility: visible;
    border-top: 2px solid #F5A623;
    width: 100%;
    left: 0;
}
/* css cho cart-content  */
.item-info .ten {
    text-decoration: none;
    color: #282828;
    display: block;
}

.item-price .remove {
    cursor: pointer;
    font-size: 18px;
    color: #bebebe;
}

.item-price .giacu {
    text-decoration: line-through;
    color: #b6b6b6;
}

.item-price {
    font-size: 14px;
}

.btn-spin {
    padding: 0 4px;
    height: 20px;
    width: 17px;
    background: #fefefe;
    color: black;
}

.btn-spin:hover {
    cursor: pointer;
}

.soluong .soluongsp {
    width: 32px;
    height: 20px;
    border: 1px solid #d1d1d1;
}

.soluong .input-number {
    width: 73px;
    height: 20px;
}

.item-caption .item-info .ten {
    font-size: 15px;
    margin-bottom: 5px;
}

.header-gio-hang span {
    color: #979797;
}

.header-gio-hang {
    font-size: 14px;
    font-weight: 400;
}

.cart-item a.img {
    width: 90px;
    height: auto;
    border: 1px solid  #c8c8c8;
}

.cart {
    border-right: 1px solid #ebebeb;
}

.group strong {
    font-size: 14px;
}

.tonggiatien .group .tongcong {
    font-size: 19px;
    color: red;
    font-weight: 600;
}

.tonggiatien .group p {margin: 0;font-size: 13px;}

.nutmuathem:hover {background: #F5A623;color: white;}

.nutmuathem {
    border: 1px solid #F5A623;
    color: #F5A623;
}
.option a {
    color: #F5A623;
    text-decoration: none;
}

.option2 p {
    margin-bottom: 2px!important;
}
.option label {
    font-size: 14px;
    margin: 0;
}

label.chuyenkhoan {
    width: 315px;
    position: absolute;
    left: 32px;
}

.option p {
    font-size: 14px;
    padding-left: 17px;
    margin-bottom: 10px;
}

#step3contentid .header {
    font-size: 15px;
    font-weight: 600;
}

/* het css cho cart-content  */
/* het css cho header form dangnhap dangky  */

/* css cho formdangnhap dangky*/
.form-signin {
    width: 100%;
  }

.form-signin .btn {
    font-size: 80%;
    letter-spacing: .1rem;
    font-weight: bold;
    padding: 1rem;
    transition: all 0.2s;
}

.form-label-group {
    position: relative;
    margin-bottom: 1rem;
}

.btn-google {
    color: white;
    background-color: #ea4335;
}

.btn-facebook {
    color: white;
    background-color: #3b5998;
}

.modal-body hr {
    position: relative;
    top: 1px;
}

.btn-signin:hover {
    color: black!important;
}



#formdangky .form-signin p {
    margin-bottom: 3px;
    font-size: 13px;
}

#formdangky .form-signin a {
    display: block;
    font-size: 13px;
}

label.error {
    display: inline-block;
    color:red;
    width: 300px;
    
    margin-top:5px;
    margin-bottom: 0;
    font-size: 13px;
}
/* het css cho form dang nhap dangky */

@media (max-width:767px){
    .navbar form .input-group{
        width: 100%!important;

    }

    .navbar ul li a.nav-link{
        margin-left:0.25rem!important;
    }

    .navbar ul li.account{
        border-top: 1px dashed #CF111A;
        border-bottom: 1px dashed #CF111A;
        padding-bottom: 0.5rem;
        margin-bottom: 0.25rem;
    }
    .navbar ul li.giohang{
        border-bottom: 1px dashed #CF111A;
        padding-bottom: 0.5rem;
        margin-right:8px;
    }
    .categorycontent{
        display: none;
    }

    .categoryheader:hover .categorycontent{
        display: none;
    }

    /* giohang  */
    .cart-content{
        padding-right: 16px;
    }

    .cart-steps{
        margin-left: 15px;
    }
}
/* het css cho cart-steps  */


</style>
  
     <!-- giao di???n gi??? h??ng  -->
    <section class="content my-3">
        <div class="container">
            <div class="cart-page bg-white">
                <div class="row">
                
                    <div class="col-md-8 cart">
                        <div class="bread ">
                     <div id="crumbs"><a class="colorgia" href="{{url('/')}}"> <i class="fa fa-home"> </i>  Trang ch??? </a> <i class="fa fa-angle-double-right colorgia"> </i> <a href="{{url('/gio-hang')}}" rel="category tag">Gi??? h??ng c???a b???n</a> </div>

      </div>
    @if(Session::get('customer_id'))
      Xin ch??o: {{Session::get('customer_name')}} --- <a href="{{url('/logout-checkout')}}">????ng xu???t</a>
    @endif
        @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @elseif(session()->has('error'))
                     <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
      <div class="table-responsive cart_info">

        <form action="{{url('/update-cart')}}" method="POST">
          @csrf
        <table class="table table-condensed">
          <thead>
            <tr class="cart_menu">
              <td class="image">H??nh ???nh</td>
              <td class="description">T??n s???n ph???m</td>
              <td class="price">Gi?? s???n ph???m</td>
              <td class="quantity">S??? l?????ng</td>
              <td class="total">Th??nh ti???n</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            @if(Session::get('cart')==true)
            @php
                $total = 0;
            @endphp
            @foreach(Session::get('cart') as $key => $cart)
              @php
                $subtotal = $cart['product_price']*$cart['product_qty'];
                $total+=$subtotal;
              @endphp

            <tr>
              <td class="cart_product">
                <img src="{{asset('public/uploads/product/'.$cart['product_image'])}}" width="90" alt="{{$cart['product_name']}}" />
              </td>
              <td class="cart_description">
                <h4><a href=""></a></h4>
                <p>{{$cart['product_name']}}</p>
              </td>
              <td class="cart_price">
                <p>{{number_format($cart['product_price'],0,',','.')}}??</p>
              </td>
              <td class="cart_quantity">
                <div class="cart_quantity_button">
                
                
                  <input class="cart_quantity" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}"  >
                
                  
                </div>
              </td>
              <td class="cart_total">
                <p class="cart_total_price">
                  {{number_format($subtotal,0,',','.')}}??
                  
                </p>
              </td>
              <td class="cart_delete">
                <a class="cart_quantity_delete" href="{{url('/del-product/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
              </td>
            </tr>
            
            @endforeach
            <tr>
              <td><input type="submit" value="C???p nh???t gi??? h??ng" name="update_qty" class="check_out btn btn-warning btn-sm"></td>
                         
              <td><a class="btn btn-primary check_out" href="{{url('/del-all-product')}}">X??a t???t c???</a></td>
             

              <td colspan="2">
             <span style="font-size: 16px;font-weight: bold;float: right;">T???ng ti???n :<span>{{number_format($total,0,',','.')}}??</span></span>
           
              
            </td>
            </tr>
            @else 
            <tr>
              <td colspan="5"><center>
              @php 
              echo 'L??m ??n th??m s???n ph???m v??o gi??? h??ng';
              @endphp
              </center></td>
            </tr>
            @endif
          </tbody>

          

        

          

        </table>
        </form>
          <tr>
            <td >
                            <form method="POST" action="{{url('/check-coupon')}}">
                                @csrf
                                    <input type="text" class="form-control" name="coupon" placeholder="Nh???p coupon"><br>
                                    <input type="submit" class="btn btn-default check_coupon" name="check_coupon" value="T??nh m?? gi???m gi??">
                                
                                </form>
                                </td>
                                </tr>


      </div>
                    </div>

                    <!-- giao di???n ph???n thanh to??n n???m b??n ph???i  -->
                    <div class="col-md-4 cart-steps pl-0">
                        <div id="cart-steps-accordion" role="tablist" aria-multiselectable="true">
                            @if(!Session::get('customer_id'))
                            <!-- b?????c s??? 1: ????ng nh???p ho???c ????ng k?? -->
                            <div class="card" style="margin:0">
                                <div class="card-header cardheader" role="tab" id="step1header">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#cart-steps-accordion"
                                            href="#step1contentid" aria-expanded="true" aria-controls="step1contentid"
                                            class="text-uppercase header"><span class="steps">1</span>
                                            <span class="label">????NG NH???P</span>
                                            <i class="fa fa-chevron-right float-right"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="step1contentid" class="collapse in" role="tabpanel"
                                    aria-labelledby="step1header" class="stepscontent">
                                    <div class="card-body p-0">
                                        <nav>
                                            <style type="text/css">
                                                .form-label-group {
                                                position: relative;
                                                margin: 1rem;
                                            }
                                            </style>
                                            <div class="nav nav-tabs dangnhap-dangky" id="nav-tab" role="tablist">
                                                <a style="margin:0" class="nav-item nav-link active text-center text-uppercase"
                                                    id="nav-dangnhap-tab" data-toggle="tab" href="#nav-dangnhap"
                                                    role="tab" aria-controls="nav-dangnhap" aria-selected="true">????ng
                                                    nh???p</a>
                                                <a class="nav-item nav-link text-center text-uppercase"
                                                    id="nav-dangky-tab" data-toggle="tab" href="#nav-dangky" role="tab"
                                                    aria-controls="nav-dangky" aria-selected="false">????ng k??</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-dangnhap" role="tabpanel"
                                                aria-labelledby="nav-dangnhap-tab">
                                                <form id="form-signin-cart" method="POST" action="{{url('login-customer')}}" class="form-signin mt-2">
                                                    @csrf
                                                    <div class="form-label-group">
                                                        <input type="email" id="inputEmail" class="form-control"
                                                            placeholder="Nh???p ?????a ch??? email" name="email_account" required
                                                            autofocus>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" id="inputPassword" class="form-control"
                                                            placeholder="M???t kh???u" name="password_account" required>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <a href="#" class="float-right text-decoration-none"
                                                            style="color: #F5A623">Qu??n m???t kh???u</a>
                                                    </div>
                                                    <style type="text/css">
                                                        a.btn.btn-primary.btn-sm.btn-login-fb {
                                                                width: 100%;
                                                                margin:5px 0;
                                                            }
                                                        a.btn.btn-danger.btn-sm.btn-login-gg {
                                                                width: 100%;
                                                            }
                                                    </style>
                                                    <button
                                                        class="btn btn-lg btn-block btn-signin text-uppercase text-white"
                                                        type="submit" style="background: #F5A623">????ng nh???p</button>

                                                  
                                                    <a class="btn btn-primary btn-sm btn-login-fb" width="100%" href="{{url('/login-facebook')}}">????ng nh???p Facebook</a>
                                                    <a class="btn btn-danger btn-sm  btn-login-gg" href="{{url('/login-google')}}">????ng nh???p Google</a> 
                                                    
                                                    {{-- <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p> --}}
                                                    {{-- <button class="btn btn-lg btn-google btn-block text-uppercase"
                                                        type="submit"><i class="fab fa-google mr-2"></i> ????ng nh???p b???ng
                                                        Google</button>

                                                    <button class="btn btn-lg btn-facebook btn-block text-uppercase"
                                                        type="submit"><i class="fab fa-facebook-f mr-2"></i> ????ng nh???p
                                                        b???ng Facebook</button> --}}
                                                </form>
                                             {{--    <div class="btnduoicung" style="padding: 0 15px 15px 15px;">
                                                    <button
                                                        class="btn btn-lg btn-block btn-shopping-without-signup text-uppercase text-white"
                                                        style="background: #F5A623">Mua h??ng kh??ng c???n ????ng k??</button>
                                                </div> --}}
                                            </div>
                                            <div class="tab-pane fade" id="nav-dangky" role="tabpanel"
                                                aria-labelledby="nav-dangky-tab">
                                                <form id="form-signup-cart" class="form-signin mt-2" action="{{url('/add-customer')}}" method="POST">
                                                    @csrf
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputName" class="form-control"
                                                            placeholder="Nh???p h??? v?? t??n" name="customer_name" required autofocus>
                                                    </div>
                                                     <div class="form-label-group">
                                                        <input type="text" class="form-control" placeholder="Nh???p ?????a ch???" name="customer_address"
                                                            required>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputPhone" class="form-control"
                                                            placeholder="Nh???p s??? ??i???n tho???i" name="customer_phone" required>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="email" id="inputEmail" class="form-control"
                                                            placeholder="Nh???p ?????a ch??? email" name="customer_email" required>
                                                    </div>

                                                    <div class="form-label-group">
                                                        <input type="password" id="inputPassword" class="form-control"
                                                            placeholder="Nh???p m???t kh???u" name="customer_password" required>
                                                    </div>
                                                   
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <p class="text-center">B???ng vi???c ????ng k??, b???n ???? ?????ng ?? v???i
                                                            DealBook v???</p>
                                                        <a href="#" class="text-decoration-none text-center"
                                                            style="color: #F5A623">??i???u kho???n d???ch
                                                            v??? & Ch??nh s??ch b???o m???t</a>
                                                    </div>
                                                    <hr class="mt-3 mb-2">
                                                    <button
                                                        class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3"
                                                        type="submit" style="background: #F5A623">????ng k??</button>

                                                </form>
                                                
                                              {{--   <div class="btnduoicung" style="padding: 0 15px 15px 15px;">
                                                    <button
                                                        class="btn btn-lg btn-block btn-shopping-without-signup text-uppercase text-white"
                                                        style="background: #F5A623">Mua h??ng kh??ng c???n ????ng k??</button>
                                                </div> --}}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                            <!-- b?????c s??? 2: nh???p ?????a ch??? giao h??ng  -->
                    
                            <div class="card" style="margin:0">
                                <div class="card-header" role="tab" id="step2header">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#cart-steps-accordion"
                                            href="#step2contentid" aria-expanded="true" aria-controls="step2contentid"
                                            class="text-uppercase header"><span class="steps">2</span>
                                            <span class="label">?????a ch??? giao h??ng</span>
                                            <i class="fa fa-chevron-right float-right"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="step2contentid" class="collapse in" role="tabpanel"
                                    aria-labelledby="step2header" class="stepscontent">
                                    <div class="card-body">
                                        <form class="form-diachigiaohang">
                                            <div class="form-label-group">
                                                <input type="text" id="inputName" class="form-control shipping_name"
                                                    placeholder="Nh???p h??? v?? t??n" name="shipping_name"  required autofocus>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="text" id="inputPhone" class="form-control shipping_phone"
                                                    placeholder="Nh???p s??? ??i???n tho???i" name="shipping_phone"  required>
                                            </div>
                                            <div class="form-label-group">
                                               <input type="hidden" name="order_fee" class="order_fee" value="10000">
                                            </div>
                                            <div class="form-label-group">
                                               <input type="hidden" name="order_coupon" class="order_coupon" value="no">
                                            </div>
                                            
                                            <div class="form-label-group">
                                                <input type="email" id="inputEmail" class="form-control shipping_email"
                                                    placeholder="Nh???p ?????a ch??? email" name="shipping_email" required>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="text" id="inputAddress" class="form-control shipping_address"
                                                    placeholder="Nh???p ?????a ch??? giao h??ng" name="shipping_address" required>
                                            </div>
                                            <div class="form-label-group">
                                                <textarea type="text" id="inputNote" required class="form-control shipping_notes"
                                                    placeholder="Nh???p ghi ch?? (N???u c??)" name="shipping_notes" ></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <!-- b?????c 3: thanh to??n ?????t mua  -->
                                <div class="card" style="margin:0;">
                                    <div class="card-header" role="tab" id="step3header">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#cart-steps-accordion"
                                                href="#step3contentid" aria-expanded="true"
                                                aria-controls="step3contentid" class="text-uppercase header"><span
                                                    class="steps">3</span>
                                                <span class="label">Thanh to??n ?????t mua</span>
                                                <i class="fa fa-chevron-right float-right"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="step3contentid" class="collapse in" role="tabpanel"
                                        aria-labelledby="step3header" class="stepscontent">
                                        <div class="card-body" style="padding: 15px;">
                                            <div class="goigiaohang">
                                                <h6 class="header text-uppercase">Ch???n g??i giao h??ng</h6>
                                                <div class="option">
                                                    <input type="radio" name="shipping_method" value="1" class="shipping_method" id="ghtc" checked>
                                                    <label for="ghtc">Giao h??ng ti??u chu???n</label>
                                                    <p>T??? 1-3 ng??y t???i TP. H??? Ch?? Minh; t??? 3-5 ng??y ?????i v???i c??c T???nh /
                                                        Th??nh kh??c</p>
                                                </div>
                                                <div class="option">
                                                    <input type="radio" name="shipping_method" value="2" class="shipping_method" id="ghn">
                                                    <label for="ghn">Giao h??ng nhanh</label>
                                                    <p>1 ng??y t???i TP. H??? Ch?? Minh; t??? 2-3 ng??y ?????i v???i c??c T???nh / Th??nh
                                                        kh??c</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="pttt">
                                                <h6 class="header text-uppercase">Ch???n ph????ng th???c thanh to??n</h6>
                                                <div class="option mb-2">
                                                    <input type="radio" name="shipping_payment" value="1" class="shipping_payment" id="cod" checked>
                                                    <label for="cod">Thanh to??n b???ng ti???n m???t khi nh???n h??ng</label>
                                                </div>
                                                <div class="option option2">
                                                    <input type="radio" name="shipping_payment" id="atm" value="2" class="shipping_payment">
                                                    <label for="atm" class="chuyenkhoan">Thanh to??n chuy???n kho???n tr?????c
                                                        qua Th??? ATM/Internet Banking</label>
                                                    <p class="mt-4">- Qu?? kh??ch ch??? chuy???n kho???n khi ???????c x??c nh???n c?? ?????
                                                        s??ch qua ??i???n tho???i t??? DealBook.</p>
                                                    <p>- Th???i gian chuy???n kho???n l?? trong t???i ??a 2 ng??y t??? khi c?? x??c
                                                        nh???n ????? s??ch.</p>
                                                    <p>- N???i dung chuy???n kho???n c???n ghi: <a href="#">[M?? ????n h??ng]</a> ;
                                                        ho???c <a href="#">[s??? ??i???n tho???i d??ng ?????t h??ng]</a> </p>
                                                    <p>- Xem th??ng tin chuy???n kho???n c???a NetaBooks <a
                                                            href="phuong-thuc-thanh-toan.html">t???i ????y</a> </p>
                                                </div>
                                            </div>
                                            <hr>
                                            @if(Session::get('customer_id') && Session::get('cart'))
                                            <button class="send_order btn btn-lg btn-block text-uppercase text-white"
                                                style="background: #F5A623">?????t mua</button>
                                            @endif
                                            <p class="text-center note-before-checkout">(Vui l??ng ki???m tra l???i ????n h??ng
                                                tr?????c khi ?????t Mua)</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                    <!-- het div cart-steps  -->
                </div>
                <!-- het row  -->
            </div>
            <!-- het cart-page  -->
        </div>
        <!-- het container  -->
    </section>
    <!-- het khoi content  -->


@endsection