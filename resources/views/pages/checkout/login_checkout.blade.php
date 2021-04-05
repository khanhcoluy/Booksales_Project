@extends('layout')
@section('content')
	<style type="text/css">
		/*************************
*******login page CSS******
**************************/

#form {
  display: block;
 
 
  overflow: hidden;
}

.login-form {

}

.signup-form {

}

.login-form h2, .signup-form h2 {
  color: #696763;
  font-family: 'Roboto', sans-serif;
  font-size: 20px;
  font-weight: 300;
  margin-bottom: 30px;
}


.login-form form input, .signup-form form input {
  background: #2db2c7;
  border: medium none;
  color: #696763;
  display: block;
  font-family: 'Roboto', sans-serif;
  font-size: 14px;
  font-weight: 300;
  height: 40px;
  margin-bottom: 10px;
  outline: medium none;
  padding-left: 10px;
  width: 100%;
}

.login-form form span{
  line-height: 25px;
}

.login-form form span input {
  width: 15px;
  float: left;
  height: 15px;
  margin-right: 5px;
}

.login-form form button {
  margin-top: 23px;
}

.login-form form button, .signup-form form button {
 
  border: medium none;
  border-radius: 0;
  color: #FFFFFF;
  display: block;
  font-family: 'Roboto', sans-serif;
  padding: 6px 25px;
}

.login-form label{

}


.login-form label input {
  border: medium none;
  display: inline-block;
  height: 0;
  margin-bottom: 0;
  outline: medium none;
  padding-left: 0;
}

	</style>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập tài khoản</h2>
						<form action="{{URL::to('/login-customer')}}" method="POST">
							{{csrf_field()}}
							<input type="text" name="email_account" placeholder="Tài khoản" />
							<input type="password" name="password_account" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Ghi nhớ đăng nhập
							</span>
							<button type="submit" class="btn btn-success">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h4 class="or">Hoặc</h4>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký</h2>
						<form action="{{URL::to('/add-customer')}}" method="POST">
							{{ csrf_field() }}
							<input type="text" name="customer_name" placeholder="Họ và tên"/>
							<input type="text" name="customer_address" placeholder="Thông tin địa chỉ"/>
							<input type="email" name="customer_email" placeholder="Địa chỉ email"/>
							<input type="password" name="customer_password" placeholder="Mật khẩu"/>
							<input type="text" name="customer_phone" placeholder="Phone"/>
							<button type="submit" class="btn btn-primary">Đăng ký</button>
						</form>

					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	<br>

@endsection