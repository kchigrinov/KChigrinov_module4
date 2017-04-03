@extends('layout')

@section('showbytag')


@foreach ($newsByTag as $news)

<h3>{{ $news->title }}</h3>
</p>{{ $news->body }}</p>

@endforeach


@endsection