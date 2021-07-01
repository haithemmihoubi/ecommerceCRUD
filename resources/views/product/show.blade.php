@extends('product.layout')
@section('content')

    <div class="mx-auto card" style="width: 60%;">



            <div class="form-group">
                <label for="exampleInputEmail1">{{ $product->name }}</label>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">{{ $product->price }}</label>

            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">{{ $product->details }}</label>

            </div>
   <a href="{{ Route('products.index') }}" class="btn btn-outline-primary">all products   </a>



    </div>

@endsection
