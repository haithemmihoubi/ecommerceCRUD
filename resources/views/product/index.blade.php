@extends('product.layout')
@section('content')
    <div class="jumbotron container">

        <div class="container">


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">product name</th>
                        <th scope="col">product price </th>
                        <th scope="col">product description</th>
                        <th scope="col">actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)

                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href=" {{ route('products.edit') }} ">edit</a>

                                <a href="{{ route('products.show') }}">update</a>
                                <form action="{{ route('products.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit btn btn-danger">delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            {!! $products->links() !!}


        @endsection

</div>
</div>
