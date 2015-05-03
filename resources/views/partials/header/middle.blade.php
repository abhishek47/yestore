<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="{{ asset('images/home/logo2.png') }}" alt="" /></a>
                </div>
                <!--   <div class="btn-group pull-right">

                     <div class="btn-group">
                          <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                              IND
                              <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                               <li><a href="#">Canada</a></li>
                               <li><a href="#">UK</a></li>
                           </ul>
                      </div>

                      <div class="btn-group">
                          <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                              RUPEES
                              <span class="caret"></span>
                          </button>
                         <ul class="dropdown-menu">
                              <li><a href="#">Canada</a></li>
                              <li><a href="#">UK</a></li>
                          </ul>
                      </div>

                  </div> -->
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                        <li><a href="#"><i class="fa fa-align-justify"></i> Compare</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        @if (Auth::guest())
                           <li><a href="{{ url('/auth/login') }}"><i class="fa fa-lock"></i> Login</a></li>
                           <li><a href="{{ url('/auth/register') }}"><i class="fa fa-lock"></i> Register</a></li>
                        @else
                           <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->