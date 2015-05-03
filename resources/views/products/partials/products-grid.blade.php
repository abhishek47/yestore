<div class="features_items"><!--features_items-->
    <h2 class="title text-center">{{ $title }} Items</h2>


    @for ($i = 0; $i < 6; $i++)
      @include ('products.partials.product')
    @endfor



</div><!--features_items-->