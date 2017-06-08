@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Сделки</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item active">Сделки</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a class="btn pull-right hidden-sm-down btn-success" href="{{ route('admin.customer.deals.create') }}">
                <i class="mdi mdi-plus-circle"></i>
                Создать
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Сделки</h4>
                    <h6 class="card-subtitle">Список сделок</h6>
                    <div class="table-responsive m-t-40">

                        <table id="demo-dt-basic" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Название сделки</th>
                                <th class="min-tablet">Описание</th>
                                <th class="min-desktop">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($deals as $deal)
                                <tr>
                                    <td>{{ $deal->title }}</td>
                                    <td>{{ $deal->description }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-icon fa fa-edit"
                                           href="{{ route('admin.customer.deals.edit', ['id' => $deal->id]) }}"
                                           data-toggle="tooltip"
                                           data-original-title="Редактировать"
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
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })(jQuery);
    </script>
@endsection
