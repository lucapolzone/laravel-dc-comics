<!-- Button trigger modal -->
<button type="button" class="bin-button" data-bs-toggle="modal" data-bs-target="#delete-comic-{{ $comic->id }}-modal">
  <i class="fa-solid fa-trash text-danger"></i>
</button>


<!-- Modal -->
<div class="modal fade" id="delete-comic-{{ $comic->id }}-modal" tabindex="-1" aria-labelledby="delete-comic-{{ $comic->id }}-modal" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il fumetto {{ $comic->title }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          Sei sicuro? Non potrai tornare indietro
      </div>
      <div class="modal-footer">
          <form action="{{ route('pages.destroy', $comic) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">
                  Conferma eliminazione
              </button>
          </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
      </div>
  </div>
  </div>
</div>