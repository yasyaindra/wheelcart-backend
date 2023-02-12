@extends('layouts.layout')


@section('content')
        <!-- Carousel -->
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="container">
                <div class="carousel-item active">
                  <div class="row py-5 justify-content-center">
                    <div class="col-9 col-sm-4 col-md-6 col-lg-4">
                      <div class="col-9">
                        <h1>Special Eid Lebaran</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing. Lorem
                        </p>
                        <a hre="" class="btn btn-warning">Get It Now</a>
                      </div>
                    </div>
                    <div class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block">
                      <img src="{{asset('/assets/slideshow/p.png')}}" />
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row py-5 justify-content-center">
                    <div class="col-9 col-sm-4 col-md-6 col-lg-4">
                      <div class="col-9">
                        <h1>Special Eid Lebaran</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing. Lorem
                        </p>
                        <a hre="" class="btn btn-warning">Get It Now</a>
                      </div>
                    </div>
                    <div
                      class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1"
                    >
                      <img src="{{asset('/assets/slideshow/p.png')}}" />
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row py-5 justify-content-center">
                    <div class="col-9 col-sm-4 col-md-6 col-lg-4">
                      <div class="col-9">
                        <h1>Special Eid Lebaran</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing. Lorem
                        </p>
                        <a hre="" class="btn btn-warning">Get It Now</a>
                      </div>
                    </div>
                    <div
                      class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1"
                    >
                      <img src="{{asset('/assets/slideshow/p.png')}}" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- End Carousel -->
          <!-- Brands -->
          <section class="brands">
            <div class="container">
              <div class="row p-5 text-center">
                <div class="col-md-3 mb-4 mb-md-0">
                  <img src="{{asset('/assets/brands/pnb.png')}}" class="img-fluid" />
                </div>
                <div class="col-md mb-4 mb-md-0">
                  <img src="{{asset('/assets/brands/uniqlo.png')}}" class="img-fluid" />
                </div>
                <div class="col-md mb-4 mb-md-0">
                  <img src="{{asset('/assets/brands/cc.png')}}" class="img-fluid" />
                </div>
                <div class="col-md mb-4 mb-md-0">
                  <img src="{{asset('/assets/brands/nike@2x.png')}}" class="img-fluid" />
                </div>
              </div>
            </div>
          </section>
          <!-- End Brands -->
          <!-- Features -->
          <section class="features bg-light p-5" id="features">
            <div class="container">
              <div class="row mb-4">
                <div class="col">
                  <h3>Special Features</h3>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div class="row">
                @foreach ($products as $product)
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <figure class="figure">
                      <div class="figure-image">
                        <img
                          src="{{asset('/assets/products/features-3.png')}}"
                          class="figure-img img-fluid"
                          alt="..."
                        />
                        <a
                          href="/product/{{$product->slug}}"
                          class="d-flex justify-content-center"
                        >
                          <i class="uil uil-plus-circle align-self-center"></i>
                        </a>
                      </div>
                    </figure>
                    <figcaption class="figure-caption text-center">
                      <h5>{{ $product->name }}</h5>
                      <p>IDR {{ $product->price }}.000</p>
                    </figcaption>
                  </div>
                @endforeach
              </div>
            </div>
          </section>
          <!-- End -->
          <!-- Designers -->
          <section class="features p-5" id="designers">
            <div class="container">
              <div class="row mb-4">
                <div class="col">
                  <h3>Our Designers</h3>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div class="row justify-content-between">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <figure class="figure">
                    <img
                      src="/assets/designers/designer-1.png"
                      class="figure-img img-fluid rounded"
                      alt="..."
                    />
                    <figcaption class="figure-caption text-center">
                      <h5>Anne Yang</h5>
                      <p>Lorem</p>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <figure class="figure">
                    <img
                      src="{{asset('/assets/designers/designer-4.png')}}"
                      class="figure-img img-fluid rounded"
                      alt="..."
                    />
                    <figcaption class="figure-caption text-center">
                      <h5>Anne Yang</h5>
                      <p>Lorem</p>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <figure class="figure">
                    <img
                      src="{{asset('/assets/designers/designer-2.png')}}"
                      class="figure-img img-fluid rounded"
                      alt="..."
                    />
                    <figcaption class="figure-caption text-center">
                      <h5>Anne Yang</h5>
                      <p>Lorem</p>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <figure class="figure">
                    <img
                      src="{{asset('/assets/designers/designer-3.png')}}"
                      class="figure-img img-fluid rounded"
                      alt="..."
                    />
                    <figcaption class="figure-caption text-center">
                      <h5>Anne Yang</h5>
                      <p>Lorem</p>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="row text-center my-5">
                <div class="col">
                  <h5>
                    <a href="" class="text-decoration-none">See All Designers</a>
                  </h5>
                </div>
              </div>
            </div>
          </section>
@endsection