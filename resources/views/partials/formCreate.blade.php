<div class="back-white">
    <div class="container-form container m-auto p-5">
        <h1 class="text-center">
            Inserisci il Fumetto
        </h1>
        <form action="{{route('comics.store')}}" method="POST">

            @csrf

            <div class="form-group">
                <label for="comics-name" class="form-label">Titolo</label>
                <input type="text" required max="255"  id="comics-name" class="form-control"
                placeholder="Inserisci il titolo del fumetto" name="name">
                @error('name')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-description" class="form-label">Descrizione</label>
                <textarea id="comics-description" class="form-control"
                placeholder="Inserisci la descrizione del fumetto" name="description"></textarea>
                @error('description')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-thumb" class="form-label">Thumb</label>
                <input type="text" required max="255" id="comics-thumb" class="form-control"
                placeholder="Inserisci il link dell'immagine del fumetto" name="thumb">
                @error('thumb')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-price" class="form-label">price</label>
                <input type="text" required max="20" id="comics-price" class="form-control"
                placeholder="Inserisci il prezzo" name="price">
                @error('price')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-series" class="form-label">series</label>
                <input type="text" required max="50" id="comics-series" class="form-control"
                placeholder="Inserisci il prezzo" name="series">
                @error('series')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-sale_date" class="form-label">sale_date</label>
                <input type="date" required id="comics-sale_date" class="form-control" name="sale_date"
                    min="1900-01-01">
                @error('sale_date')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-type" class="form-label">type</label>
                <input type="text" required max="255" id="comics-type" class="form-control"
                placeholder="Inserisci il tipo" name="type">
                @error('type')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-artist" class="form-label">Artisti</label>
                <textarea id="comics-artist" required class="form-control"
                placeholder="Inserisci gli artisti separati virigola e spazio" name="artist" ></textarea> 
                {{-- usare artist[] con l'aggiunta di altri input text per avere piu artisti enon doverci smazzare col json deconde explode e blablabla --}}
                @error('artist')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="comics-writers" class="form-label">Writers</label>
                <textarea id="comics-writers" required class="form-control"
                placeholder="Inserisci gli scrittori separati da virgola e spazio" name="writers"></textarea>
                            {{-- usare writers[] con l'aggiunta di altri input text per avere piu artisti enon doverci smazzare col json deconde explode e blablabla --}}
                @error('writers')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="my-3 btn btn-primary">Crea nuovo Comics </button>
        </form>
    </div>
</div>