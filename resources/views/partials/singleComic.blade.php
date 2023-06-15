<div class="white-single">

</div>
<div class="light-grey-single">
{{$comic['name']}}
@foreach (json_decode($comic['artist']) as $item) 
{{$item}}
    
@endforeach
</div>