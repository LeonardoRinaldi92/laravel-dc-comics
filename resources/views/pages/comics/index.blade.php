@extends('layout.app')

@section('titolo')
    Laravel-Comics | Comics
@endsection

@section('content')
<section>
    @include('partials.jumbotron',['title' => 'current series'])
</section>
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