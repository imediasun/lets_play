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
                <h3 class="text-themecolor m-b-0 m-t-0">Покупатели</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= route('super_admin') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Список покупателей</li>
                </ol>
            </div>
            <div class="col-md-6 col-4 align-self-center">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                <button class="btn pull-right hidden-sm-down btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="mdi mdi-plus-circle"></i>
                    Создать
                </button>
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
                        <h4 class="card-title">Покупатели</h4>
                        <h6 class="card-subtitle">Список покупателей</h6>
                        <div class="table-responsive m-t-40">
                            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Покупатель</th>
                                    <th class="min-tablet">E-Mail</th>
                                    <th class="min-tablet">Тлефон</th>
                                    <th class="min-tablet">Активация</th>
                                    <th class="min-desktop">Действие</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                foreach ($customers as $customer) {
                                    ?>
                                    <tr>
                                        <td><?= $customer->first_name . ' ' . $customer->last_name ?></td>
                                        <td><?= $customer->email ?></td>
                                        <td><?= $customer->phone ?></td>
                                        <td>
                                            <?php
                                            if ($customer->active == 1) {
                                                ?>
                                                <input type="checkbox" checked class="activated_clients_group js-switch" data-color="#7460ee"/>
                                                <?php
                                            } else {
                                                ?>
                                                <input type="checkbox" class="activated_clients_group js-switch" data-color="#7460ee"/>
                                                <?php
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-icon fa fa-edit"
                                               href="<?= route('admin.customers.edit', ['id' => $customer->id]) ?>"
                                               data-toggle="tooltip"
                                               data-original-title="Редактировать"
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
