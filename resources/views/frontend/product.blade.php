
@extends("frontend.layouts.main2")
@section("main")
  <!-- Navbar -->

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img style="width:100%" src="{{asset($product[0]->img)}}" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">

                <span class="badge purple mr-1">id: {{$product[0]->id}}</span>


                <span class="badge blue mr-1">New</span>


                @if(session()->has("message"))
                    <span class="badge blue mr-1">added to cart</span>
               
                @endif


            </div>

            <p class="lead">
              <span>${{$product[0]->price}}</span>
            </p>

            <p class="lead font-weight-bold">Description</p>

            <p>{{$product[0]->discription}}</p>

            <form class="d-flex justify-content-left" action="/adds/{{$product[0]->id}}" method="POST">
                @csrf
              <!-- Default input -->
              <input name="quantity1" type="number" value="1" aria-label="Search" class="form-control" style="width: 100px" required>
              <button class="btn btn-primary btn-md my-0 p"style="background-color:green; border:green" type="submit">Add to cart
                <i class="fas fa-shopping-cart ml-1"></i>
              </button>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

    </div>









  @endsection
