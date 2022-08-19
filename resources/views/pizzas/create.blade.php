@extends('layouts.app')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 flex-column">
                <h1>Create a new pizza</h1>
                <form class="flex flex-column" method="POST" action="/pizzas">
                    @csrf
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name">
                    <label for="type">Choose pizza type:</label>
                    <select name="type" id="type">
                        <option value="margarita">Margarita</option>
                        <option value="hawaiian">Hawaiian</option>
                        <option value="veg supreme">Veg Supreme</option>
                        <option value="volcano">Volcano</option>
                    </select>
                    <label for="base">Choose base type:</label>
                    <select name="base" id="base">
                        <option value="cheesy crust">Cheesy Crust</option>
                        <option value="garlic crust">Garlic Crust</option>
                        <option value="thin & crispy">Thin & Crispy</option>
                        <option value="thick">Thick</option>
                    </select>
                    <fieldset>
                        <label>Extra toppings:</label><br>
                        <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
                        <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
                        <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
                        <input type="checkbox" name="toppings[]" value="olives">Olives <br>

                    </fieldset>
                    <input type="submit" value="Order Pizza" class="button">
                </form>
            </div>
        </div>
    </div>
@endsection
