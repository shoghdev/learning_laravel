@extends('layouts.layout')
@section('contents')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1 class="underline">
                Pizzas List
            </h1>
        </div>
        <div>
            @foreach($pizzas as $pizza)
              <div>
                  {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
              </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
