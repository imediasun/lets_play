<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"><img src="/assets/images/users/1.jpg" alt="user"/></div>
            <!-- User profile text-->
            <div class="profile-text"><a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown"
                                         role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe <span
                        class="caret"></span></a>
                <div class="dropdown-menu animated flipInY">
                    <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                    <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>


                    <div class="dropdown-divider"></div>
                    <a href=""
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                       class="dropdown-item">
                        <i class="fa fa-power-off"></i> Logout
                    </a>
                    <form id="logout-form" action="<?php echo url('/logout') ?>" method="POST" style="display: none;">
                        <?php echo csrf_field() ?>
                    </form>


                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <?php

                class Recursion
                {
                    public $level;
                    public $lang = 'en';

                    public function get_cat($menu)
                    {

                        if (!$menu) {
                            return NULL;
                        }
                        $arr_cat = array();
                        if (count($menu) != 0) {

                            //В цикле формируем массив

                            foreach ($menu as $key => $row) {

                                //Формируем массив где ключами являются адишники на родительские категории
                                if (empty($arr_cat[$row->parent_id])) {
                                    $arr_cat[$row->parent_id] = array();
                                }
                                $arr_cat[$row->parent_id][] = $row;
                            }


                            //возвращаем массив
                            return $arr_cat;
                        }
                    }


                    //вывод каталогa с помощью рекурсии
                    public function view_cat($arr, $parent_id = 0, $level)
                    {


                        //Условия выхода из рекурсии
                        if (empty($arr[$parent_id])) {
                            return;
                        }
                        if ($parent_id !== 0) {
                            echo '
                                <ul class="list-unstyled">';
                        }
                        //перебираем в цикле массив и выводим на экран
                        for ($i = 0; $i < count($arr[$parent_id]); $i++) {

                            //проверим в базе есть ли потомок у категории
                            $arrow = DB::table('super_admin_categories')->where('parent_id', $arr[$parent_id][$i]->id)
                                ->get();
                            if (count($arrow) > 0) {

                                if ($parent_id == 0) {
                                    echo '<li class="has_sub">';
                                    echo '<a class="has-arrow waves-effect"> <i class="mdi mdi-gauge"></i>';


                                    echo '<span class="hide-menu">' . $arr[$parent_id][$i]->name . '</span>
                                    </a>';
                                }


                                if ($parent_id !== 0) {
                                    echo '<li class="has_sub"> 
                                    <a href="' . $arr[$parent_id][$i]->link . '" class="has-arrow waves-effect"> <i class="mdi mdi-gauge"></i>
                                    <span >' . $arr[$parent_id][$i]->name . '</span> 
                                    </a>
                                     ';

                                }


                            } else {

                                if ($parent_id == 0) {
                                    echo '<li class="has_sub">';
                                    echo '<a class="waves-effect"><i class="mdi mdi-gauge"></i> ';
                                    echo '<span class="hide-menu">' . $arr[$parent_id][$i]->name . '</span>
                                     </a>';
                                }


                                if ($parent_id !== 0) {
                                    echo '<li class="has_sub"> 
                        <a href="' . $arr[$parent_id][$i]->link . '" class="waves-effect"> 
                        <span >' . $arr[$parent_id][$i]->name . '</span> 
                        </a>
                         ';

                                }

                            }


                            //рекурсия - проверяем нет ли дочерних категорий
                            $this->view_cat($arr, $arr[$parent_id][$i]->id, $level + 1);
                            echo '</li> ';
                        }
                        if ($parent_id !== 0) {
                            echo '</ul>
                            ';
                        }
                    }
                }

                $rec = new Recursion;
                $result = $rec->get_cat($menu);
                //Выводи каталог на экран с помощью рекурсивной функции

                $rec->view_cat($result, 0, 0);

                ?>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->





















































