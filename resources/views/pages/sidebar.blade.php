 <div class="sidebar col-xs-12 col-sm-12 col-md-3">
                  <div class="category">
                     <div class="title">
                        <span> Danh mục Sản phẩm</span>
                     </div>
                     <nav id="menu" class="menu-cat icon_i">
                        <ul class="">
                           @foreach($category as $key => $cate)
                           <li id="menu-item-497" class="icon1 menu-item menu-item-type-taxonomy menu-item-object-product_category current-menu-item menu-item-497">
                           
                                 <a href="{{url('danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a>
                            
                           </li>
                           @endforeach
                          
                        </ul>
                     </nav>
                  </div>
                
                
               </div>
               <!--/sidebar -->