@extends('main')
@section('content')
<div class="container">
  <div class="row justify-content-md-center">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner carousel-custom">    
        <div class="carousel-item active ">
          <img class="d-block" src="https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/banners/usp.webp" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/banners/Web-Banner_temur_double_discount.webp" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/banners/campaign-15jam.webp" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="container custom-product">
      <div class="all-products">
        <h2>All Product</h2>
        @foreach ($products as $item)
        <div class="item-product">
          <img class="product-pic" src="{{$item['gallery']}}">
          <div class="title title-center" >
            <h5>{{$item['name']}}</h5>
            <h5>{{$item['price']}}</h5>
          </div>
          <div style="padding: 10px">
            <form action="/addtocart" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{$item['id']}}">
              <button class="btn" style="background-color: #4CAF50;">BELI</button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
  </div>

</div>
@endsection