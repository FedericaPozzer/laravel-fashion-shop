@extends('layouts.app')

@section('content')

<div class="container">
      <h2 class="text-danger my-5">Dashboard</h2>
        <div class="row row-cols-4 justify-content-between">
            @foreach ($shoes as $shoe)

                <div class="card col m-3 p-0" style="width: 18rem;">
                    <img src="{{$shoe->immagine}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$shoe->marca}} - {{$shoe->modello}}</h5>
                        <p class="card-text">€ {{$shoe->prezzo}}</p>
                        <a href="{{route('shoes.show', $shoe)}}" class="btn btn-primary">Vedi prodotto</a>
                    </div>
                </div>
            @endforeach
        </div>
    
        {{$shoes->links('pagination::bootstrap-5')}}
    
</div>



@endsection
