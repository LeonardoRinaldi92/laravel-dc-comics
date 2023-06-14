@extends('layout.app')

@section('titolo')
 {{$comic['name']}}
@endsection

@section('content')
<section>
    @include('partials.jumbotron',['image' => $comic['thumb']])
</section>

<section>
    @include('partials.bluenav')
</section>
<section>
    @include('partials.prefooter')
</section>
@endsection