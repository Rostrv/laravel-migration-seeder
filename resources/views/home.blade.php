@extends('layouts.app')

@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Travel Agency</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, veritatis.</p>
        <hr class="my-2">

        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">view travels</a>
        </p>
    </div>
</div>

<section class="container">
    <h3>Our packages</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quaerat natus eum facere consectetur quibusdam quos nesciunt quas expedita ea!</p>

    <div class="travels row">
        @forelse($travels as $travel)
        <div class="col mb-4">
            <div class="card" style="width: 18rem;">
                <img src="{{$travel->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$travel->destination}}</h5>
                    <p class="card-text">{{$travel->itinerary}}</p>
                    <p class="card-text">{{$travel->description}}</p>
                    <p class="card-text">Price: {{$travel->price}}</p>
                    <p class="card-text">Duration: {{$travel->duration}}</p>

                    <p></p>
                    <a href="#" class="btn btn-primary">Book now</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            Nothing to show
        </div>

        @endforelse
    </div>

</section>

@endsection