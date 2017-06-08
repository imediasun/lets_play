@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Статусы</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item active">Статусы заказов</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a class="btn pull-right hidden-sm-down btn-success" href="{{route('admin.order.orders-statuses.create') }}">
                <i class="mdi mdi-plus-circle"></i>
                Создать
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Статусы</h4>
                    <h6 class="card-subtitle">Статусы заказов</h6>
                    <div class="table-responsive m-t-40">
                        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th class="min-tablet">Код</th>
                                <th class="min-desktop">Действие</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($statuses as $status)
                                <tr>
                                    <td>{{ $status->title }}</td>
                                    <td>{{ $status->name }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-icon fa fa-edit"
                                           href="{{ route('admin.order.orders-statuses.edit', ['id' => $status->id]) }}"
                                           data-toggle="tooltip"
                                           data-original-title="Редактировать"
                                        ></a>
                                        {{--<a href="{{ route('admin.order.orders-statuses.destroy', ['id'=>$status->id]) }}"--}}
                                           {{--class="delete btn btn-danger btn-icon icon-lg fa fa-times"--}}
                                        {{--></a>--}}
                                        <a class="delete btn btn-danger btn-icon fa fa-times"
                                           href="<?= route('admin.order.orders-statuses.delete', ['id' => $status->id]) ?>"
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
        (function( $ ) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
//            $('.delete').on('click', function (e) {
//                if (!confirm('Are you sure you want to delete?')) return false;
//                e.preventDefault();
//                $.post({
//                    type: 'DELETE',  // destroy Method
//                    url: $(this).attr("href")
//                }).done(function (data) {
//                    console.log(data);
//                    location.reload(true);
//                });
//            });
            $('.delete').click(function (e) {
                if (!confirm('Are you sure you want to delete?')) {
                    return false;
                }
            });
        } )( jQuery );
    </script>
@endsection
