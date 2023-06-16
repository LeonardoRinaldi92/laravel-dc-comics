@extends('layout.app')

@section('titolo')
 Laravel Comic | Edit :{{$comic->name}}
@endsection

@section('content')
<section>
    @include('partials.formEdit')
</section>
<section>
    @include('partials.bluenav')
</section>
<section>
    @include('partials.prefooter')
</section>
@endsection