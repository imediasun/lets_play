@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Клиенты</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item active">Список клиентов</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a class="btn pull-right hidden-sm-down btn-success" href="{{route('admin.customer.customers.create') }}">
                <i class="mdi mdi-plus-circle"></i>
                Создать
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Клиенты</h4>
                    <h6 class="card-subtitle">Список клиентов</h6>
                    <div class="table-responsive m-t-40">

                        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Имя клиента</th>
                                <th class="min-tablet">E-Mail</th>
                                <th class="min-tablet">Группа клиента</th>
                                <th class="min-tablet">Источник</th>
                                <th class="min-tablet">Ответственный</th>
                                <th class="min-tablet">Дата добавления</th>
                                <th class="min-tablet">Тип контакта</th>
                                <th class="min-desktop">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->first_name . ' ' . $customer->last_name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->group->name }}</td>
                                    <td>{{ $customer->contactSource->title }}</td>
                                    <td>-</td>
                                    <td>{{ $customer->created_at }}</td>
                                    <td>{{ $customer->contactType->title }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-icon fa fa-edit"
                                           href="{{ route('admin.customer.customers.edit', ['id' => $customer->id]) }}"
                                           data-toggle="tooltip"
                                           data-original-title="Редактировать"
                                        ></a>
                                        <a href="{{ route('admin.customer.customers.destroy', ['id'=>$customer->id]) }}"
                                           class="delete btn btn-danger btn-icon icon-lg fa fa-times"
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
    </div><!-- row -->

@endsection

@section('scripts')
    <script>
        (function ($) {

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

        })(jQuery);
    </script>
@endsection