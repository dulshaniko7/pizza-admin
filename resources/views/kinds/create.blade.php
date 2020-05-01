@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <form action="{{ route('kinds.store') }}" method="post">
                {{ csrf_field() }}
                <label for="pizza">Choose a Pizza:</label>

                <select name="pizza_id">
                    @foreach($pizzas as $pizza)
                        <option value="{{$pizza->id}}">{{$pizza->name}}</option>
                    @endforeach
                </select>
                <br>

                <label for="name">Size Name</label>
                <br>
                <select name="size">
                    <option value="large">large</option>
                    <option value="medium">medium</option>
                    <option value="small">small</option>
                </select>
                <br>



                <label for="price">Price</label>
                <br>
                <input type="text" name="price" placeholder="Pizza price">
                <br>
                <label for="price">Price</label>
                <br>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
@endsection

