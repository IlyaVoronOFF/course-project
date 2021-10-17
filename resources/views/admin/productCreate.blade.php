@extends('layouts.admin')

@section('main')

  <div class="page-content">
    <h1>Добавление нового товара</h1>
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

    <form method="POST" action="/admin/products" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="product-name">Название</label>
        <input type="text" class="form-control" id="product-name" name="name" value="{{ old('name') }}">
      </div>
      <div class="form-group">
        <label for="product-categories">Категории</label>
        <select multiple class="form-control" id="product-categories" name="categories_id[]">
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if (is_array(old('categories_id')) && in_array($category->id, old('categories_id'))) selected @endif>
              {{ $category->name }}
            </option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="product-intro">Краткое описание</label>
        <textarea class="form-control" id="product-intro" name="intro_desc" rows="1">{{ old('intro_desc') }}</textarea>
      </div>
      <div class="form-group">
        <label for="product-description">Описание</label>
        <textarea class="form-control" id="product-description" name="description"
          rows="5">{{ old('description') }}</textarea>
      </div>
      <div class="form-group">
        <label for="product-price">Цена</label>
        <input type="number" class="form-control" id="product-price" name="price" min="0" step="1"
          value="{{ old('price') }}">
      </div>
      <div class="form-group">
        <label for="product-country">Страна-производитель</label>
        <select class="form-control" id="product-country" name="country_id">
          @foreach ($countries as $country)
            <option value="{{ $country->id }}" @if (old('country_id') === $country->id) selected @endif>
              {{ $country->name }}
            </option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="product-image">Картинка</label>
        <input id="product-img-input" type="file" class="form-control-file" id="product-image" name="image"
          accept="image/*">
        <img id="product-img" src="..." class="img-thumbnail d-none admin-product-image" alt="image">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="product-published" name="published" value="1"
          @if (null !== old('published')) checked @endif>
        <label class="form-check-label" for="product-published">Опубликован</label>
      </div>
      <button type="submit" class="btn btn-primary">Добавить</button>
    </form>


  </div>

@endsection

@push('js-image-upload')
  <script>
    const imageInput = document.querySelector('#product-img-input');
    const imageEl = document.querySelector('#product-img');
    imageInput.addEventListener('input', e => {
      if (e.target.files[0]) {
        const file = e.target.files[0];
        imageEl.onload = () => {
          imageEl.classList.remove('d-none');
          URL.revokeObjectURL(imageEl.src);
        }
        imageEl.src = URL.createObjectURL(file);
      }
    });
  </script>
@endpush
