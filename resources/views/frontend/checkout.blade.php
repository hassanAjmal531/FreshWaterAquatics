@extends('frontend.layouts.main2')
@section('main')
    <div class="container">


  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">{{Cart::count()}}</span>
      </h4>
      <ul class="list-group mb-3">
        @foreach (Cart::content() as $item )
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">{{$item->name}}</h6>
              <small class="text-muted">Quantity {{$item->qty}}</small>
            </div>
            <span class="text-muted">{{$item->price}}</span>
          </li>
            
        @endforeach
        
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (PKR)</span>
          <strong>{{Cart::total()}}</strong>
        </li>
      </ul>

      
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Shipping Details</h4>
      <form class="needs-validation" action="/placeOrder" method="post" novalidate>
        @csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text"name="firstname" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" name="lastname" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" name= "email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text"  name="address" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        
        <div class="mb-3">
            <label for="contact">Contact Number</label>
            <input type="text"  name="contact" class="form-control" id="address" placeholder="03xx-xxxxxxxxx" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>
        

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">City</label>
            <select class="custom-select d-block w-100" id="country"  name = "select" required>
              <option value="">Choose...</option>
              <option>Rawalpindi</option>
              <option>Islamabad</option>
              <option>lahore</option>
             
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          
          <div class="col-md-3 mb-3">
            <label for="zip">Postal Code</label>
            <input type="text" name="zip" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          
        
        </div>
        
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">place Order</button>
      </form>
    </div>
  </div>

  
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script></body>

@endsection