@extends('admin.index')
@section('news')
<h1>Новости</h1>

<div class="container">
  <form method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="form-group row">
      <label for="new-category" class="col-sm-2 col-form-label">Заголовок</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="news-title">
      </div>
    </div>
    <div class="form-group row">
      <label for="new-category" class="col-sm-2 col-form-label">Теги</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="tags" placeholder="Теги вводить через запятую!">
      </div>
    </div>
    <div class="form-group row">
      <label for="new-category" class="col-sm-2 col-form-label">Текст</label>
      <div class="col-sm-6">
        <textarea id="add_news" name="news-body"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
      <label for="new-category" class="col-sm-2 col-form-label">Фото для новости :</label>
      <div class="col-sm-6">
        <input name="userfile" type="file" accept="image/jpeg,image/png,image/gif" />
      </div>
    </div>
    <label>Выберите категорию</label>
    <select class="selectpicker" name ="category">
	  	@foreach($categories as $category)
			<option>{{ $category->title }}</option>
		@endforeach	
	</select>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Добавить</button>
      </div>
    </div>
  </form>
</div>
	
@endsection