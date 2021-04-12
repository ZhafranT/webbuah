@extends('main')
@section('content')
  <div class="container custom-product">
      <div class="all-products">
        <h2>All Product</h2>
        @foreach ($products as $item)
        <div class="search-item">
          <img class="product-pic" src="{{$item['gallery']}}">
          <div class="title title-center" >
            <h5>{{$item['name']}}</h5>
            <h5>{{$item['price']}}</h5>
          </div>
          <div style="padding: 10px">
            <input type="hidden">
            <button class="btn" style="background-color: #4CAF50;">BELI</button>
          </div>
        </div>
        @endforeach
      </div>
  </div>
</div>
@endsection