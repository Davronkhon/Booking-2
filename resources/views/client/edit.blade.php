@extends('layouts.app')
@section('content')
    <form action="{{route('client.update',$clients)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name:</label>
                <input type="text" name="name" value="{{$clients->name}}" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Surname:</label>
                <input type="text" name="surname" value="{{$clients->surname}}" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Phone:</label>
            <input class="form-control" value="{{$clients->phone}}" type="text" name="phone">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">User:</label>
            <select id="exampleInputEmail1"class="form-control" name="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Restaurant:</label>
            <select id="exampleInputEmail1"class="form-control" name="restaurant_id">
                @foreach($restaurants as $restaurant)
                    <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-info">Изменить</button>
    </form>
@endsection

@section('footer')
@endsection
