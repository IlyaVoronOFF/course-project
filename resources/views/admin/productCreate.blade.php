@extends('layouts.admin')

@section('main')

<div class="page-content">
    <h1>Добавление нового товара</h1>

    <form>
      @csrf
      <div class="form-group">
        <label for="product-name">Название</label>
        <input type="text" class="form-control" id="product-name" name="name">
      </div>
      <div class="form-group">
        <label for="category">Категории</label>
        <select multiple class="form-control" id="category" name="category">
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if (old('category_id') === $category->id) selected @endif>
              {{ $category->name }}
            </option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="product-intro">Краткое описание</label>
        <textarea class="form-control" id="product-intro" name="intro" rows="1"></textarea>
      </div>
      <div class="form-group">
        <label for="product-description">Описание</label>
        <textarea class="form-control" id="product-description" name="description" rows="5"></textarea>
      </div>
      <div class="form-group">
        <label for="product-price">Цена</label>
        <input type="number" class="form-control" id="product-price" name="price" min="0" step="1">
      </div>
      <div class="form-group">
        <label for="country">Страна-производитель</label>
        <select class="form-control" id="country" name="country">
          @foreach ($countries as $country)
            <option value="{{ $country->id }}" @if (old('country_id') === $country->id) selected @endif>
              {{ $country->name }}
            </option>
          @endforeach
        </select>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="product-published">
        <label class="form-check-label" for="product-published" name="published">Опубликован</label>
      </div>
      <button type="submit" class="btn btn-primary">Добавить</button>
    </form>


</div>

@endsection
