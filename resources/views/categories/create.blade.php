@extends('app')
@section('content')
    <div class="container">
        <div class="row">
           New category
        </div>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            Name:
            <br/>
            <br/>

            <input type="text" name="name" value="" class="form-control"/>
            <br/>
            <input type="submit" class="btn btn-primary" value="save"/>

        </form>
        <br/>
    </div>
@endsection
