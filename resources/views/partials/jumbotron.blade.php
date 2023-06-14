<div class="jumbo">
@if (isset($title))
    <div class="current"> 
        <span>
            {{$title ?? 'Home'}}
        </span>
    </div>
@endif

</div>
@if (isset($image))
    <div class="blue-line">
        <div class="container blue-container h-100">
            <img class="blue-image"src="{{$image}}" alt="">
        </div>
    </div>
@endif