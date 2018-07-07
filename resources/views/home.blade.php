@extends('master')

@section('content')

    @foreach($sections as $component)
        @include('components.'.$component)
    @endforeach

@endsection
