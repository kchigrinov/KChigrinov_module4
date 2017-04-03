@extends('admin.index')
@section('adveresting')
<h1>Реклманый блок</h1>

<div class="container">
  <form method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="form-group row">
      <label for="new-category" class="col-sm-2 col-form-label">Название товара</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="name">
      </div>
    </div>
    <div class="form-group row">
      <label for="new-category" class="col-sm-2 col-form-label">Цена</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="price">
      </div>
    </div>
    <div class="form-group row">
      <label for="new-category" class="col-sm-2 col-form-label">Продавец/сайт</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="seller">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Добавить</button>
      </div>
    </div>
  </form>
</div>

@endsection