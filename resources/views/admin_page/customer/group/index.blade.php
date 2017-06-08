@extends('admin_page.layout.index')

@section('content')

<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Группы клиентов</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('super_admin') }}">Главная</a></li>
            <li class="breadcrumb-item active">Группы клиентов</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a class="btn pull-right hidden-sm-down btn-success" href="{{route('admin.customer.groups.create') }}">
            <i class="mdi mdi-plus-circle"></i>
            Создать
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Группы клиентов</h4>
                <h6 class="card-subtitle">Список групп клиентов</h6>
                <div class="table-responsive m-t-40">

                    <table id="demo-dt-basic" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Название группы</th>
                            <th class="min-tablet">Описание</th>
                            <th class="min-tablet">Активация</th>
                            <th class="min-desktop">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($groups as $group)
                            <tr>
                                <td>{{ $group->name }}</td>
                                <td>{{ $group->description }}</td>
                                <td><input type="checkbox" {{($group->active == 1) ? 'checked' : ''}} class="status js-switch" data-color="#7460ee" data-id="{{$group->id}}"/></td>
                                <td>
                                    <a class="btn btn-primary btn-icon fa fa-edit"
                                       href="{{ route('admin.customer.groups.edit', ['id' => $group->id]) }}"
                                       data-toggle="tooltip"
                                       data-original-title="Редактировать"
                                    ></a>
                                    <a href="{{ route('admin.customer.groups.destroy', ['id'=>$group->id]) }}" class="delete btn btn-danger btn-icon icon-lg fa fa-times"></a>
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
          url: '{{route('admin.customer.groups.status')}}',
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