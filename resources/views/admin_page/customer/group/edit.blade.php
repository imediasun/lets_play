@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Редактирование</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.customer.groups.index') }}">Список групп клиентов</a></li>
                <li class="breadcrumb-item active">Редактирование группы</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a class="btn pull-right hidden-sm-down btn-success" href="{{ route('admin.customer.groups.create') }}">
                <i class="mdi mdi-plus-circle"></i>
                Создать
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Редактирование</h4>
                    <h6 class="card-subtitle">Редактирование группы клиентов</h6>

                    <form class="form" action="{{ route('admin.customer.groups.update', $group->id) }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group m-t-40 row">
                            <label for="name" class="col-2 col-form-label">Название группы</label>
                            <div class="col-10">
                                <input name="name" type="text" class="form-control" value="{{$group->name}}">
                            </div>
                        </div>
                        <div class="form-group m-t-40 row">
                            <label for="description" class="col-2 col-form-label">Описание группы</label>
                            <div class="col-10">
                                <textarea name="description" type="text" class="form-control" rows="5">{{$group->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group m-b-0">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Сохранить</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div><!-- row -->

@endsection