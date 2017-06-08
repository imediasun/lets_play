@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Заказы</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item active">Список заказов</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a class="btn pull-right hidden-sm-down btn-success" href="{{route('admin.order.orders.create') }}">
                <i class="mdi mdi-plus-circle"></i>
                Создать
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Заказы</h4>
                    <h6 class="card-subtitle">Список заказов</h6>
                    <div class="table-responsive m-t-40">
                        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Статус</th>
                                <th class="min-tablet">Клиент</th>
                                <th class="min-tablet">E-Mail</th>
                                <th class="min-tablet">Итого</th>
                                <th class="min-tablet">Дата добавления</th>
                                <th class="min-desktop">Количество</th>
                                <th class="min-desktop">Действие</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->status->title }}</td>
                                    <td>{{ $order->customer->first_name . ' ' . $order->customer->last_name }}</td>
                                    <td>{{ $order->customer->email }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-icon fa fa-edit"
                                           href="{{ route('admin.order.orders.edit', ['id' => $order->id]) }}"
                                           data-toggle="tooltip"
                                           data-original-title="Редактировать"
                                        ></a>
                                        <a href="{{ route('admin.order.orders.destroy', ['id'=>$order->id]) }}" class="delete btn btn-danger btn-icon icon-lg fa fa-times"></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- row -->

@endsection

@section('scripts')
    <script>
        (function( $ ) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.delete').on('click', function (e) {
                if (!confirm('Are you sure you want to delete?')) return false;
                e.preventDefault();
                $.post({
                    type: 'DELETE',  // destroy Method
                    url: $(this).attr("href")
                }).done(function (data) {
                    console.log(data);
                    location.reload(true);
                });
            });
        } )( jQuery );
    </script>
@endsection
