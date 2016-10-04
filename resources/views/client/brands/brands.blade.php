@extends('layouts.client')
@section('content')
<!--product content-->
<div class="product">
    <div class="container">
        <div class="col-md-3 product-price">
          <div class=" rsidebar span_1_of_left">
            <div class="of-left">
              <h3 class="cate">Categorien {{$type->name}}</h3>
            </div>
            <ul class="menu">
              @foreach ($data['brands'] as $brand)
                {{-- Check if the brand has any relational devices --}}
                @if(countDevicesOnType($brand->devices, $type->id) > 0)
                  <li class="item$x"><a href="#">{{$brand->name}}</a>
                    <ul class="cute">
                      @foreach ($brand->devices as $device)
                      <li class="subitem"><a href="{{ url('/toestellen/' . $device->id) }}">{{$device->full_name}}  </a></li>
                      @endforeach
                    </ul>
                  </li>
                @endif
              @endforeach
            </ul>
          </div>
          <!--initiate accordion-->
          <script type="text/javascript">
              $(function() {
                  var menu_ul = $('.menu > li > ul'),
                      menu_a = $('.menu > li > a');
                  menu_ul.hide();
                  menu_a.click(function(e) {
                      e.preventDefault();
                      if (!$(this).hasClass('active')) {
                          menu_a.removeClass('active');
                          menu_ul.filter(':visible').slideUp('normal');
                          $(this).addClass('active').next().stop(true, true).slideDown('normal');
                      } else {
                          $(this).removeClass('active');
                          $(this).next().stop(true, true).slideUp('normal');
                      }
                  });
              });
          </script>
          <!---->
          <div class="product-middle">
            <div class="fit-top">
              <h6 class="shop-top">Afspraak maken?</h6>
              <a href="#" class="shop-now">BEL NU</a>
              <div class="clearfix"> </div>
            </div>
          </div>
          <div class=" per1">
            <a href="#"><img class="img-responsive" src="{{ asset('images/pro.jpg') }}" alt="">
              <div class="six1">
                <h4>REPARATIE</h4>
                <span>30</span>
                <p>MINUTEN</p>
              </div>
            </a>
          </div>
        </div> {{-- /.col-md-3 product-price --}}
        <div class="col-md-9 product1">
          {{-- <div class=" bottom-product"> --}}
          @foreach ($data['brands'] as $brand)
            {{-- Check if the brand has any relational devices --}}
            @if(countDevicesOnType($brand->devices, $type->id) > 0)
              <div class="col-sm-4 bottom-cd simpleCart_shelfItem">
                <div class="product-at">
                  <a href="?url=">
                    <img class="img-responsive productImage" src="{{ asset('images/logos/').'/'.$brand->logo }}" alt="">
                  </a>
                </div>
                <p class="tun"></p>
                <a href="{{ url('/merken/') }}" class="item_add">
                  <p class="number item_price">{{$brand->name}}</p>
                </a>
              </div>
            @endif
          @endforeach
          {{-- </div> --}}
          {{-- /.bottom-product --}}
        </div>{{-- /.col-md-9 product1 --}}
        <div class="clearfix"> </div>
        <!--
        <nav class="in">
            <ul class="pagination">
                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2 <span class="sr-only"></span></a></li>
                <li><a href="#">3 <span class="sr-only"></span></a></li>
                <li><a href="#">4 <span class="sr-only"></span></a></li>
                <li><a href="#">5 <span class="sr-only"></span></a></li>
                <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
            </ul>
        </nav>
        -->
    </div>{{-- /.container --}}
</div>{{-- /.product --}}
<!--//content-->
@endsection
