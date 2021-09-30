@extends('layouts.admin')

@section('main')

<div class="page-content">
    <h1>Изменение товара</h1>
    <br>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    @if (session('fail'))
    <div class="alert alert-danger" role="alert">
          {{ session('fail') }}
      </div>
    @endif

    <form method="POST" action="/admin/products/{{ $product->id }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="product-name">Название</label>
        <input type="text" class="form-control" id="product-name" name="name" value="{{ $product->name }}">
      </div>
      <div class="form-group">
        <label for="product-categories">Категории</label>
        <select multiple class="form-control" id="product-categories" name="categories_id[]">
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if (in_array($category->id, $productCategories)) selected @endif>
              {{ $category->name }}
            </option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="product-intro">Краткое описание</label>
        <textarea class="form-control" id="product-intro" name="intro_desc" rows="1">{{ $product->intro_desc }}</textarea>
      </div>
      <div class="form-group">
        <label for="product-description">Описание</label>
        <textarea class="form-control" id="product-description" name="description" rows="5">{{ $product->description }}</textarea>
      </div>
      <div class="form-group">
        <label for="product-price">Цена</label>
        <input type="number" class="form-control" id="product-price" name="price" min="0" step="1" value="{{ intval($product->price) }}">
      </div>
      <div class="form-group">
        <label for="product-country">Страна-производитель</label>
        <select class="form-control" id="product-country" name="country_id">
          @foreach ($countries as $country)
            <option value="{{ $country->id }}" @if ($product->country_id === $country->id) selected @endif>
              {{ $country->name }}
            </option>
          @endforeach
        </select>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="product-published"  name="published" value="1" @if (null !== $product->published) checked @endif>
        <label class="form-check-label" for="product-published">Опубликован</label>
      </div>
      <button type="submit" class="btn btn-primary">Изменить</button>
    </form>


</div>

@endsection
