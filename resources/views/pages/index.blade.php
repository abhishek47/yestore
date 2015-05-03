@extends('app')

@section('content')



<section id="advertisement">
    <div class="container">
        <img src="../images/shop/advertisement.jpg" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">

                    @include ('partials.categories')

                    @include ('partials.brands')


                    <!--          	<div class="price-range">
                      <h2>Price Range</h2>
                      <div class="well text-center">
                           <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                           <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                      </div>
                  </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="../images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                @include ('products.partials.products-grid', ['title' => 'Featured '])

                @include ('products.partials.products-grid', ['title' => 'Best Selling'])
            </div>
        </div>
    </div>
</section>



@endsection