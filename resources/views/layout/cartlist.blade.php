@extends('main')
@section('content')

  <div class="container custom-product">
      <div class="all-products">
        <h2>All Cart</h2>
        <a class="btn btn-success" href="buynow">Buy Now</a>
        <br><br>
        @foreach ($products as $item)
        <div class="item-product">
          <img class="product-pic" src="{{$item->gallery}}">
          <div class="title title-center" >
            <h5>{{$item->name}}</h5>
            <h5>{{$item->price}}</h5>
          </div>
          <div style="padding: 10px">
              <a href="/removeitem/{{$item->cart_id}}" class="btn btn-warning">Remove Item</a>
          </div>
        </div>
        @endforeach
      </div>
  </div>

@endsection

