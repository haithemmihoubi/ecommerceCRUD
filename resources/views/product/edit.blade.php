@extends('product.layout')
@section('content')

    <div class="mx-auto card" style="width: 60%;">

      <div>  <h2>
     product name is : {{ $product->name }}
    </h2>  </div>
    <br>
    <br>
    <hr>
        <form action="{{route('products.update',$product->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1"> Name</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" aria-describedby="emailHelp" placeholder="product name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" name="price" value="{{ $product->price }}" class="form-control" aria-describedby="emailHelp"
                    placeholder="product price">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Details</label>
                <textarea class="form-control" name="details" rows="3" >{!! $product->details !!}</textarea>
            </div>
            <hr>
            <br>
            <div class="form-group mx-auto">

                <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>

        </form>

        <a href="{{ Route('products.index') }}" class="btn btn-outline-primary">all products   </a>


    </div>

@endsection
