@extends('layout.app')

@section('titolo')
    Laravel-Comics | Home
@endsection

@section('content')
<section>
    @include('partials.thumbBox')
</section>
<section>
    @include('partials.bluenav')
</section>
<section>
    @include('partials.prefooter')
</section>
@endsection