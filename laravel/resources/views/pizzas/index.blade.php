@extends('layouts.layout')
@section('content')
                <!--accessing the variable that we passed in the route page to the view-->
               <!-- @for($i = 0; $i < 5; $i++)
          <p>the value of i is {{ $i }}</p>
        @endfor -->
        <div class="wrapper pizza-index">
        <h1>Pizza Orders</h1>
        @foreach($pizzas as $pizza)
        <div class="pizza-item">
      <img src="/img/pizza.png" alt="pizza icon">
      <h4><a href="/pizzas/{{$pizza->id}}">{{ $pizza->name }}</a></h4>
    </div>
        @endforeach
        </div>
@endsection
