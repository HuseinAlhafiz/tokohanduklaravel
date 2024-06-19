@extends('layouts.app')

@section('tittle')
Rumah Handuk
@endsection

@section('content')
<div class="page-content pages-home" style="margin-top: 100px">
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div
              id="storeCarousel"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <ol class="carousel-indicators">
                <li
                  class="active"
                  data-target="#storeCarousel"
                  data-bs-slide-to="0"
                ></li>
                <li data-bs-target="#storeCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#storeCarousel" data-bs-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                  <img
                    src="images/banner.jpg"
                    alt="Carousel Image"
                    class="d-block w-100"
                  />
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img
                    src="images/banner.jpg"
                    alt="Carousel Image"
                    class="d-block w-100"
                  />
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                  <img
                    src="images/banner.jpg"
                    alt="Carousel Image"
                    class="d-block w-100"
                  />
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#storeCarousel"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#storeCarousel"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      
    </section>
  <!-- trend categories -->
    <section class="store-trend-categories mt-4">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row d-flex justify-content-between">
          <div class="col-6 col-md-3 col-lg-2 component-categories">
            <a href="#" class="component categories d-block">
              <div class="categories-image">
                <img src="images/categories-gadgets.svg" alt="" class="w-100" />
              </div>
              <p class="categories-text">Gadgets</p>
            </a>
          </div>
          
          <!-- batas gadgets1 -->
          <div class="col-6 col-md-3 col-lg-2 component-categories">
            <a href="#" class="component categories d-block">
              <div class="categories-image">
                <img src="images/categories-furniture.svg" alt="" class="w-100" />
              </div>
              <p class="categories-text">Furniture</p>
            </a>
          </div>
          <!-- batas furniture2 -->
          <div class="col-6 col-md-3 col-lg-2 component-categories">
            <a href="#" class="component categories d-block">
              <div class="categories-image">
                <img src="images/categories-makeup.svg" alt="" class="w-100" />
              </div>
              <p class="categories-text">Makeup</p>
            </a>
          </div>
          <!-- batas makeup3 -->
          <div class="col-6 col-md-3 col-lg-2 component-categories">
            <a href="#" class="component categories d-block">
              <div class="categories-image">
                <img src="images/categories-sneaker.svg" alt="" class="w-100" />
              </div>
              <p class="categories-text">Sneaker</p>
            </a>
          </div>
          <!-- batas sneaker4 -->
          <div class="col-6 col-md-3 col-lg-2 component-categories">
            <a href="#" class="component categories d-block">
              <div class="categories-image">
                <img src="images/categories-tools.svg" alt="" class="w-100" />
              </div>
              <p class="categories-text">Tools</p>
            </a>
          </div>
          <!-- batas tools5 -->
          <!-- <div class="col-6 col-md-3 col-lg-2 component-categories" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component categories d-block">
              <div class="categories-image">
                <img src="images/categories-baby.svg" alt="" class="w-100" />
              </div>
              <p class="categories-text">Baby</p>
            </a>
          </div> -->
          <!-- batas baby6 -->
        </div>
      </div>
    </section>
  <!-- new products -->
  <section class="new-products">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>New Products</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="wrapper-text">
            <a href="/details/1" class="component-products d-block"> 
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-apple-watch.jpg');"></div>
              </div>
            </a>
            <div class="">
              <div class="products-text">Apple Watch 4</div>
              <div class="products-price">$890</div>
            </div>
          </div>
        </div>
        
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="wrapper-text">
            <a href="/details/1" class="component-products d-block"> 
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-orange-bogotta.jpg');"></div>
              </div>
            </a>
            <div class="">
              <div class="products-text">Orange Bogotta</div>
              <div class="products-price">$94,509</div>
            </div>
          </div>
        </div>
  
        
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="wrapper-text">
            <a href="/details/1" class="component-products d-block"> 
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-sofa-ternyaman.jpg');"></div>
              </div>
            </a>
            <div class="">
              <div class="products-text">Sofa Ternyaman</div>
              <div class="products-price">$1,409</div>
            </div>
          </div>
        </div>
  
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="wrapper-text">
            <a href="/details/1" class="component-products d-block"> 
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-bubuk-maketti.jpg');"></div>
              </div>
            </a>
            <div class="">
              <div class="products-text">Bubuk Maketti</div>
              <div class="products-price">$225</div>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="wrapper-text">
            <a href="/details.html" class="component-products d-block"> 
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-tatakan-gelas.jpg');"></div>
              </div>
            </a>
            <div class="">
              <div class="products-text">Tatakan Gelas</div>
              <div class="products-price">$45,184</div>
            </div>
          </div>
        </div>

        <!-- Tambahkan elemen produk ke-6 jika ada -->
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <div class="wrapper-text">
            <a href="/details/1" class="component-products d-block"> 
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-mavic-kawe.jpg');"></div>
              </div>
            </a>
            <div class="">
              <div class="products-text">Mavic Kawe</div>
              <div class="products-price">$503</div>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
          <div class="wrapper-text">
            <a href="/details/1" class="component-products d-block"> 
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-black-edition-nike.jpg');"></div>
              </div>
            </a>
            <div class="">
              <div class="products-text">Black Edition Nike</div>
              <div class="products-price">$70,482</div>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
          <div class="wrapper-text">
            <a href="/details/1" class="component-products d-block"> 
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-monkey-toys.jpg');"></div>
              </div>
            </a>
            <div class="">
              <div class="products-text">Monkey Toys</div>
              <div class="products-price">$783</div>
            </div>
          </div>
        </div>
     </section>
  </div>
@endsection
