@extends('layout')
@section('category')

<h2>{{ $category->title }}</h2>



<?php

foreach ($news as $singlenews) {
	echo '<p><h4><a href="/news/' . $singlenews->id . '"">' . $singlenews->title . '</a></h4></p>';
	echo '<p>Дата публикации: ' . $singlenews->created_at . '</p>';
}

?>


{{ $news->links() }}

@endsection