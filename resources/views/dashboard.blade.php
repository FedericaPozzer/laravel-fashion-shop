@extends('layouts.app')

@section('content')
<div class="container">
      <h2 class="text-danger my-5">Dashboard</h2>

      @foreach ($shoes as $shoe)
          @dump($shoe);
      @endforeach
    
</div>
@endsection
