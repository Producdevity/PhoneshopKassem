@extends('layouts.client') @section('content')
<!--product content-->
<div class="product">
    <div class="container">
        <div class="check">
            <h1>Reparaties {{$device->full_name}}</h1>
            <div class="col-md-9 cart-items">
            @if (count($device->repairs) > 0)
              @foreach ($device->repairs as $repair)
                <div class="cart-header">
                 <div class="cart-sec simpleCart_shelfItem">
                    <div class="cart-item cyc">
                       <img src="{{ asset('images/repair/batterij.png') }}" class="img-responsive" alt=""/>
                    </div>
                     <div class="cart-item-info">
                    <h3><a href="#">{{$repair->name}}</a><span>Model: {{$device->full_name}}</span></h3>
                       <div class="delivery">
                         <h2 style="float: right;">&euro; {{$repair->pivot->price}}</h2>
                         <div class="clearfix"></div>
                      </div>
                     </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
              @endforeach
            @else
              <p>Voor dit toestel zijn er op het moment geen reparaties beschikbaar op de website, de kans is heel groot dat ons team nog steeds in staat is u de reparatie te leveren. Voor extra informatie kunt u ons bellen</p>
            @endif
            </div> {{-- /.col-md-3 col-md-9 cart-items --}}
            <div class="col-md-3 cart-total">
              <a class="continue" href="{{ url('/toestellen/merk/'.$device->brand->id.'/type/'.$device->type->id) }}">Bekijk andere toestellen</a>
              <div class="price-details">
                <h3>Toestel:</h3>
                <h3>{{$device->full_name}}</h3>
                <div class="clearfix"></div>
              </div>
              <ul class="total_price"></ul>
              <div class="clearfix"></div>
              <a class="order" href="mailto:info@phoneshopkassem.nl">Mail ons voor vragen</a>
              <p>Staat uw reparatie er niet bij, dan regelen wij dat telefonisch met u</p><br />
            </div>{{-- /.col-md-3 cart-total --}}
            <div class="clearfix"></div>
        </div>{{-- /.check --}}
    </div>{{-- /.container --}}
</div>{{-- /.product --}}
<!--//content-->

@endsection
