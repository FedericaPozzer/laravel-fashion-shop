@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
          <h2 class="text-danger my-5">INFORMAZIONI {{$shoe->modello}}</h2>
          <div>
            <a href="{{ route('shoes.edit', $shoe) }}" class="text-decoration-none m-2 btn btn-primary">
                <i class="bi bi-pencil"></i>
            </a>
            <button class="btn btn-danger bi bi-trash" data-bs-toggle="modal" data-bs-target="#delete"></button>
          </div>
      </div>
    <div class="card mb-3" style="">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{$shoe->immagine}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{$shoe->marca}} - {{$shoe->modello}}</h5>
            <p class="card-text">{{$shoe->descrizione}}</p>
            <p class="card-text"><small class="text-muted"> Prezzo: {{$shoe->prezzo}} €</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@include("partials.modal")