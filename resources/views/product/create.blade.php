@extends('product.layout')
@section('content')

    <div class="mx-auto card" style="width: 60%;">



        <form action="{{route('products.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="product name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" name="price" class="form-control" aria-describedby="emailHelp"
                    placeholder="product price">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Details</label>
                <textarea class="form-control" name="details" rows="3"></textarea>
            </div>
            <hr>
            <br>
            <div class="form-group mx-auto">

                <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>

        </form>



    </div>

@endsection
