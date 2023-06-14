<div class="bluenav">
    <div class="box-size">
        @foreach ($icons as $item)
        <div class="icon">
            <img src="{{ Vite::asset('resources/images/'.$item['url']) }}" alt="">
            <span>
                {{ $item['name'] }}
            </span>
        </div>
        @endforeach
    </div>      
</div>