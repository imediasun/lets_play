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
                <h3 class="text-themecolor m-b-0 m-t-0">Названия сделок</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Названия сделок</li>
                </ol>
            </div>
            <div class="col-md-6 col-4 align-self-center">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                <button class="btn pull-right hidden-sm-down btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="mdi mdi-plus-circle"></i> Создать</button>




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
                        <h4 class="card-title">Список названия сделок</h4>
                        <h6 class="card-subtitle">Информация о сделках</h6>
                        <div class="table-responsive m-t-40">
                            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    
                                    <th>Название сделки</th>
                                    <th>Описание</th>
                                    <th class="min-tablet">Редактировать</th>
                                    <th class="min-desktop">Удалить</th>

                                    
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                foreach ($deals_names as $deal_name) {
                                    ?>
                                    <div class="row rower">
                                        
                                    <tr>
                                        <td><?php echo $deal_name->deal_name; ?></td>
                                        <td><?php echo $deal_name->description; ?></td>
                                        <td width="250px">

                                            <button class="btn pull-center hidden-sm-down btn-success" data-toggle="modal" data-target="#editModal_<?php echo $deal_name->id;?>" data-whatever="@mdo"><i class="icon-pencil"></i> Редактировать</button>

                                        </td>

                                        <td>
                                            <input type="hidden" class="user_id" name="user_id"
                                                   value="<?php echo $deal_name->id; ?>">
                                            <button class="delete_btn btn btn-danger btn-icon icon-lg fa fa-times"></button>
                                        </td>


                                    </tr>
                                    </div>

                                    <div class="modal fade" id="editModal_<?php echo $deal_name->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel1">Редактировать сделку</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="/admin/edit_deal">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?php echo $deal_name->id; ?>">
                                                            <label for="recipient-name" class="control-label">Название сделки:</label>
                                                            <input type="text" name="name" value="<?php echo $deal_name->deal_name; ?>" class="form-control" id="recipient-name1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="control-label">Описание:</label>
                                                            <textarea class="form-control" name="description" id="message-text1"><?php echo $deal_name->description; ?></textarea>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Принять изменения</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <?php
                                }
                                ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>


                </div>


        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Новая сделка</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/admin/add_deal">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Название сделки:</label>
                                <input type="text" name="name" class="form-control" id="recipient-name1">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label">Описание:</label>
                                <textarea class="form-control" name="description" id="message-text1"></textarea>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Принять</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>






































