<div class="white-single">
    <div class="row">
        <div class="col-8">
            <h4>
                {{$comic['name']}}
            </h4>
            <div class="price-avaibl">
                <div class="row h-100">
                    <div class="col-8">
                        <div class="row align-items-center justify-content-between h-100">
                            <div class="col-6 ps-4">
                                <span class="light-green">
                                    <b>
                                        U.S. Price:
                                    </b>                         
                                </span>
                                <span class="text-white">
                                    {{$comic['price']}}
                                </span>
                            </div>
                            <div class="col-6 text-end pe-4">
                                <span class="light-green">
                                    <b>
                                        AVAIBLE
                                    </b>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 row align-items-center justify-content-between h-100">
                        <span class="text-center text-white">
                            <b>
                                Check Avaibility &#9660;
                            </b>
                        </span>
                    </div>
                </div>
            </div>
            <p class="mt-3">
                {{$comic['description']}}
            </p> 
        </div>
        <div class="col-4">
            <p>
                <b>
                    Advertisement
                </b>
            </p>
            <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="">
        </div>
    </div>
</div>
<div class="light-grey-single">
    <div class="container-bottom row justify-content-between">
        <div class="col-6 pe-2">
            <h5>
                Talent
            </h5>
            <div class="row">
                <div class="col-4 d-flex">
                    <span class="mt-2">
                        <b>
                            Art by:
                        </b>
                    </span>
                </div>
                <div class="col-8">
                    <p class="mt-2">
                    @foreach (json_decode($comic['artist']) as $item) 
                    <b>
                    {{$item}},
                    </b>
                    @endforeach
                    </p>
                </div>
            </div>
            <div class="row brd-bott">
                    <div class="col-4 d-flex">
                        <span class="mt-2">
                            <b>
                                Written by:
                            </b>
                        </span>
                    </div>
                    <div class="col-8">
                        <p class="mt-2">
                        @foreach (json_decode($comic['writers']) as $item) 
                        <b>
                        {{$item}},
                        </b>
                        @endforeach
                        </p>
                    </div>
            </div>
        </div>
        <div class="col-5">
        <h5>
             Specs
        </h5>
            <div class="row">
                <div class="col-4 d-flex">
                    <span class="mt-2">
                        <b>
                            Series:
                        </b>
                    </span>
                </div>
                <div class="col-8">
                    <p class="mt-2 text-uppercase">
                        <b>
                            {{$comic['series']}}
                        </b>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 d-flex">
                    <span class="mt-2">
                        <b>
                            U.S. Pice:
                        </b>
                    </span>
                </div>
                <div class="col-8">
                    <p class="mt-2 text-uppercase">
                        <b>
                            {{$comic['price']}}
                        </b>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 d-flex">
                    <span class="mt-2">
                        <b>
                            On Sale Date:
                        </b>
                    </span>
                </div>
                <div class="col-8">
                    <p class="mt-2 text-uppercase">
                        <b>
                        {{$comic['sale_date']}}
                        </b>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-bottom mt-5 pb-5">
        <div class="row justify-content-end">
            <div class="col-3">
                <a href="{{route ('comics.edit', $comic)}}" class="btn btn-outline-success ">MODIFICA FUMETTO</a>
            </div>
            <div class="col-3">
                <form action="{{route ('comics.destroy', $comic)}}" method="POST" id="delete-form">
                
                    @csrf
                    @method('DELETE')
                
                    <button type="submit" class="btn btn-outline-danger" >ELIMINA FUMETTO</button>
                </form>
            </div>
        </div>
    </div>
</div>




<script>
    document.getElementById('delete-form').addEventListener('submit', function (event) {
        event.preventDefault();


        if (confirm('Sei sicuro sicuro di eliminare il fumetto? Questa azione è irreversibile!')) {
            this.submit();
        }
    });
</script>
