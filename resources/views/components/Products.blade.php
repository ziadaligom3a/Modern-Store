@props(['main_name','name','color' => null])
<div  class="products" id="categories">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>{{ __("OUR") }} {{ last(request()->segments()) ? __(last(request()->segments())) : __('Categories') }}</h2>
                @if ($message = Session::get('message'))
                <div class="alert alert-danger alert-block">
                   <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                </div>
                @endif
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12">
             <div class="our_products" style="background-color:{{ $color }}">
                <div class="row">
                   @foreach($name->product as $n)
                   @if(!Route::is('category') && !Route::is('Search'))
                   <div class="col-md-4 margin_bottom1">
                      <div class="product_box">
                         <a href="/categories/{{ $n->slug }}">
                           <figure><img src="{{ $n->img }}" alt="#"></figure>
                           <h3>{{ $n->name }}</h3></a>
                        </div>
                     </div>
                   @else:
                   <div class="card">

                     <div class="imgBox">
                       <img src="{{ $n->img }}" alt="mouse corsair" class="mouse">
                     </div>
                   
                     <div class="contentBox">
                        <h3 class="animate-charcter">{{ $n->name }}</h3>
                        <h3 class="animate-charcter">{{ $n->price }} EGP</h3>
                        <a href="/Product/{{ $n->id }}" class="buy">Buy Now</a>
                     </div>
                     
                  </div>
                  @endif
                  @endforeach

               </div>
             </div>
            </div>
         </div>
    </div>
   </div>
