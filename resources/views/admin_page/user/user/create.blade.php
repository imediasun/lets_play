@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Создание</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.user.users.index') }}">Список пользователей</a></li>
                <li class="breadcrumb-item active">Создание</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a class="btn pull-right hidden-sm-down btn-success" href="{{ route('admin.user.users.create') }}">
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
                    <h6 class="card-subtitle">Создание</h6>
                    <form class="form" action="{{ route('admin.user.users.store') }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">

                        <div class="form-group m-t-40 row">
                            <label for="first_name" class="col-2 col-form-label">Имя</label>
                            <div class="col-10">
                                <input name="first_name" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="last_name" class="col-2 col-form-label">Фамилия</label>
                            <div class="col-10">
                                <input name="last_name" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="email" class="col-2 col-form-label">E-mail</label>
                            <div class="col-10">
                                <input name="email" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="name" class="col-2 col-form-label">Логин</label>
                            <div class="col-10">
                                <input name="name" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="password" class="col-2 col-form-label">Пароль</label>
                            <div class="col-10">
                                <input name="password" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="mobile" class="col-2 col-form-label">Телефон</label>
                            <div class="col-10">
                                <input name="mobile" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="add_phone" class="col-2 col-form-label">Доп. Телефон</label>
                            <div class="col-10">
                                <input name="add_phone" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="information" class="col-2 col-form-label">Информация</label>
                            <div class="col-10">
                                <textarea name="information" type="text" class="form-control" rows="5"></textarea>
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