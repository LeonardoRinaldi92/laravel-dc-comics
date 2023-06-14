<div class="Thumbbox">
    <div class="box">
        @foreach ($Comics as $item)
        <div class="cardi">
            <a href="{{route('comics.show', ['comic' => $item->id])}}">
                <div class="thumb">
                    <img src="{{$item['thumb']}}" alt="Y">
                    <div class="price">
                        <span>{{ $item['price'] }}</span>
                    </div>
                </div>
            </a>
            <span class="title">
                {{ $item['name'] }}
            </span>
        </div>    
        @endforeach
    </div>
    <div class="button">
        <span>
            load more
        </span>
    </div> 
</div>