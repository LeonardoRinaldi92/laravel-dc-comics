@extends('layout.app')

@section('titolo')
    Laravel-Comics | Home
@endsection

@section('content')
<section>
    @include('partials.jumbotron')
</section>

<section>
    @include('partials.bluenav')
</section>
<section>
    @include('partials.prefooter')
</section>
@endsection