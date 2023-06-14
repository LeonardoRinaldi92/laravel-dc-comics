<div class="prefooter">
        <img src="{{ Vite::asset('resources/images/dc-logo-bg.png') }}" id="logoBig" alt="">
        <div class="list">
            <div>
                <span class="list-title">
                   dc comics
                </span>
                <ul class="lista-bottom"> 
                    @foreach ($lista1 as $item)
                    <li class="li-bottom">
                        <a href="{{$item['url']}}">
                        {{ $item['name'] }}
                        </a>
                    </li class="li-bottom">
                    @endforeach
                </ul>
                <span class="list-title">
                    dc
                 </span>
                 <ul class="lista-bottom">
                    <li class="li-bottom">
                        <a href="/shop_dc">
                            shop DC
                        </a>
                    </li>
                    <li class="li-bottom">
                        <a href="/shop_dc_collectibles">
                            shop DC Collectibles
                        </a>
                    </li>
                 </ul>
            </div>
            <div>
                <span class="list-title">
                   sites
                </span>
                <ul class="lista-bottom"> 
                    @foreach ($lista2 as $item)
                    <li class="li-bottom">
                        <a href="{{$item['url']}}">
                        {{ $item['name'] }}
                        </a>
                    </li class="li-bottom">
                    @endforeach
                </ul>
            </div>
            <div>
                <span class="list-title">
                   dc comics
                </span>
                <ul class="lista-bottom"> 
                    @foreach ($lista3 as $item)
                    <li class="li-bottom">
                        <a href="{{$item['url']}}">
                        {{ $item['name'] }}
                        </a>
                    </li class="li-bottom">
                    @endforeach
                </ul>
            </div>
        </div>
</div>