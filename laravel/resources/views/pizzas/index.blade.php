@extends('layouts.layout')
@section('content')
        <div class="flex-center position-ref full-height">
           
            <div class="content">
                <div class="title m-b-md">
                    Pizza list
                </div>
                <!--accessing the variable that we passed in the route page to the view-->
               <!-- @for($i = 0; $i < 5; $i++)
          <p>the value of i is {{ $i }}</p>
        @endfor -->

        
        @foreach($pizzas as $pizza)
          <div>
            {{$pizza->name}} - {{$pizza->type}}
          </div>
        @endforeach

               
            </div>
        </div>
@endsection
