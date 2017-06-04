@extends('admin_page.layout.index')

@section('content')

<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Покупатели</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Список покупателей</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
        <a class="btn pull-right hidden-sm-down btn-success" href="{{route('admin.customer.customers.create') }}">
            <i class="mdi mdi-plus-circle"></i>
            Создать
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Покупатели</h4>
                <h6 class="card-subtitle">Список покупателей</h6>
                <div class="table-responsive m-t-40">
                    <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Покупатель</th>
                            <th class="min-tablet">E-Mail</th>
                            <th class="min-tablet">Группа</th>
                            <th class="min-tablet">Активация</th>
                            <th class="min-desktop">Действие</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->first_name . ' ' . $customer->last_name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->group->name }}</td>
                                <td><input type="checkbox" {{($customer->active == 1) ? 'checked' : ''}} class="status js-switch" data-color="#7460ee" data-id="{{$customer->id}}"/></td>
                                <td>
                                    <a class="btn btn-primary btn-icon fa fa-edit"
                                       href="{{ route('admin.customer.customers.edit', ['id' => $customer->id]) }}"
                                       data-toggle="tooltip"
                                       data-original-title="Редактировать"
                                    ></a>
                                    <a href="{{ route('admin.customer.customers.destroy', ['id'=>$customer->id]) }}" class="delete btn btn-danger btn-icon icon-lg fa fa-times"></a>
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
    $('.delete').on('click', function (e) {
      if (!confirm('Are you sure you want to delete?')) return false;
    e.preventDefault();
      $.post({
          type: 'DELETE',  // destroy Method
          url: $(this).attr("href")
      }).done(function (data) {
          console.log(data);
          location.reload(true);
      });
    });

    $('.status').on('change', function (e) {
      e.preventDefault();
      var item = $(this);
      $.post({
          type: 'PUT',
          url: '{{route('admin.customer.customers.status')}}',
          data: {'id':$(this).data('id')},
          dataType: 'json'
      }).done(function (data) {
          if (data.active == 1) {
            item.attr('checked', 'checked');
          } else {
            item.removeAttr('checked');
          }
      });
    });

} )( jQuery );
</script>
@endsection