@extends('admin.index')
@section('approved-comments')

<h1>Коментарии ожидающие одобрения</h1>


@foreach($posts as $post)
<form method="post">
	{{ csrf_field() }}
	<p>{{ $post->body }}</p>
	<label class="checkbox-inline"><input type="checkbox" name="approved" value="1">Одобрить комментарий</label>
	<input type="hidden" name="id_post" value="{{$post->id}}">
	<div class="form-group row">
	    <div class="offset-sm-2 col-sm-10">
	        <button type="submit" class="btn btn-primary">Готово</button>
	    </div>
	</div>
</form>	
	@endforeach


@endsection