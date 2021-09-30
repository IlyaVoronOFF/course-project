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
      <div class="alert alert-danger" hidden role="alert">
      </div>
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

@push('js-product-delete')
  <script>
    const deleteLinks = document.querySelector('.table-responsive').querySelectorAll('.delete');
    deleteLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        const productId = e.target.dataset.id;
        fetch(`/admin/products/${productId}`, {
          method: 'DELETE',
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'text/html'
          }
        })
        .then(response => {
            return response.json();
        })
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                const alertEl = document.querySelector('.alert');
                alertEl.innerText = data.errorCode === '23000' ?
                    `Нельзя удалить товар id=${productId}, есть связанные заказы` :
                    'Ошибка при удалении товара';
                alertEl.removeAttribute('hidden');
                console.log(data);
            }
        })
      })
    });
  </script>
@endpush
