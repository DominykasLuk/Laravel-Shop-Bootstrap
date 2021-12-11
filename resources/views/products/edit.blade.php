@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>New Product</h1>
        </div>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <br/>
            Name:
            <input type="text" name="name" value="{{ $product->name }}" class="form-control"/>
            <br/>
            Price:
            <input type="text" name="price" value="{{ $product->price }}" class="form-control"/>
            Description:
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            <br/>
            Category:
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">@if ($category->id == $product->category_id) selected @endif{{$category->name}}</option>
                @endforeach
            </select>
            <br/>
            File:
            <input type="file" name="photo"> <br/> <br/>
            <input type="submit" class="btn btn-primary" value="save"/>

        </form>
        <br/>
    </div>
@endsection
