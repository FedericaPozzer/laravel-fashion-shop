@extends('layouts.app')

@section('content')
    <div class="container">
      <h2 class="text-danger my-5">LISTA SCARPE</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">marca</th>
            <th scope="col">modello</th>
            <th scope="col">prezzo</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($shoes as $shoe)
          <tr>
            <td>{{$shoe->id}}</td>
            <td>{{$shoe->marca}}</td>
            <td>{{$shoe->modello}}</td>
            <td>{{$shoe->prezzo}}</td>
            <td>
              <a href="{{ route('shoe.show', $project) }}"></a>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
      {{$shoes->links('pagination::bootstrap-5')}}
    </div>
@endsection