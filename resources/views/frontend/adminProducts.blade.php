@extends('frontend.adminlayouts.main')
@section('main')

    <h1>products</h1>
    
<div class="container table-responsive py-5"> 
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">price</th>
          <th scope="col">discription</th>
          <th scope="col">quantity</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product )
        <tr>
            <th scope="row">{{$product[0]->id}}</th>
            <td>{{$product[0]->name}}</td>
            <td>{{$product[0]->price}}</td>
            <td>{{$product[0]->discription}}</td>
            <td>{{$product[0]->quantity}}</td>
            
           
          </tr> 
        @endforeach
        
       
      </tbody>
    </table>
    </div>
    
    

@endsection