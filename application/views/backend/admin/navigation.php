    <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
            
                    </li>
                    <li class="user-pro">

                        <?php
                            $key = $this->session->userdata('login_type') . '_id';
                            $face_file = 'uploads/' . $this->session->userdata('login_type') . '_image/' . $this->session->userdata($key) . '.jpg';
                            if (!file_exists($face_file)) {
                                $face_file = 'uploads/default.jpg';                                 
                            }
                            ?>

                    
                        <ul class="nav nav-second-level">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>


     <!---  Permission for Admin Dashboard starts here ------>
        <?php $check_admin_permission = $this->db->get_where('admin_role', array('admin_id' => $this->session->userdata('login_user_id')))->row()->dashboard;?>
        <?php if($check_admin_permission == '1'):?>
            <li> <a href="<?php echo base_url();?>admin/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('Dashboard') ;?></span></a> </li>
        <?php endif;?> 
    <!---  Permission for Admin Dashboard ends here ------>
                    
    
                   




    <!---  Permission for Admin Manage Employee starts here ------>
    <?php $check_admin_permission = $this->db->get_where('admin_role', array('admin_id' => $this->session->userdata('login_user_id')))->row()->manage_employee;?>
    <?php if($check_admin_permission == '1'):?> 

        <li class="staff"> <a href="javascript:void(0);" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-angle-double-right p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('Manage Employees');?><span class="fa arrow"></span></span></a>
        
                        <ul class=" nav nav-second-level<?php
            if ($page_name == 'teacher' ||
                    $page_name == 'librarian'|| $page_name == 'hrm'||
                    $page_name == 'accountant'||
                    $page_name == 'hostel')
                echo 'opened active';
            ?> ">



                        
            <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>admin/teacher">
                <i class="fa fa-angle-double-right p-r-10"></i>
                     <span class="hide-menu"><?php echo get_phrase('teachers'); ?></span>
                </a>
            </li>

                    


            <li class="<?php if ($page_name == 'librarian') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>admin/librarian">
                <i class="fa fa-angle-double-right p-r-10"></i>
                      <span class="hide-menu"><?php echo get_phrase('librarians'); ?></span>
                </a>
            </li>





            <li class="<?php if ($page_name == 'accountant') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>admin/accountant">
                <i class="fa fa-angle-double-right p-r-10"></i>
                      <span class="hide-menu"><?php echo get_phrase('accountants'); ?></span>
                </a>
            </li>



           

     
                 </ul>
    </li>
    <?php endif;?> <!---  Permission for Admin Manage Employee ends here ------>






    <!---  Permission for Admin Manage Student starts here ------>
    <?php $check_admin_permission = $this->db->get_where('admin_role', array('admin_id' => $this->session->userdata('login_user_id')))->row()->manage_student;?>
    <?php if($check_admin_permission == '1'):?>          
                
        <li class="student"> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-users p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('manage_students');?><span class="fa arrow"></span></span></a>
        
                        <ul class=" nav nav-second-level<?php
            if ($page_name == 'new_student' ||
                    $page_name == 'student_class' ||
                    $page_name == 'student_information' ||
                    $page_name == 'view_student' ||
                    $page_name == 'searchStudent')
                echo 'opened active has-sub';
            ?> ">


                        
                                       
                     <li class="<?php if ($page_name == 'student_information' || $page_name == 'student_information' || $page_name == 'view_student') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/student_information">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                              <span class="hide-menu"><?php echo get_phrase('list_students'); ?></span>
                        </a>
                    </li>


    
        
     
                 </ul>
    </li>
    <?php endif;?> <!---  Permission for Admin Manage Student ends here ------>





    <!---  Permission for Admin Manage Attendance starts here ------>
    <?php $check_admin_permission = $this->db->get_where('admin_role', array('admin_id' => $this->session->userdata('login_user_id')))->row()->manage_attendance;?>
    <?php if($check_admin_permission == '1'):?> 

        <li class="attendance"> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-hospital-o p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('manage_attendance');?><span class="fa arrow"></span></span></a>
        
                        <ul class=" nav nav-second-level<?php
            if ($page_name == 'manage_attendance' || $page_name == 'staff_attendance' ||
                    $page_name == 'attendance_report')
                echo 'opened active';
            ?>">
                        

                    <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/manage_attendance/<?php echo date("d/m/Y"); ?>">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                              <span class="hide-menu"><?php echo get_phrase('mark_attendance'); ?></span>
                        </a>
                    </li>


                    <li class="<?php if ($page_name == 'attendance_report') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/attendance_report">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                              <span class="hide-menu"><?php echo get_phrase('view_attendance'); ?></span>
                        </a>
                    </li>

                
                 </ul>
                </li>
            <?php endif;?> <!---  Permission for Admin Manage Attendance ends here ------>
                
                



    



    

                
        <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-university p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('class_information');?><span class="fa arrow"></span></span></a>
        
            <ul class=" nav nav-second-level<?php
            if ($page_name == 'class' ||
                    $page_name == 'section' ||
                    $page_name == 'class_routine')
                echo 'opened active';
            ?>">


              
                    <li class="<?php if ($page_name == 'class_routine_add' ) echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>admin/class_routine_add/">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                             <span class="hide-menu"><?php echo get_phrase('Add Timetable'); ?> </span>
                        </a>
                    </li>
                    
                     
             
           
                 </ul>
                </li>

                



                         <li class="<?php if ($page_name == 'subject') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>subject/subject/">
                            <i class="fa fa-book p-r-10"></i>
                                 <span class="hide-menu"><?php echo get_phrase('manage_subjects'); ?></span>
                            </a>
                        </li>

         
         <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-medkit p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('manage_exams');?><span class="fa arrow"></span></span></a>
        
        <ul class=" nav nav-second-level<?php
        if ($page_name == 'submit_exam' || $page_name == 'grade' ||  $page_name == 'createExamination' || 
            $page_name == 'examQuestion') echo 'opened active';
        ?>">
                    
    
                    <li class="<?php if ($page_name == 'examQuestion') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/examQuestion">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                           <span class="hide-menu"><?php echo get_phrase('question_paper'); ?></span>
                        </a>
                    </li>

                    <!--<li class="<?php if ($page_name == 'grade') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/grade">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                           <span class="hide-menu"><?php echo get_phrase('exam_grades'); ?></span>
                        </a>
                    </li>-->

                    <li class="<?php if ($page_name == 'createExamination') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/createExamination">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                           <span class="hide-menu"><?php echo get_phrase('Add Examination'); ?></span>
                        </a>
                    </li>

     
                 </ul></span>
                </li>


           
                    
                    
        
                    
                    
                                    
                   

        <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-book p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('manage_library');?><span class="fa arrow"></span></span></a>
        
                        <ul class=" nav nav-second-level<?php
            if ($page_name == 'book' ||
                    $page_name == 'publisher' ||
                    $page_name == 'search_student' ||
                    $page_name == 'book_category' || $page_name == 'request_book' ||
                    $page_name == 'author' )
                echo 'opened active';
            ?>"><span class="hide-menu">Hostel Information<span class="fa arrow"></span></span>


        
                 <li class="<?php if ($page_name == 'book') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>admin/book">
                <i class="fa fa-angle-double-right p-r-10"></i>
                   <span class="hide-menu"><?php echo get_phrase('master_data'); ?></span>
                </a>
            </li>


                    <li class="<?php if ($page_name == 'publisher') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/publisher">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('book_publisher'); ?></span>
                        </a>
                    </li>

                    
                    <li class="<?php if ($page_name == 'book_category') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/book_category">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('book_category'); ?></span>
                        </a>
                    </li>

                    
                    <li class="<?php if ($page_name == 'author') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/author">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('book_author'); ?></span>
                        </a>
                    </li>
 
