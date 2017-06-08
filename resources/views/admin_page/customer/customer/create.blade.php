@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Создание</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.customer.customers.index') }}">Список клиентов</a></li>
                <li class="breadcrumb-item active">Создание клиента</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a class="btn pull-right hidden-sm-down btn-success" href="{{ route('admin.customer.customers.create') }}">
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
                    <h6 class="card-subtitle">Создание клиента</h6>

                    <form class="form" action="{{ route('admin.customer.customers.store') }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">

                        <div class="form-group m-t-40 row">
                            <label for="first_name" class="col-2 col-form-label">Имя клиента</label>
                            <div class="col-10">
                                <input name="first_name" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="last_name" class="col-2 col-form-label">Фамилия клиента</label>
                            <div class="col-10">
                                <input name="last_name" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="email" class="col-2 col-form-label">E-mail клиента</label>
                            <div class="col-10">
                                <input name="email" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="phone" class="col-2 col-form-label">Телефон клиента</label>
                            <div class="col-10">
                                <input name="phone" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inlineFormCustomSelect" class="col-2 col-form-label">Группа клиентов</label>
                            <div class="col-10">
                                <select name="group_id" class="custom-select col-12" id="inlineFormCustomSelect">
                                    @foreach($groups as $group)
                                        <option value="{{$group->id}}">{{$group->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="active" class="col-2 col-form-label">Активировать</label>
                            <div class="col-10">
                                <div class="checkbox">
                                    <input type="checkbox"
                                           name="active"
                                           value="1"
                                           checked
                                           class="activated_clients_group js-switch"
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
    </div><!-- row -->

@endsection