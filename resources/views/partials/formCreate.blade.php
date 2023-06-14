<div class="back-white">
    <div class="container-form container m-auto">
        <div class="form-group">
            <form action="{{route('comics.store')}}" method="POST">
                <label for="comics-name" class="form-label">Titolo</label>
                <input type="text" id="comics-name" class="form-control"
                placeholder="Inserisci il titolo del fumetto" name="name">
            </form>
        </div>
        <div class="form-group">
            <form action="{{route('comics.store')}}" method="POST">
                <label for="comics-description" class="form-label">Descrizione</label>
                <textarea id="comics-description" class="form-control"
                placeholder="Inserisci la descrizione del fumetto" name="description"></textarea>
            </form>
        </div>
        <div class="form-group">
            <form action="{{route('comics.store')}}" method="POST">
                <label for="comics-thumb" class="form-label">Thumb</label>
                <input type="text-area" id="comics-thumb" class="form-control"
                placeholder="Inserisci il link dell'immagine del fumetto" name="thumb">
            </form>
        </div>
    
        <button type="submit" class="my-3 btn btn-primary">Crea nuovo Comics </button>
    </div>
</div>