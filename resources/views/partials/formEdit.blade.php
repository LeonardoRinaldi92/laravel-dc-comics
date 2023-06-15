<div class="back-white">
    <div class="container-form container m-auto p-5">
        <h1 class="text-center">
            Modifica il fumetto
        </h1>
        <form action="{{route('comics.update', $comic)}}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="comics-name" class="form-label">Titolo</label>
                <input type="text" id="comics-name" class="form-control"
                placeholder="Inserisci il titolo del fumetto" name="name" value="{{ old('name') ?? $comic->name }}">
            </div>

            <div class="form-group">
                <label for="comics-description" class="form-label">Descrizione</label>
                <textarea id="comics-description" class="form-control"
                placeholder="Inserisci la descrizione del fumetto" name="description">{{ old('description') ?? $comic->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="comics-thumb" class="form-label">Thumb</label>
                <input type="text" id="comics-thumb" class="form-control"
                placeholder="Inserisci il link dell'immagine del fumetto" name="thumb" value="{{ old('thumb') ?? $comic->thumb }}">
            </div>

            <div class="form-group">
                <label for="comics-price" class="form-label">price</label>
                <input type="text" id="comics-price" class="form-control"
                placeholder="Inserisci il prezzo" name="price" value="{{ old('price') ?? $comic->price }}">
            </div>

            <div class="form-group">
                <label for="comics-series" class="form-label">series</label>
                <input type="text" id="comics-series" class="form-control"
                placeholder="Inserisci il prezzo" name="series" value="{{ old('series') ?? $comic->series }}">
            </div>

            <div class="form-group">
                <label for="comics-sale_date" class="form-label">sale_date</label>
                <input type="date" id="comics-sale_date" class="form-control" name="sale_date"
                    min="1900-01-01" value="{{ old('sale_date') ?? $comic->sale_date }}">
            </div>

            <div class="form-group">
                <label for="comics-type" class="form-label">type</label>
                <input type="text" id="comics-type" class="form-control"
                placeholder="Inserisci il tipo" name="type" value="{{ old('type') ?? $comic->type }}">
            </div>

            <div class="form-group">
                <label for="comics-artist" class="form-label">Artisti</label>
                <input type="text" id="comics-artist" class="form-control"
                placeholder="Inserisci gli artisti separati virigola e spazio" name="artist" value="{{ old('artist') ?? implode(', ', json_decode($comic->artist)) }}">
                {{-- usare artist[] con l'aggiunta di altri input text per avere piu artisti enon doverci smazzare col json deconde explode e blablabla --}}
            </div>

            <div class="form-group">
                <label for="comics-writers" class="form-label">Writers</label>
                <input id="comics-writers" class="form-control"
                placeholder="Inserisci gli scrittori separati da virgola e spazio" name="writers" value="{{ old('writers') ?? implode(', ', json_decode($comic->writers)) }}">
                {{-- usare writers[] con l'aggiunta di altri input text per avere piu artisti enon doverci smazzare col json deconde explode e blablabla --}}
            </div>

            <button type="submit" class="my-3 btn btn-primary">Modifica il fumetto Comics </button>
        </form>
    </div>
</div>