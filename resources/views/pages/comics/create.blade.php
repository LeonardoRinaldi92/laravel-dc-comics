@extends('layout.app')

@section('titolo')
 Laravel Comic | Create
@endsection

@section('content')
<section>
    @include('partials.formCreate')
</section>
<section>
    @include('partials.bluenav')
</section>
<section>
    @include('partials.prefooter')
</section>
@endsection