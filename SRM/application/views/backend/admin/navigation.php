<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="uploads/logo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>	
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>

         <li>   

                <!-- STUDENT INFORMATION -->
                <!-- <li class="<?php if ($page_name == 'counsel_information') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-users"></i> <?php echo get_phrase('counsel'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'counsel_information' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/counsel_information/<?php echo $row['class_id']; ?>">
                                    <span><?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li> -->

         
         <li>   

                <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
                   <a href="<?php echo base_url(); ?>index.php?admin/noticeboard">
                       <i class="entypo-doc-text-inv"></i>
                       <span><?php echo get_phrase('Noticeboard'); ?></span>
                   </a>
        </li>

        <!-- MESSAGE -->
        <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/message">
                <i class="entypo-mail"></i>
                <span><?php echo get_phrase('message'); ?></span>
            </a>
        </li>

        <!-- STUDENT -->
        <li class="">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo get_phrase('File Maintenance'); ?></span>
            </a>
            <ul>
                <!-- STUDENT ADMISSION -->
                <li class="<?php if ($page_name == 'student_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/student_add">
                        <span><i class="entypo-users"></i> <?php echo get_phrase('register_student'); ?></span>
                    </a>
                </li>

                <!-- STUDENT INFORMATION -->
                <li class="<?php if ($page_name == 'student_information') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-users"></i> <?php echo get_phrase('student_information'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/student_information/<?php echo $row['class_id']; ?>">
                                    <span><i class="entypo-dot"></i><?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>



                <!-- STUDENT MARKSHEET -->
                <li class="<?php if ($page_name == 'student_marksheet') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-user"></i> <?php echo get_phrase('student_marksheet'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/student_marksheet/<?php echo $row['class_id']; ?>">
                                    <span><i class="entypo-dot"></i><?php echo get_phrase('class'); ?> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>


                <!-- TEACHER -->
                <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/teacher">
                        <i class="entypo-users"></i>
                        <span><?php echo get_phrase('teacher'); ?></span>
                    </a>
                </li>

                <!-- PARENTS -->
                <li class="<?php if ($page_name == 'parent') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/parent">
                        <i class="entypo-user"></i>
                        <span><?php echo get_phrase('parents'); ?></span>
                    </a>
                </li>

                <!-- CLASS -->
                <li class="<?php
                if ($page_name == 'class' ||
                        $page_name == 'section')
                    echo 'opened active';
                ?> ">
                    <a href="#">
                        <i class="entypo-flow-tree"></i>
                        <span><?php echo get_phrase('class'); ?></span>
                    </a>
                    <ul>
                        <li class="<?php if ($page_name == 'class') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>index.php?admin/classes">
                                <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_classes'); ?></span>
                            </a>
                        </li>
                        <!-- <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>index.php?admin/section">
                                <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_sections'); ?></span>
                            </a>
                        </li> -->
                    </ul>
                </li>

                <!-- SUBJECT -->
                <li class="<?php if ($page_name == 'subject') echo 'opened active'; ?> ">
                    <a href="#">
                        <i class="entypo-docs"></i>
                        <span><?php echo get_phrase('subject'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'subject' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/subject/<?php echo $row['class_id']; ?>">
                                    <span><i class="entypo-dot"></i><?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <!-- CLASS ROUTINE -->
                <!-- <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/class_routine">
                        <i class="entypo-target"></i>
                        <span><?php echo get_phrase('schedule'); ?></span>
                    </a>
                </li> -->

                <!-- DAILY ATTENDANCE -->

                <li class="<?php
                if ($page_name == 'manage_attendance' ||
                        $page_name == 'section')
                    echo 'opened active';
                ?> ">
                    <a href="#">
                        <i class="entypo-chart-area"></i>
                        <span><?php echo get_phrase('Attendance'); ?></span>
                    </a>
                    <ul>

                        <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>index.php?admin/manage_attendance/<?php echo date("d/m/Y"); ?>">
                                <span><i class="entypo-dot"></i><?php echo get_phrase('Student\'s Attendance'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'manage_attendance_teacher') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>index.php?admin/manage_attendance_teacher/<?php echo date("d/m/Y"); ?>">
                                <span><i class="entypo-dot"></i><?php echo get_phrase('Teacher\'s Attendance'); ?></span>
                            </a>
                        </li>

                    </ul>
                
                <!-- EXAMS -->
                <li class="<?php
                if ($page_name == 'exam' ||
                        $page_name == 'grade' ||
                        $page_name == 'marks' ||
                            $page_name == 'exam_marks_sms')
                                echo 'opened active';
                ?> ">
                    <a href="#">
                        <i class="entypo-graduation-cap"></i>
                        <span><?php echo get_phrase('exam'); ?></span>
                    </a>
                    <ul>
                        <li class="<?php if ($page_name == 'exam') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>index.php?admin/exam">
                                <span><i class="entypo-dot"></i> <?php echo get_phrase('exam_list'); ?></span>
                            </a>
                        </li>
                        <li class="<?php if ($page_name == 'grade') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>index.php?admin/grade">
                                <span><i class="entypo-dot"></i> <?php echo get_phrase('exam_grades'); ?></span>
                            </a>
                        </li>
                        <li class="<?php if ($page_name == 'marks') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>index.php?admin/marks">
                                <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_marks'); ?></span>
                            </a>
                        </li>
                        <!-- <li class="<?php if ($page_name == 'exam_marks_sms') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>index.php?admin/exam_marks_sms">
                                <span><i class="entypo-dot"></i> <?php echo get_phrase('send_marks_by_sms'); ?></span>
                            </a>
                        </li> -->
                    </ul>
                </li>

            </ul> 

        <!-- SETTINGS -->
        <li class="<?php
        if ($page_name == 'system_settings' ||
                $page_name == 'manage_language' ||
                    $page_name == 'sms_settings')
                        echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-lifebuoy"></i>
                <span><?php echo get_phrase('settings'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/system_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('general_settings'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'sms_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/sms_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('sms_settings'); ?></span>
                    </a>
                </li>
                <!-- <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/manage_language">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('language_settings'); ?></span>
                    </a>
                </li> -->
            </ul>
        </li>

        <!-- ACCOUNTING SECTION -->
        <li class="<?php
        if ($page_name == 'fee_structure' ||
                $page_name == 'manage_language' ||
                    $page_name == 'sms_settings')
                        echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-lifebuoy"></i>
                <span>Accounting Section</span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'fee_structure') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/fee_structure">
                        <span><i class="entypo-dot"></i> Fee Structure</span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'sms_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/sms_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('sms_settings'); ?></span>
                    </a>
                </li>
                <!-- <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/manage_language">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('language_settings'); ?></span>
                    </a>
                </li> -->
            </ul>
        </li>

    </ul>

</div>