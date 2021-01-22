@extends('master') 
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
        <a href="/">go back</a>
        <h3>price :{{$product['price']}}</h3>
        <h3>category :{{$product['category']}}</h3>
        <h2>description :{{$product['description']}}</h2>
        <br><br>
        <form action="/add_to_cart" method="POST">
        @csrf
          <input type="hidden" name="product_id" value={{$product['id']}}>
        <button class="btn btn-primary">add to cart</button>
        </form>
        <br><br>
        <button class="btn btn-success">buy now</button>
        </div>
       
    </div>
</div>
@endsection 