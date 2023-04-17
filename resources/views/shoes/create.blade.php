@extends("layouts.app")

@section("content")

<div class="container">
<h2 class="text-danger my-5">Aggiungi nuove scarpe</h2>

    <form action="{{ route("shoes.store") }}" method="POST" class="row">
        
        @csrf

        <div class="col-6 col-offset-5">
            <label for="marca" class="form-label">marca</label>
            <input type="text" class="form-control @error("marca") is-invalid @enderror" id="marca" name="marca" value="{{ old("marca")}}">
            @error("marca")
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>

        <div class="col-6">
            <label for="modello" class="form-label">modello</label>
            <input type="text" class="form-control @error("modello") is-invalid @enderror" id="modello" name="modello" value="{{ old("modello")}}">
            @error("modello")
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>

        <div class="col-3 col-offset-5 my-3">
            <label for="prezzo" class="form-label">prezzo</label>
            <input type="text" class="form-control @error("prezzo") is-invalid @enderror" id="prezzo" name="prezzo" value="{{ old("prezzo")}}">
            @error("prezzo")
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>

        <div class="col-9 col-offset-5 my-3">
            <label for="immagine" class="form-label">immagine</label>
            <input type="url" class="form-control @error("immagine") is-invalid @enderror" id="immagine" name="immagine" value="{{ old("immagine")}}">
            @error("immagine")
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>

        <div class="col-12 my-3">
            <label for="descrizione" class="form-label d-block">descrizione</label>
            <textarea class="border" name="descrizione" id="descrizione" rows="8" cols="80">{{ old("descrizione")}}</textarea>
            @error("descrizione")
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    
        <div class="mt-4 d-flex">
            <button type="submit" class="btn btn-outline-secondary">Save</button>
        </div>
    </form>
</div>

@endsection