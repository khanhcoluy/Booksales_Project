  <!-- noi dung danh muc sach(categories) + banner slider -->
    <section class="header bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="margin-right: -15px;">
                    <!-- CATEGORIES -->
                    <div class="categorycontent">
                        <ul>
                            @foreach($category as $key => $cate_parent)   
                                    @if($cate_parent->category_parent==0)
                            <li>

                             <a href="{{url('danh-muc/'.$cate_parent->slug_category_product)}}"> {{$cate_parent->category_name}}</a><i class="fa fa-chevron-right float-right">
                              
                             </i>
                                <ul> 
                              
                                    <li class="liheader">
                                        <a href="{{url('danh-muc/'.$cate_parent->slug_category_product)}}" class="header text-uppercase">{{$cate_parent->category_name}}</a>
                                        </li>
                                  
                                    <div class="content trai">
                                     @foreach($category as $key => $cate) 
                                      @if($cate->category_parent==$cate_parent->category_id)     
                                        <li><a href="{{url('danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></li>
                                        @endif
                                        @endforeach
                                        
                                    </div>
                                    {{-- <div class="content phai">
                                        <li><a href="#">Nhân Vật - Bài Học Kinh Doanh</a></li>
                                        <li><a href="#">Sách Quản Trị - Lãnh Đạo</a></li>
                                        <li><a href="#">Sách Kinh Tế Học</a></li>
                                        <li><a href="#">Sách Chứng Khoán - Bất Động Sản - Đầu Tư</a></li>
                                        <li><a href="#">Sách Marketing - Bán Hàng</a></li>
                                    </div> --}}
                                </ul>
                            </li>
                              @endif
                                @endforeach

                         
                          
                        </ul>
                    </div>
                </div>
                <!-- banner slider  -->
                <div class="col-md-9 px-0">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="nutcarousel carousel-indicators rounded-circle">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#"><img src="{{asset('public/frontend/images/banner-sach-moi.webp')}}" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="First slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="{{asset('public/frontend/images/banner-beethoven.jpg')}}" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="Second slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="{{asset('public/frontend/images/neu-toi-biet-duoc-khi-20-full-banner.jpg')}}" class="img-fluid"
                                        style="height: 386px;" alt="Third slide"></a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>