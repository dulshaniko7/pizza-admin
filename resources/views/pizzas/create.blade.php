@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <form action="{{ route('pizzas.store') }}" method="post">
                {{ csrf_field() }}
                <label for="name">Name</label>
                <br>
                <input type="text" id="name" name="name" placeholder="Pizza name..">
                <br>
                <label for="Ingredients">Ingredients</label>
                <br>
                <textarea name="ingridients" rows="8" placeholder="ingredients"></textarea>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
@endsection
