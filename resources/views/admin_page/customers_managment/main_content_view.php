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
                <h3 class="text-themecolor m-b-0 m-t-0">User Managment</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Table Data table</li>
                </ol>
            </div>
            <div class="col-md-6 col-4 align-self-center">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
                <div class="dropdown pull-right m-r-10 hidden-sm-down">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> January 2017 </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">February 2017</a> <a class="dropdown-item" href="#">March 2017</a> <a class="dropdown-item" href="#">April 2017</a> </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">User Managment</h4>
                        <h6 class="card-subtitle">Data table example</h6>
                        <div class="table-responsive m-t-40">
                            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th class="min-tablet">Role</th>
                                    <th class="min-tablet">Date of registration</th>
                                    <th class="min-desktop">Delete</th>
                                    <th class="min-desktop">Active</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                foreach ($users as $user) {
                                    ?>
                                    <tr>
                                        <td><?php echo $user['original']['name']; ?></td>
                                        <td><?php echo $user['original']['email']; ?></td>
                                        <td width="250px">
                                            <input type="hidden" class="user_id" name="user_id"
                                                   value="<?php echo $user['original']['id']; ?>">
                                            <select style="width:250px;height:30px" class="stl">
                                                <?php foreach ($roles as $role) {
                                                    $st = isset($user->roles['0']) ? $user->roles['0'] : false;

                                                    if ($st) {
                                                        if ($user->roles['0']['original']['id'] == $role['original']['id']) {
                                                            ?>
                                                            <option selected value=" <?php echo $role['original']['id'] ?>"><?php echo $role['original']['name'] ?></option>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <option value="<?php echo $role['original']['id'] ?>"> <? echo $role['original']['name'] ?></option>
                                                            <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </td>
                                        <td><?php echo $user['original']['created_at']; ?></td>
                                        <td>
                                            <input type="hidden" class="user_id" name="user_id"
                                                   value="<?php echo $user['original']['id']; ?>">
                                            <button class="delete_btn btn btn-danger btn-icon icon-lg fa fa-times"></button>
                                        </td>
                                        <td>
                                            <?php
                                            if ($user['original']['activated'] == 1) {
                                                echo 'Activated';
                                            } else {
                                                echo 'Not Activated';
                                            }
                                            ?>
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
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->




































