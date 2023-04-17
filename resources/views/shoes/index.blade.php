@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
          <h2 class="text-danger my-5">LISTA SCARPE</h2>
          <div>
            <a type="button" class="btn btn-primary" href="{{ route('shoes.create') }}">Aggiungi</a>
          </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">marca</th>
            <th scope="col">modello</th>
            <th scope="col">prezzo</th>
            <th scope="col">azioni</th>


          </tr>
        </thead>
        <tbody>
          @foreach ($shoes as $shoe)
          <tr>
            <td>{{$shoe->id}}</td>
            <td>{{$shoe->marca}}</td>
            <td>{{$shoe->modello}}</td>
            <td>{{$shoe->prezzo}} €</td>
            <td>
              <a href="{{ route('shoes.show', $shoe) }}" class="text-decoration-none">
                <i class="bi bi-eye"></i>
              </a>
              <a href="{{ route('shoes.edit', $shoe) }}" class="text-decoration-none m-2">
                <i class="bi bi-pencil"></i>
              </a>
              <button class="btn p-0 m-0 text-danger bi bi-trash" data-bs-toggle="modal" data-bs-target="#delete"></button>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
      {{$shoes->links('pagination::bootstrap-5')}}
    </div>
@endsection

{{-- @section('modals') --}}

    @foreach ($shoes as $shoe)
        @include("partials.modal")
    @endforeach

{{-- @endsection --}}