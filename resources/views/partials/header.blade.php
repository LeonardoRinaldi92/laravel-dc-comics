<div class="top-header">
    <div class="container h-100 row justify-content-end mx-auto">
        <a href="#" class="col-2 d-flex align-items-center text-white text-decoration-none justify-content-end">
            DC POWER&trade; VISA&reg;
        </a>
        <a href="#" class="col-2 d-flex align-items-center text-white text-decoration-none justify-content-end">
            addiction dc site
        </a>
        </div>
    </div>
</div>
<div class="navBar">
    <div class="container mx-auto justify-content-between row align-items-center">
        <div class="col-1">
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
        </div>
        <div class="col d-flex justify-content-between">
            <ul>
                @foreach ($navbar as $item)
                <li>
                     <a href="{{$item['url']}}"><b>{{$item['menuName']}}</b></a>
                </li>
                    
                @endforeach
            </ul>
            <div class="srch">
                <input type="text">
            </div>
        </div>
    </div>
</div>