@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Редактирование</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.customer.customers.index') }}">Список клиентов</a></li>
                <li class="breadcrumb-item active">Редактирование клиента</li>
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
                    <h4 class="card-title">Редактирование</h4>
                    <h6 class="card-subtitle">Редактирование клиента</h6>

                    <form class="form" action="{{ route('admin.customer.customers.update', $customer->id) }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group m-t-40 row">
                            <label for="first_name" class="col-2 col-form-label">Имя клиента</label>
                            <div class="col-10">
                                <input name="first_name" type="text" class="form-control" value="{{$customer->first_name}}">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="last_name" class="col-2 col-form-label">Фамилия клиента</label>
                            <div class="col-10">
                                <input name="last_name" type="text" class="form-control" value="{{$customer->last_name}}">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="email" class="col-2 col-form-label">E-mail клиента</label>
                            <div class="col-10">
                                <input name="email" type="text" class="form-control" value="{{$customer->email}}">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="phone" class="col-2 col-form-label">Телефон клиента</label>
                            <div class="col-10">
                                <input name="phone" type="text" class="form-control" value="{{$customer->phone}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="group_id" class="col-2 col-form-label">Группа клиентов</label>
                            <div class="col-10">
                                <select name="group_id" class="custom-select col-12" id="group_id">
                                    @foreach($sel_groups as $id => $name)
                                        <option value="{{ $id }}" {{ ($id == $customer->group_id) ? 'selected' : '' }}>
                                            {{ $name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact_type_id" class="col-2 col-form-label">Тип контакта</label>
                            <div class="col-10">
                                <select name="contact_type_id" class="custom-select col-12" id="contact_type_id">
                                    @foreach ($sel_contact_types as $id => $type)
                                        <option value="{{ $id }}" {{ ($id == $customer->contact_type_id) ? 'selected' : '' }}>
                                            {{ $type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact_source_id" class="col-2 col-form-label">Источник контакта</label>
                            <div class="col-10">
                                <select name="contact_source_id" class="custom-select col-12" id="contact_source_id">
                                    @foreach ($sel_contact_sources as $id => $source)
                                        <option value="{{ $id }}" {{ ($id == $customer->contact_source_id) ? 'selected' : '' }}>
                                            {{ $source }}
                                        </option>
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