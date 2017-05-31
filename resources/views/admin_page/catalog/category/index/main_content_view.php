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
                <h3 class="text-themecolor m-b-0 m-t-0">Категории</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= route('super_admin') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Список категорий</li>
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
                        <h4 class="card-title">Категории</h4>
                        <h6 class="card-subtitle">Список категорий</h6>
                        <div class="table-responsive m-t-40">
                            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Категория</th>
<!--                                    <th class="min-tablet">Активация</th>
-->                                    <th class="min-desktop">Действие</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                foreach ($categories as $category) {
                                    ?>
                                    <tr>
                                        <td><?= $category->name ?></td>
<!--                                        <td>
                                            <?php
/*                                            if ($category->active == 1) {
                                                */?>
                                                <input type="checkbox" checked class="activated_clients_group js-switch" data-color="#7460ee"/>
                                                <?php
/*                                            } else {
                                                */?>
                                                <input type="checkbox" class="activated_clients_group js-switch" data-color="#7460ee"/>
                                                <?php
/*                                            }
                                            */?>
                                        </td>
-->                                        <td>
                                            <a class="btn btn-primary btn-icon fa fa-edit"
                                               href="<?= route('admin.catalog.categories.edit', ['id' => $category->id]) ?>"
                                               data-toggle="tooltip"
                                               data-original-title="Редактировать"
                                            ></a>
                                            <a class="delete_btn btn btn-danger btn-icon fa fa-times"
                                               href="<?= route('admin.catalog.categories.delete', ['id' => $category->id]) ?>"
                                               data-toggle="tooltip"
                                               data-original-title="Delete"
                                            ></a>

                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row -->