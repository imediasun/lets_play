@extends('admin_page.layout.index')

@section('content')

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Редактирование</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.order.orders.index') }}">Список заказов</a></li>
                <li class="breadcrumb-item active">Редактирование</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a class="btn pull-right hidden-sm-down btn-success" href="{{ route('admin.order.orders.create') }}">
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
                    <h6 class="card-subtitle">Редактирование</h6>

                    <form class="form" action="{{ route('admin.order.orders.update', $order->id) }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="PATCH">

                        <input name="customer_id" type="hidden" value="1">

                        <div class="form-group m-t-40 row">
                            <label for="quantity" class="col-2 col-form-label">Количество</label>
                            <div class="col-10">
                                <input name="quantity" type="text" class="form-control" value="{{$order->quantity}}" id="quantity">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="total" class="col-2 col-form-label">Итого</label>
                            <div class="col-10">
                                <input name="total" type="text" class="form-control" value="{{$order->total}}" id="total">
                            </div>
                        </div>

                        <div class="form-group m-t-40 row">
                            <label for="total_remains" class="col-2 col-form-label">К оплате</label>
                            <div class="col-10">
                                <input name="total_remains" type="text" class="form-control" value="{{$order->total_remains}}" id="total_remains">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status_id" class="col-2 col-form-label">Статус заказа</label>
                            <div class="col-10">
                                <select name="status_id" class="custom-select col-12" id="status_id">
                                    <?php foreach ($selStatuses as $selID => $selStatus): ?>
                                    <option value="<?= $selID ?>" <?= ($selID == $order->status_id) ? 'selected' : '' ?>>
                                        <?= $selStatus ?>
                                    </option>
                                    <?php endforeach ?>
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