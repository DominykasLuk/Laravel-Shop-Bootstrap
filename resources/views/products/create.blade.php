@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>New Product</h1>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <br/>
            Name:
            <input type="text" name="name" value="{{ old('name') }}" class="form-control"/>
            <br/>
            Price:
            <input type="text" name="price" value="{{ old('price') }}" class="form-control"/>
            Description:
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            <br/>
            Category:
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">@if ($category->id == old('category_id')) selected @endif{{$category->name}}</option>
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
