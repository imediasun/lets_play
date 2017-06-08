@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Создание</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.catalog.products.index') }}">Список товаров</a></li>
                <li class="breadcrumb-item active">Создание товара</li>
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
                    <h4 class="card-title">Создание</h4>
                    <h6 class="card-subtitle">Создание товара</h6>

                    <form class="form" action="{{ route('admin.catalog.products.store') }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">

                        <div class="form-group m-t-40 row">
                            <label for="name" class="col-2 col-form-label">Название товара</label>
                            <div class="col-10">
                                <input name="name" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-month-input" class="col-2 col-form-label">Категория товара</label>
                            <div class="col-10">
                                <select name="category_id" class="custom-select col-12" id="inlineFormCustomSelect">
                                    @foreach ($sel_categories as $sel_id => $sel_category)
                                        <option value="{{ $sel_id }}">
                                            {{ $sel_category }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="art" class="col-2 col-form-label">Артикул</label>
                            <div class="col-10">
                                <input name="art" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="price" class="col-2 col-form-label">Прайс</label>
                            <div class="col-10">
                                <input name="price" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="qnt" class="col-2 col-form-label">Количество</label>
                            <div class="col-10">
                                <input name="qnt" type="number" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="description" class="col-2 col-form-label">Описание</label>
                            <div class="col-10">
                                <textarea name="description" type="text" class="form-control" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="description" class="col-2 col-form-label">Подробное описание</label>
                            <div class="col-10">
                                <textarea name="description" type="text" class="form-control" rows="5"></textarea>
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