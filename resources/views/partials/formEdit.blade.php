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
                <input type="text" required max="255"  id="comics-name" class="form-control"
                placeholder="Inserisci il titolo del fumetto" name="name" value="{{ old('name') ?? $comic->name }}">
                @error('name')
                    <span style="color: red; text-transform: uppercase">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-description" class="form-label">Descrizione</label>
                <textarea id="comics-description" class="form-control"
                placeholder="Inserisci la descrizione del fumetto" name="description">{{ old('description') ?? $comic->description}}</textarea>
                @error('description')
                    <span style="color: red; text-transform: uppercase">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-thumb" class="form-label">Thumb</label>
                <input type="text" required max="255" id="comics-thumb" class="form-control"
                placeholder="Inserisci il link dell'immagine del fumetto" name="thumb" value="{{ old('thumb') ?? $comic->thumb}}">
                @error('thumb')
                    <span style="color: red; text-transform: uppercase">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-price" class="form-label">price</label>
                <input type="text" required max="20" id="comics-price" class="form-control"
                placeholder="Inserisci il prezzo" name="price" value="{{ old('price') ?? $comic->price}}">
                @error('price')
                    <span style="color: red; text-transform: uppercase">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-series" class="form-label">series</label>
                <input type="text" required max="50" id="comics-series" class="form-control"
                placeholder="Inserisci il prezzo" name="series" value="{{ old('series') ?? $comic->series}}">
                @error('series')
                    <span style="color: red; text-transform: uppercase">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-sale_date" class="form-label">sale_date</label>
                <input type="date" required id="comics-sale_date" class="form-control" name="sale_date"
                    min="1900-01-01" value="{{ old('sale_date') ?? $comic->sale_date}}">
                @error('sale_date')
                    <span style="color: red; text-transform: uppercase">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-type" class="form-label">type</label>
                <input type="text" required max="255" id="comics-type" class="form-control"
                placeholder="Inserisci il tipo" name="type" value="{{ old('type') ?? $comic->type}}">
                @error('type')
                    <span style="color: red; text-transform: uppercase">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-artist" class="form-label">Artisti</label>
                <textarea id="comics-artist" required class="form-control"
                placeholder="Inserisci gli artisti separati virigola e spazio" name="artist">{{ old('artist') ?? implode(', ', json_decode($comic->artist)) }}</textarea> 
                {{-- usare artist[] con l'aggiunta di altri input text per avere piu artisti enon doverci smazzare col json deconde explode e blablabla --}}
                @error('artist')
                    <span style="color: red; text-transform: uppercase">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-writers" class="form-label">Writers</label>
                <textarea id="comics-writers" required class="form-control"
                placeholder="Inserisci gli scrittori separati da virgola e spazio" name="writers">{{ old('writers') ?? implode(', ', json_decode($comic->writers)) }}</textarea>
                            {{-- usare writers[] con l'aggiunta di altri input text per avere piu artisti enon doverci smazzare col json deconde explode e blablabla --}}
                @error('writers')
                    <span style="color: red; text-transform: uppercase">{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="my-3 btn btn-primary">Modifica il fumetto Comics </button>
        </form>
    </div>
</div>