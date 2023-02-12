@extends('layouts.layout')

@section('content')
<div class="container my-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb pl-0">
        <li class="breadcrumb-item"><a href="/categories">Category</a></li>
        <li class="breadcrumb-item active" aria-current="page">
          Single Product
        </li>
      </ol>
    </nav>
  </div>
  <!-- End Breadcrumbs -->
  <!-- Single Product -->
  <section class="product">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <figure class="figure">
            <img
              src="{{asset('/assets/products/single-product.png')}}"
              class="figure-img img-fluid"
            />
            <figcaption
              class="figure-caption product-thumbnail-container d-flex justify-content-between"
            >
              <a href="">
                <img src="{{asset('/assets/products/pic_small.png')}}" alt="" />
              </a>
              <a href="">
                <img src="{{asset('/assets/products/pic_small-1.png')}}" alt="" />
              </a>
              <a href="">
                <img src="{{asset('/assets/products/pic_small-2.png')}}" alt="" />
              </a>
              <a href="">
                <img src="{{asset('/assets/products/ic_play@2x.png')}}" alt="" />
              </a>
            </figcaption>
          </figure>
        </div>
        <div class="col-lg-4">
          <form action="/addtocart" method="POST" id="add-to-cart">
            @csrf
            <input type="hidden" value={{auth()->user()->id}} name="user_id">
            <input type="hidden" value={{ $product[0]->id }} name="product_id">
            @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <h3>{{ $product[0]->name }}</h3>
            <p class="text-muted">IDR {{$product[0]->price}}.000</p>
            <div class="row d-inline-flex">
              {{-- Minus --}}
              <div class="row justify-content-between">
                <div class="col-2">
                  <button
                    type="button"
                    class="btn btn-sm quantity-left-minus"
                    style="background-color: #eaeafe" data-type="minus" data-field=""
                  >
                    <i class="uil uil-minus-circle" style="color: white"></i>
                  </button>
                </div>
                <div class="col-3">
                  <input type="text" id="quantity" name="quantity" class="form-control input-number" value="0" min="1" max="100">
                </div>
                <div class="col">
                  <button
                  type="button"
                  class="btn btn-sm quantity-right-plus"
                  style="background-color: #1abc9c"
                  >
                    <i class="uil uil-plus-circle"></i>
                  </button>
                </div>
                {{-- Quantity --}}
                {{-- Plus --}}
                <div class="btn-product">
                  <a class="btn btn-warning text-white" href="javascript:{}" onclick="document.getElementById('add-to-cart').submit();"
                    >Add To Cart</
                  >
                  <a
                    href=""
                    class="btn btn-warning"
                    style="background-color: #eaeafe; border: none"
                    >Add To Wishlist</a
                  >
                </div>
              </form>
            </div>
          </div>

          <!-- Add To Cart -->


          <div class="designed-by">
            <h5>Our Designers</h5>
            <div class="row designed-by-profile">
              <div class="col-2">
                <img src="{{asset('/assets/designers/designer-single-product.png')}}" />
              </div>
              <div class="col-4">
                <h4>Yasya Indra</h4>
                <p>14.3K Followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Product -->
  <!-- Description -->
  <section class="product-description bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="description-tab"
                data-bs-toggle="tab"
                data-bs-target="#description-tab-pane"
                type="button"
                role="tab"
                aria-controls="description-tab-pane"
                aria-selected="true"
              >
                Product
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="review-tab"
                data-bs-toggle="tab"
                data-bs-target="#review-tab-pane"
                type="button"
                role="tab"
                aria-controls="review-tab-pane"
                aria-selected="false"
              >
                Reviews (12)
              </button>
            </li>
          </ul>
          <div class="tab-content p-3" id="myTabContent">
            <div
              class="tab-pane fade show active p-3 product-review"
              id="description-tab-pane"
              role="tabpanel"
              aria-labelledby="description-tab"
              tabindex="0"
            >
              <p>
                Payday is finally here and you’ve got some extra cash to help
                you stock up your summer wardrobe. Not sure where to start?
                ASOS Stylist Beccy Goldsworthy is here with the best of what’s
                new, from 80s-inspired tracksuits to some seriously fresh
                trainers. Check out her picks below and watch the video for
                more.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                nec felis metus. Vivamus eu urna tempor, pretium erat quis,
                volutpat eros. Cras consectetur dolor at venenatis feugiat.
                Fusce nunc risus, finibus eget augue ac, ornare gravida
                turpis. Morbi consequat, nisi sit amet viverra feugiat, lacus
                mauris ornare erat, at pharetra odio dolor id elit.
                Pellentesque eu aliquet ex. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit.
              </p>
            </div>
            <div
              class="tab-pane fade product-review"
              id="review-tab-pane"
              role="tabpanel"
              aria-labelledby="review-tab"
              tabindex="0"
            >
              <div class="row">
                <div class="col-1 d-none d-md-block">
                  <img src="{{asset('/assets/reviews/reviewer-1.png')}}" alt="" />
                </div>
                <div class="col">
                  <h5>Angga Riski</h5>
                  <p>
                    Produknya bags dan banana juga rapih cocok untuk kulit
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-1 d-none d-md-block">
                  <img src="{{asset('/assets/reviews/reviewer-1.png')}}" alt="" />
                </div>
                <div class="col">
                  <h5>Angga Riski</h5>
                  <p>
                    Produknya bags dan banana juga rapih cocok untuk kulit
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-1 d-none d-md-block">
                  <img src="{{asset('/assets/reviews/reviewer-1.png')}}" alt="" />
                </div>
                <div class="col">
                  <h5>Angga Riski</h5>
                  <p>
                    Produknya bags dan banana juga rapih cocok untuk kulit
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-1 d-none d-md-block">
                  <img src="{{asset('/assets/reviews/reviewer-1.png')}}" alt="" />
                </div>
                <div class="col">
                  <h5>Angga Riski</h5>
                  <p>
                    Produknya bags dan banana juga rapih cocok untuk kulit
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-1 d-none d-md-block">
                  <img src="{{asset('/assets/reviews/reviewer-1.png')}}" alt="" />
                </div>
                <div class="col">
                  <h5>Angga Riski</h5>
                  <p>
                    Produknya bags dan banana juga rapih cocok untuk kulit
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-1 d-none d-md-block">
                  <img src="{{asset('/assets/reviews/reviewer-1.png')}}" alt="" />
                </div>
                <div class="col">
                  <h5>Angga Riski</h5>
                  <p>
                    Produknya bags dan banana juga rapih cocok untuk kulit
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Description -->
  <!-- Similar Product -->
  <section class="similar-product">
    <div class="container">
      <div class="row">
        <h3>Similar Product</h3>
        <p>Pakaian pelengkap produk di atas</p>
        <div class="col"></div>
      </div>
      <div class="row">
        @foreach ($similars as $similar)
          <div class="col-lg-4">
            <figure class="figure">
              <div class="figure-image">
                <img
                  src="{{asset('/assets/similar-products/similar-1.png')}}"
                  class="figure-img img-fluid rounded"
                  alt="..."
                />
                  <a
                  href="/product/{{$similar->slug}}"
                  class="d-flex justify-content-center"
                >
                  <i class="uil uil-plus-circle align-self-center"></i>
                </a>
              </div>
              <figcaption class="figure-caption">
                <div class="row">
                  <div class="col">
                    <h4>{{$similar->name}}</h4>
                    <p>Match 20%</p>
                  </div>
                  <div
                    class="col-6 d-flex justify-content-end align-self-center"
                  >
                    <p>IDR {{$similar->price}}.000</p>
                  </div>
                </div>
              </figcaption>
            </figure>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        console.log(quantitiy)
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
});
</script>
@endsection