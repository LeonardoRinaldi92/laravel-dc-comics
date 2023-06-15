<div class="white-single row">
    <div>
        <h3>
            {{$comic['name']}}
        </h3>
        <div class="price-avaibl">

        </div>
        <p>
            {{$comic['description']}}
        </p> 
    </div>

</div>
<div class="light-grey-single">

@foreach (json_decode($comic['artist']) as $item) 
{{$item}}
    
@endforeach
<a href="{{route ('comics.edit', $comic)}}" class="btn btn-outline-success  mb-5">MODIFICA FUMETTO</a>
<form action="{{route ('comics.destroy', $comic)}}" method="POST">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-outline-danger">ELIMINA FUMETTO</button>
</form>
