@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            Category Edit
        </div>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @method('PUT')
            @csrf

            Name:
            <br/>
            <br/>

            <input type="text" name="name" value="{{ $category->name }}" class="form-control"/>
            <br/>
            <input type="submit" class="btn btn-primary" value="update"/>

        </form>
        <br/>
    </div>
@endsection
