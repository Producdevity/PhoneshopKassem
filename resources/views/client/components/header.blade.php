<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
          <div class="header-left">
            <ul>
              <li><a href="tel:<?php echo "telNr"; ?>">Telefoon: <?php echo "telNr"; ?></a></li>
              <li><a>Krijgt u niemand aan de lijn? Wij bellen u altijd terug</a></li>
              <li><a href="mailto: <?php echo "mail"; ?>">Mail: <?php echo "mail"; ?></a></li>
              <li><a>3 maanden garantie</a></li>
            </ul>
            <div class="cart box_1">
              <a href="#fblink">
                <h3> <div class="total"></div>
                  <img src="{{ asset('images/fb-icon.png') }}" alt="fb icon"/>
                </h3>
              </a>
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="clearfix"> </div>
        </div>{{-- /.container --}}
    </div>{{-- /.header-top --}}
    <div class="container">
        <div class="head-top">
            <div class="logo">
              <a href="?url"><img src="{{ asset('images/logos/phoneshop-kassem-logo.png') }}" alt="phoneshopkassem logo"></a>
            </div>
            <div class="h_menu4">
                <ul class="memenu skyblue">
                    <li class="{{ isActiveRoute('/') }}"><a class="color8" href="{{ url('/') }}">Home</a></li>
                    <li class="{{ isActiveRoute('telefoons') }}"><a class="color2" href="{{ url('/merken/type/1') }}">Telefoon</a>
                      <div class="mepanel">
                        <div class="row">
                          <div class="col1">
                            <div class="h_nav">
                              <h4>Telefoons</h4>
                              <ul>
                                <li><a href="?url=details&device_id=deviceid">fullname</a></li>
                                <li><a href="?url=details&device_id=deviceid">fullname</a></li>
                                <li><a href="?url=details&device_id=deviceid">fullname</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col1">
                            <div class="h_nav">
                              <ul>
                                <li><a href="?url=details&device_id=deviceid">fullname</a></li>
                                <li><a href="?url=details&device_id=deviceid">fullname</a></li>
                                <li><a href="?url=details&device_id=deviceid">fullname</a></li>
                                <li><a href="?url=details&device_id=deviceid">fullname</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col1">
                            <div class="h_nav">
                              <h4>Merken</h4>
                              <ul>
                                @foreach ($data['brands'] as $brand)
                                  <li><a href="{{ url('/toestellen/merk/'.$brand->id.'/type/1') }}">{{$brand->name}}</a></li>
                                @endforeach
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="{{ isActiveRoute('tablets') }}"><a class="color2" href="{{ url('/merken/type/2') }}">Tablet</a>
                      <div class="mepanel">
                        <div class="row">
                          <div class="col1">
                            <div class="h_nav">
                              <h4>Tablets</h4>
                              <ul>
                                <li><a href="?url=details&device_id='.$device['id'].'">' . $fullName . '</a></li>
                                <li><a href="?url=details&device_id='.$device['id'].'">' . $fullName . '</a></li>
                                <li><a href="?url=details&device_id='.$device['id'].'">' . $fullName . '</a></li>
                                <li><a href="?url=details&device_id='.$device['id'].'">' . $fullName . '</a></li>
                                <li><a href="?url=details&device_id='.$device['id'].'">' . $fullName . '</a></li>
                                <li><a href="?url=details&device_id='.$device['id'].'">' . $fullName . '</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col1">
                            <div class="h_nav">
                              <ul>
                                <li><a href="?url=details&device_id=deviceid">fullname</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col1">
                            <div class="h_nav">
                              <h4>Merken</h4>
                              <ul>
                                @foreach ($data['brands'] as $brand)
                                  <li><a href="{{ url('/toestellen/merk/'.$brand->id.'/type/2') }}">{{$brand->name}}</a></li>
                                @endforeach
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="{{ isActiveRoute('informatie') }}"><a class="color1" href="{{ url('/informatie') }}">Informatie</a></li>
                    <li class="{{ isActiveRoute('contact') }}"><a class="color6" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div><!-- /.container -->
</div><!--/.header-->
