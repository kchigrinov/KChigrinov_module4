@extends('admin.index')
@section('categories')
<h1>Категории</h1>


<div class="container">
  <form method="post">
  {{ csrf_field() }}
    <div class="form-group row">
      <label for="new-category" class="col-sm-2 col-form-label">Новая категория</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="new-category">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Добавить</button>
      </div>
    </div>
  </form>
</div>

<ul>
@foreach($categories as $category)
	<li>{{ $category->title }}</li>
@endforeach	
</ul>
	
@endsection