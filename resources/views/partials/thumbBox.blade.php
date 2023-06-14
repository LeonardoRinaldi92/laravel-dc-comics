<div class="Thumbbox">
    <div class="box">
        @foreach ($comics as $item)
        <div class="cardi">
            <div class="thumb">
                <img src="{{$item['thumb']}}" alt="Y">
                <div class="price">
                    <span>{{ $item['price'] }}</span>
                </div>
            </div>   
            <span class="title">
                {{ $item['title'] }}
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