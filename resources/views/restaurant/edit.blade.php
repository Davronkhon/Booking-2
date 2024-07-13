@extends('layouts.app')

@section('title')
    Добавление
@endsection
<!-- create -->
@section('content')
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <form action="{{route('restaurant.update', $restaurant->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">name : </label>
            <input type="text" name="name" class="form-control" value="{{$restaurant->name}}">
            <label for="">address : </label>
            <input type="text" name="address" class="form-control" value="{{$restaurant->address}}">
            <label for="">phone : </label>
            <input type="text" name="phone" class="form-control" value="{{$restaurant->phone}}">
            <label for="">email : </label>
            <input type="email" name="email" class="form-control" value="{{$restaurant->email}}">
            <label for="">rest_id : </label>
            <select name="rest_id" id="" class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="Добавить" class="btn btn-primary form-control">
        </form>
    </div>
@endsection

@section('footer')
@endsection
