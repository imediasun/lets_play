<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Создание</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= route('super_admin') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= route('admin.catalog.categories.index') ?>">Список категорий</a></li>
                    <li class="breadcrumb-item active">Создание категории</li>
                </ol>
            </div>
            <div class="col-md-6 col-4 align-self-center">
                <a class="btn pull-right hidden-sm-down btn-success" href="<?= route('admin.catalog.categories.create') ?>">
                    <i class="mdi mdi-plus-circle"></i>
                    Создать
                </a>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Создание</h4>
                        <h6 class="card-subtitle">Создание категории</h6>
                        <div class="table-responsive m-t-40">
                            <form class="form" action="<?= route('admin.catalog.categories.store') ?>" method="post">
                                <input name="_token" type="hidden" value="<?= csrf_token() ?>">
                                <input name="parent_id" type="hidden" value="0">

                                <div class="form-group m-t-40 row">
                                    <label for="name" class="col-2 col-form-label">Название категории</label>
                                    <div class="col-10">
                                        <input name="name" type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group m-t-40 row">
                                    <label for="description" class="col-2 col-form-label">Описание</label>
                                    <div class="col-10">
                                        <input name="description" type="text" class="form-control" value="">
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
        </div><!-- row -->
