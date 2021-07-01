@extends('product.layout')
@section('content')
<br>
<br>
<div class="d-flex justify-content-center">

    <h1>product list</h1>
    <br>
    <div>
    <a class="btn btn-outline-info" href="{{ route('products.create') }}">create</a>
</div>
    <br>


</div>
@if ($message=Session::get('success'))

<div class="alert alert-success" role="alert">
{{$message }}
  </div>
@endif

    <div class="card position-relative">

        <div class="container">

            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">price</th>
                        <th scope="col">detail</th>
                        <th scope="col">actions</th>

                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                <tbody>
                    @foreach ($products as $item)

                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}  DT</td>
                            <td>{{ $item->details }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-outline-primary" href="{{ route('products.edit', $item->id) }}">Edit</a>

                                    <a class="btn btn-outline-success" href="{{ route('products.show', $item->id) }}">show</a>
                                    <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">delete</button>

                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!--  TODO for the pagination -->

            {!! $products->links() !!}
        </div>



    </div>






@endsection
