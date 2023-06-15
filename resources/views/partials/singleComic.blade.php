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
</div>