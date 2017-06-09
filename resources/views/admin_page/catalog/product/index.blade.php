@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Товары</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item active">Список товаров</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a class="btn pull-right hidden-sm-down btn-success" href="{{ route('admin.catalog.products.create') }}">
                <i class="mdi mdi-plus-circle"></i>
                Создать
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Товары</h4>
                    <h6 class="card-subtitle">Список товаров</h6>
                    <div class="table-responsive m-t-40">

                        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Название товара</th>
                                <th class="min-tablet">Категория</th>
                                <th class="min-tablet">Количество</th>
                                <th class="min-tablet">Активация</th>
                                <th class="min-desktop">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->qnt }}</td>

                                    <td>
                                        <input {{ ($product->active == 1) ? 'checked' : '' }}
                                               data-id="{{ $product->id }}"
                                               type="checkbox"
                                               class="status js-switch"
                                               data-color="#7460ee"
                                        />
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-icon fa fa-edit"
                                           href="{{ route('admin.catalog.products.edit', ['id' => $product->id]) }}"
                                           data-toggle="tooltip"
                                           data-original-title="Редактировать"
                                        ></a>
                                        <a class="delete btn btn-danger btn-icon fa fa-times"
                                           href="{{ route('admin.catalog.products.destroy', ['id' => $product->id]) }}"
                                           data-toggle="tooltip"
                                           data-original-title="Удалить"
                                        ></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        (function ($) {

            $('.delete').on('click', function (e) {
                if (!confirm('Are you sure you want to delete?')) return false;
                e.preventDefault();
                $.post({
                    type: 'DELETE', // Destroy Method
                    url: $(this).attr("href")
                }).done(function (data) {
                    console.log(data);
                    location.reload(true);
                });
            });

            $('.status').on('change', function (e) {
                e.preventDefault();
                var item = $(this);
                $.post({
                    type: 'PUT',
                    url: '{{route('admin.catalog.products.status')}}',
                    data: {'id': $(this).data('id')},
                    dataType: 'json'
                }).done(function (data) {
                    if (data.active == 1) {
                        item.attr('checked', 'checked');
                    } else {
                        item.removeAttr('checked');
                    }
                });
            });

        })(jQuery);
    </script>
@endsection