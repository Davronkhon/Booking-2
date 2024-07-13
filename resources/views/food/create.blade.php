@extends('layouts.app')
@section('content')
    <form action="{{route('food.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="exampleInputEmail1" class="form-control">Name:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1"><br>
        <label for="exampleInputEmail1" class="form-control">Price:</label>
        <input type="text" name="price" step="0.1" class="form-control" id="exampleInputEmail1"><br>
        <label for="exampleInputEmail1" class="form-control">Image:</label>
        <input class="form-control" type="file" name="image"><br>
        <label for="exampleInputEmail1" class="form-control">Description:</label>
        <input class="form-control" type="text" name="description"><br>
        <label for="exampleInputEmail1" class="form-control">Time:</label>
        <input class="form-control" type="time" name="time"><br>
        <label for="exampleInputEmail1" class="form-control">Is_active:</label>
        <input type="text" class="form-control" name="is_active"><br>
        <label for="exampleInputEmail1" class="form-control">Food_Category:</label>
        <select id="exampleInputEmail1" class="form-control" name="food_category_id">
            @foreach($foodcategories as $foodcategory)
                <option value="{{$foodcategory->id}}" class="form-control">{{$foodcategory->name}}</option>
            @endforeach
        </select><br>
        <label for="exampleInputEmail1" class="form-control">Restaurant:</label>
        <select id="exampleInputEmail1" class="form-control" name="restaurant_id">
            @foreach($restaurants as $restaurant)
                <option value="{{$restaurant->id}}" class="form-control">{{$restaurant->name}}</option>
            @endforeach~
        </select><br>
        <input type="submit" value="Добавить" class="иет btn-primary form-control">
    </form>
@endsection
