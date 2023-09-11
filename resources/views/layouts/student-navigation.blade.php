<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) --> <!-- Begin-->   <!-- 
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

     End-->
    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>

            <!-- <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        {{ __('Users') }}
                    </p>
                </a>
            </li> -->

         <!--   <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">
                    <i class="nav-icon far fa-address-card"></i>
                    <p>
                        {{ __('About us') }}
                    </p>
                </a>
            </li>       -->




            <!-- Main Sidebar Code--> <!-- Begin-->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle nav-icon"></i>
                    <p>
                        Student Profile
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ ('store') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ceate Personal Profile</p>
                            </a>
                        </li>
                    </ul>    
                <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ ('studentinfo') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Personal Information</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ ('current-academic') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Current Academic Progress</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ ('prev-academic') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Previuos Academic History</p>
                        </a>
                    </li>
                </ul>

                
            </li>
            <!-- End-->

            <!-- Begin-->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle nav-icon"></i>
                    <p>
                        Grade Management
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="view-grade" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Grades</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="update-grade" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Update Grades</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="set-grade" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Set Desired Grade</p>
                                </a>
                            </li>
                        </ul>
            </li>
            <!-- End-->

            <!-- Begin-->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle nav-icon"></i>
                    <p>
                        Routine
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="view-routine" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Routine</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="update-routine" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Update Routine</p>
                                </a>
                            </li>
                        </ul>
            </li>
            <!-- End-->


            <!-- Begin-->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle nav-icon"></i>
                    <p>
                        Enrollment
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="selected-course" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Selected Courses</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="avail-course" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Available Courses</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="course-recommendation" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Course Recommendation</p>
                                </a>
                            </li>
                        </ul>
            </li>
            <!-- End-->



            <!-- Begin-->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle nav-icon"></i>
                    <p>
                        Reporting
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="view-report" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Reports</p>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End-->

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->