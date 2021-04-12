@extends('main')
@section('content')

<div class="container">
    <table class="table">
    <tbody>
        <tr>
            <td>Amount</td>
            <td>${{$total}}</td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>$0</td>
        </tr>
        <tr>
            <td>Delivery</td>
            <td>$10</td>
        </tr>
        <tr>
            <td>All Total</td>
            <td>${{$total+10}}</td>
        </tr>
        
    </tbody>
</table>
</div>

<div class="container custom-product">
    <form action="/myorder" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-7">
              <input type="text" class="form-control" id="inputname" placeholder="Name">
            </div>
          </div>
        <div class="form-row">
          <div class="form-group col-md-7">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-7">
                <input type="text" class="form-control" id="inputAddress" placeholder="Address">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-7">
                <input type="number" class="form-control" id="inputcontact" placeholder="contact">
            </div>
        </div>

        <div class="form-check form-check-inline">
            <div class="form-check form-check-inline">    
                <label for="pwd">Payment Method</label>
            </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="payment" value="E-wallet">
                    <label class="form-check-label">E-wallet</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="payment" value="transfer">
                    <label class="form-check-label">Transfer</label>
                </div>
        </div>
          <div class="pt-2">
              <button type="submit" class="btn btn-success">Buy Now</button>
          </div>
      </form>
  </div>
@endsection

