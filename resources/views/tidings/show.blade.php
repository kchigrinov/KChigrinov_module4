@extends('layout')

@section('news')

<h3>{{ $singlenews->title }}</h3>


<?php
foreach ($tags as $tag) {
}
$tags = explode(',', $tag);
?>

@if($tags[0]!=null)
@foreach ($tags as $tag)
<span><a class="tags" href="/news-by-tag/{{ $tag }}">&lt{{ $tag }}&gt </a></span>
@endforeach
@endif

@if (isset($singlenews->image))

<img id="image-tiding" src="/public/images/{{$singlenews->image}}">

@endif

<p>{{ $singlenews->body }}</p>
<p>Дата публикации: {{ $singlenews->created_at }}</p>
<p>Читают статью сейчас: {{ rand(1,5) }}<p>
<p>Количество просмотров: {{ $singlenews->view_count }}<p>


<div class="card">
	<div class="card-block">
		<form method="post" action="/news/{{ $singlenews->id }}/comments">
		 	{{ csrf_field() }}
			<div class="form-group">
				<textarea name="body" placeholder="Оставьте свой коментарий" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Добавить коментарий</button>
			</div>
		</form>
	</div>
</div>


@foreach ($coments as $coment)

<div class="col-sm-12 blog-main">
@if($id == $coment->id)
	@if(($coment->approved) != 0)
	<p>{{ $coment->body }}</p>
	@else
	<h4>Комментарий не одобрен модератором</h4>
	@endif	
	<span>Коментарий создан пользователем: {{ $coment->name }}</span>
	<hr>
@endif	
</div>


@endforeach

@endsection