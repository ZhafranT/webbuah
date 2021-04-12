{{-- <?php

  use App\Http\Controllers\ProductController;

  $total = ProductController::cartItem();

?> --}}


<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="#">Buah Segar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cartlist">Cart</a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="#">My Order</a>
      </li> --}}
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/search">
      <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>