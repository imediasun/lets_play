@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Редактирование</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.catalog.categories.index') }}">Список категорий</a></li>
                <li class="breadcrumb-item active">Создание категории</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a class="btn pull-right hidden-sm-down btn-success" href="{{ route('admin.catalog.categories.create') }}">
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
                    <h6 class="card-subtitle">Редактирование категории</h6>

                    <form class="form" action="{{ route('admin.catalog.categories.update', $category->id) }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group m-t-40 row">
                            <label for="name" class="col-2 col-form-label">Название</label>
                            <div class="col-10">
                                <input name="name" type="text" class="form-control" value="{{ $category->name }}">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="description" class="col-2 col-form-label">Описание</label>
                            <div class="col-10">
                                <textarea name="description" type="text" class="form-control" rows="5">{{ $category->description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="active" class="col-2 col-form-label">Активировать</label>
                            <div class="col-10">
                                <div class="checkbox">
                                    <input type="hidden" name="active" value="0">
                                    <input type="checkbox"
                                           name="active"
                                           value="1"
                                           {{ $category->active ? ' checked' : '' }}
                                           class="js-switch"
                                           data-color="#7460ee"
                                    />
                                </div>
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
    </div>

@endsection