@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Создание</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.customer.deals.index') }}">Список сделок</a></li>
                <li class="breadcrumb-item active">Создание</li>
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
                    <h4 class="card-title">Создание</h4>
                    <h6 class="card-subtitle">Создать сделку</h6>

                    <form class="form" action="{{ route('admin.customer.deals.store') }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">

                        <div class="form-group m-t-40 row">
                            <label for="title" class="col-2 col-form-label">Название сделки</label>
                            <div class="col-10">
                                <input name="title" type="text" class="form-control" value="" id="title">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="description" class="col-2 col-form-label">Описание сделки</label>
                            <div class="col-10">
                                <textarea name="description" type="text" class="form-control" id="description" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deals_type_id" class="col-2 col-form-label">Тип сделки</label>
                            <div class="col-10">
                                <select name="deals_type_id" class="custom-select col-12" id="deals_type_id">
                                    @foreach ($sel_deal_types as $id => $type)
                                        <option value="{{ $id }}">{{ $type }}</option>
                                    @endforeach
                                </select>
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