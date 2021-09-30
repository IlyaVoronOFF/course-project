@extends('layouts.admin')

@section('main')

  <div class="page-content">
      <div class="d-flex justify-content-between align-items-center">
          <h1>
            Товары
          </h1>
          <a href="{{route('products.create')}}" class="btn btn-dark">Добавить новый</a>
      </div>

      @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
      @endif
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Updated at</th>
            <th scope="col">Country</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->updated_at }}</td>
              <td>{{ $product->country->name }}</td>
              <td>
                <a href="{{ route('products.edit', ['product' => $product]) }}" class="text-primary">Изм.</a>
                &nbsp;|&nbsp;
                <a href="#" rel="deletion" data-id="{{ $product->id }}" class="text-danger delete">Удалить</a>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      {{ $products->links() }}
    </div>

  </div>

@endsection