<!--
                    <li class="<?php if ($page_name == 'search_student') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/search_student">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('register_student'); ?></span>
                        </a>
                    </li>

                    <li class="<?php if ($page_name == 'request_book') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/request_book">
                            <i class="fa fa-angle-double-right p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('request_book'); ?></span>
                        </a>
                    </li>
-->

                 </ul>
                </li>
                
        
                
                
           
                
            <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-car p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('transportation');?><span class="fa arrow"></span></span></a>
        
                        <ul class=" nav nav-second-level<?php
            if ($page_name == 'transport' ||
                    $page_name == 'transport_route' ||
                    $page_name == 'vehicle' )
                echo 'opened active';
            ?>">
                

        
                <li class="<?php if ($page_name == 'transport') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>transportation/transport">
                <i class="fa fa-angle-double-right p-r-10"></i>
                   <span class="hide-menu"><?php echo get_phrase('transports'); ?></span>
                </a>
            </li>


                    <li class="<?php if ($page_name == 'transport_route') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>transportation/transport_route">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('transport_route'); ?></span>
                        </a>
                    </li>


                    
                     <li class="<?php if ($page_name == 'vehicle') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>transportation/vehicle">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('manage_vehicle'); ?></span>
                        </a>
                    </li>

     
                 </ul>
                </li>

        

                
        <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-bar-chart-o p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('generate_reports');?><span class="fa arrow"></span></span></a>
        
                        <ul class=" nav nav-second-level">  
   
            
                <li class="<?php if ($page_name == 'classAttendanceReport') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>report/classAttendanceReport">
                        <i class="fa fa-angle-double-right p-r-10"></i>
                             <span class="hide-menu"><?php echo get_phrase('Attendance Report'); ?></span>
                        </a>
                </li>

                 </ul>
                </li>


        <?php $checking_level = $this->db->get_where('admin', array('admin_id' => $this->session->userdata('login_user_id')))->row()->level;?>
        <?php if($checking_level == '1'):?>
        <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-cubes p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('role_managements');?><span class="fa arrow"></span></span></a>
        
            <ul class=" nav nav-second-level<?php
                        if ($page_name == 'newAdministrator') echo 'opened active'; ?>">

                        <li class="<?php if ($page_name == 'admin_add') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/newAdministrator">
                            <i class="fa fa-angle-double-right p-r-10"></i>
                                 <span class="hide-menu"><?php echo get_phrase('new_admin'); ?></span>
                            </a>
                        </li>

     
                 </ul>
            </li>
        <?php endif;?>

        <?php $checking_level = $this->db->get_where('admin', array('admin_id' => $this->session->userdata('login_user_id')))->row()->level;?>
        <?php if($checking_level == '2'):?>
       

                        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/manage_profile">
                            <i class="fa fa-gears p-r-10"></i>
                                 <span class="hide-menu"><?php echo get_phrase('manage_profile'); ?></span>
                            </a>
                        </li>
        <?php endif;?>


                <li class="">
                        <a href="<?php echo base_url(); ?>login/logout">
                        <i class="fa fa-sign-out p-r-10"></i>
                             <span class="hide-menu"><?php echo get_phrase('Logout'); ?></span>
                        </a>
                </li>
                  
                  
                </ul>
            </div>
        </div>
<!-- Left navbar-header end -->