@extends('layout')
@section('content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				  <li class="active">Thanh toán giỏ hàng</li>
				</ol>
			</div>

		
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
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
							@if(Session::get('customer_id'))
								Xin chào : <strong>{{Session::get('customer_name')}}</strong> ------ <a href="{{url('/logout-checkout')}}"><span style="color:blue;">Đăng xuất tài khoản</span></a>
							@endif
							
							
							<form action="{{url('/update-cart')}}" method="POST">
								@csrf
							<table class="table table-condensed">
								<thead>
									<tr class="cart_menu">
										<td class="image">Hình ảnh</td>
										<td class="description">Tên sản phẩm</td>
										<td class="price">Giá sản phẩm</td>
										<td class="quantity">Số lượng</td>
										<td class="total">Thành tiền</td>
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
											<p>{{number_format($cart['product_price'],0,',','.')}}đ</p>
										</td>
										<td class="cart_quantity">
											<div class="cart_quantity_button">
											
											
												<input class="cart_quantity" disabled type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}"  >
											
												
											</div>
										</td>
										<td class="cart_total">
											<p class="cart_total_price">
												{{number_format($subtotal,0,',','.')}}đ
												
											</p>
										</td>
										<td class="cart_delete">
											<a class="cart_quantity_delete" href="{{url('/del-product/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
										</td>
									</tr>
									
									@endforeach
									<tr>
										
	
										<td colspan="5">
										<span style="font-size: 16px;font-weight: bold;float: right;">Tổng tiền :<span>{{number_format($total,0,',','.')}}đ</span></span>
										
									</td>
									</tr>
									@else 
									<tr>
										<td colspan="5"><center>
										@php 
										echo 'Làm ơn thêm sản phẩm vào giỏ hàng';
										@endphp
										</center></td>
									</tr>
									@endif
								</tbody>

								

							</form>
									

							</table>
							
						</div>
						<form method="POST">
									@csrf
									<input type="hidden" name="shipping_email" class="shipping_email" value="{{Session::get('customer_email')}}">
									<input type="hidden" name="shipping_name" class="shipping_name" value="{{Session::get('customer_name')}}">
									<input type="hidden" name="shipping_address" class="shipping_address" value="{{Session::get('customer_address')}}">
									<input type="hidden" name="shipping_phone" class="shipping_phone" value="{{Session::get('customer_phone')}}">
									
									
									@if(Session::get('fee'))
										<input type="hidden" name="order_fee" class="order_fee" value="{{Session::get('fee')}}">
									@else 
										<input type="hidden" name="order_fee" class="order_fee" value="10000">
									@endif

									@if(Session::get('coupon'))
										@foreach(Session::get('coupon') as $key => $cou)
											<input type="hidden" name="order_coupon" class="order_coupon" value="{{$cou['coupon_code']}}">
										@endforeach
									@else 
										<input type="hidden" name="order_coupon" class="order_coupon" value="no">
									@endif
									@if(Session::get('cart'))
									<input type="button" value="Xác nhận thanh toán giỏ hàng này" name="send_order" class="btn btn-success btn-sm send_order">
									@endif

								</form>
								<br>
					</div>
									
				</div>
			</div>
		

			
			
		</div>
	</section> <!--/#cart_items-->

@endsection