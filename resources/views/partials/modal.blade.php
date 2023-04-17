<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">ATTENZIONE!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Sei sicuro di voler eliminare {{$shoe->modello}}? <br>
        Questa operazione non è reversibile.
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>

        <form action="{{route('shoes.destroy', $shoe)}}" method="POST">
            @method('delete')
            @csrf

            <button type="submit" class="btn btn-primary">Conferma</button>

        </form>

        </div>
    </div>
    </div>
</div>