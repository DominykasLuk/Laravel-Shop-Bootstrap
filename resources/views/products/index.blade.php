@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Products</h1>
        </div>

        <a href="{{ route('products.create') }}" class="btn btn-info">New Product</a>
        <br/>

        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th></th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>$ {{ $product->price }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"  style="display: inline">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="delete" class="btn btn-danger" onclick="return confirm('Are you sure?')"/>
                        </form>
                    </td>
                </tr>
            @endforeach
            </thead>
        </table>
    </div>
@endsection
