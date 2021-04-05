@extends('layout')
@section('content')
   <!-- khoi sach moi  -->
      
    <section class="_1khoi sachmoi bg-white">
        <div class="container">
            @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @elseif(session()->has('error'))
                     <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h1 class="header text-uppercase" style="font-weight: 400;">Đơn hàng đã đặt</h1>
                     
                    </div>
                </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                  Liệt kê đơn hàng
                </div>
   
                    <div class="table-responsive">
                                      <?php
                                            $message = Session::get('message');
                                            if($message){
                                                echo '<span class="text-alert">'.$message.'</span>';
                                                Session::put('message',null);
                                            }
                                            ?>
                      <table class="table table-striped b-t b-light">
                        <thead>
                          <tr>
                           
                            <th>Thứ tự</th>
                            <th>Mã đơn hàng</th>
                            <th>Ngày tháng đặt hàng</th>
                            <th>Tình trạng đơn hàng</th>

                            <th style="width:30px;"></th>
                          </tr>
                        </thead>
                        <tbody>
                          @php 
                          $i = 0;
                          @endphp
                          @foreach($order as $key => $ord)
                            @php 
                            $i++;
                            @endphp
                          <tr>
                            <td><i>{{$i}}</i></label></td>
                            <td>{{ $ord->order_code }}</td>
                            <td>{{ $ord->created_at }}</td>
                            <td>@if($ord->order_status==1)
                                    Đơn hàng mới
                                @else 
                                    Đã xử lý
                                @endif
                            </td>
                           
                           
                            <td>
                              <a href="{{URL::to('/order-view-tracking/'.$ord->order_code)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-eye text-success text-active"></i></a>
                                
                              @if($ord->order_status==1)
                              <a onclick="return confirm('Bạn muốn hủy đơn hàng này?')" href="{{URL::to('/delete-order-tracking/'.$ord->order_code)}}" class="active styling-edit" ui-toggle-class="">
                                Hủy đơn hàng
                              </a>
                              @else 
                                <p class="text text-primary">Đơn hàng đã xử lý</p>
                              @endif

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                   
                  </div>
            </div>
           
        </div>
    </section>
@endsection