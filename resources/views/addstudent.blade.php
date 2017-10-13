<!doctype html>
<html class="no-js" lang="" ng-app="myApp" ng-cloak> 
 <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>OSMS</title>
        <link rel="icon" type="image/ico" href="ncm/images/fav.png" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <!-- ============================================
        ================= Stylesheets ===================-->
       <link rel="stylesheet" href="ncm/css/bootstrap.min.css">
        <link rel="stylesheet" href="ncm/css/animate.css">
        <link rel="stylesheet" href="ncm/css/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="ncm/css/animsition.min.css">
       
        <link rel="stylesheet" href="ncm/css/main.css">
  <link rel="stylesheet" href="ncm/css/bootstrap-datetimepicker.min.css">

      
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="ncm/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <!--/ modernizr -->

<style>
            .ermsg{
                width: auto;
                height: 2px;
                background-color: transparent;
            }
        </style>


    </head>

    <body id="" class="appWrapper">


        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">

            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">

                     <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="index.html">
                            <img src="ncm/images/lg2.png">
                        </a>
                        <a href="#" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                   

                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">
                    
                        <li class="">
                            <a href="#">
                                <i class="fa fa-comments"></i>
                            </a>
                        </li>
                      
                        <li class="dropdown nav-profile">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/images/user-icn.png" alt="" class="img-circle size-30x30">
                                <span>Admin <i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                                <!--<li>
                                    <a href="#">
                                        <span class="badge bg-greensea pull-right">86%</span>
                                        <i class="fa fa-user"></i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label bg-lightred pull-right">new</span>
                                        <i class="fa fa-check"></i>Tasks
                                    </a>
                                </li>-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-cog"></i>Settings
                                    </a>
                                </li>
                                <!--<li class="divider"></li>-->
                                <!--<li>
                                    <a href="#">
                                        <i class="fa fa-lock"></i>Lock
                                    </a>
                                </li>-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out"></i>Logout
                                    </a>
                                </li>

                            </ul>

                        </li>

                        
                    </ul>
                    <!-- Right-side navigation end -->



                </header>

            </section>
            <!--/ HEADER Content  -->
            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">
                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <aside id="sidebar">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Navigation <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        <ul id="navigation">
                                            <li><a href="index.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                                            <li>
                                             <a href="#"><i class="fa fa-user"></i> <span>School Information</span> </a>
                                                <ul>
                                                    <li><a href="school-information.html"><i class="fa fa-caret-right"></i>School Info</a></li>
                                                    <li><a href="addschool-info.html"><i class="fa fa-caret-right"></i>Add Branch Details</a></li>
                                                    <li><a href="school-settings.html"><i class="fa fa-caret-right"></i>School Settings</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li class="active open">
                                             <a href="#"><i class="fa fa-user"></i> <span>Student</span> </a>
                                                <ul>
                                                    <li><a href="add-student.html"><i class="fa fa-caret-right"></i>Add Student</a></li>
                                                   <!-- <li><a href="student-profile.html"><i class="fa fa-caret-right"></i>Student Profile</a></li>-->
                                                    <li><a href="student-details.html"><i class="fa fa-caret-right"></i> View Student Details</a></li>
                                                    <li><a href="view-summarizationstudent-data.html"><i class="fa fa-caret-right"></i>View Summarization Details</a></li>
                                                    <li><a href="student-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-user-secret"></i> <span>Parents</span></a>
                                                <ul>
                 <!-- <li><a href="addparent-info.html"><i class="fa fa-caret-right"></i>Add Parent </a></li>-->
                 <li><a href="viewparent-details.html"><i class="fa fa-caret-right"></i>View Parent Details</a></li>
                   <li><a href="parent-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                           </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-user-plus"></i> <span>Teachers</span></a>
                                                <ul>
                                                <li><a href="viewteacher-details.html"><i class="fa fa-caret-right"></i>View Teacher Details</a></li>
                                                    
                                                 <li><a href="tech-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                           </ul>
                                            </li>
                                            </li>
                                            <li>
      <a href="#"><i class="fa fa-users"></i> <span>Users</span> </a>
                                                <ul>
                             <li><a href="add-user.html"><i class="fa fa-caret-right"></i>Add User</a></li>
                   <li><a href="view-user.html"><i class="fa fa-caret-right"></i> View User</a></li>
                                      <li><a href="user-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                   
                                                </ul>
                                            </li>
                                            <li>
                            <a role="button" tabindex="0"><i class="fa fa-user"></i> <span>Employee</span></a>
                                                <ul>
         <li><a href="add-employee.html"><i class="fa fa-caret-right"></i> Add Employee</a></li>
           <li><a href="employee-details.html"><i class="fa fa-caret-right"></i>Employee Details</a></li>
                  <li><a href="emp-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                           </li>
                                            <li>
                           <a href="#"><i class="fa fa-sitemap"></i> <span>Class</span></a>
                                                <ul>
                                     <li><a href="addclass"><i class="fa fa-caret-right"></i> Add Class</a></li>
                                     <li><a href="viewclass"><i class="fa fa-caret-right"></i> View Class Details</a></li>
                                     <li><a href="classsettings"><i class="fa fa-caret-right"></i>Class Settings</a></li>
                                     <li><a href="addsection"><i class="fa fa-caret-right"></i> Add Section</a></li>
                                     <!--<li><a href="view-sectiondetails.html"><i class="fa fa-caret-right"></i> View Section Details</a></li>-->
                                     <li><a href="sectionsettings"><i class="fa fa-caret-right"></i>Section Settings</a></li>
          
                                                </ul>
                                            </li>                         <li>
                                                <a href="#"><i class="fa fa-columns"></i> <span>Subjects</span></a>
                                                <ul>
                  <li><a href="addsubject"><i class="fa fa-caret-right"></i>Add Subject</a></li>
                  <li><a href="addchapter"><i class="fa fa-caret-right"></i> Add Chapter</a></li>
                  <li><a href="viewsubject"><i class="fa fa-caret-right"></i>View Subject</a></li>
                  <li><a href="viewchapter"><i class="fa fa-caret-right"></i> View Chapter</a></li>
                  <li><a href="subjectsettings"><i class="fa fa-caret-right"></i>Subject Settings</a></li>
                  <li><a href="chaptersettings"><i class="fa fa-caret-right"></i>Chapter Settings</a></li>
             
             </ul>
                                            </li>
                                            <li>
                 <a href="#"><i class="fa fa-money"></i> <span>Fees</span> </a>
                                                <ul>
             <li><a href="add-acadamic-fee.html"><i class="fa fa-caret-right"></i>Add Academic Fee</a></li>
             <li><a href="add-transport-fee.html"><i class="fa fa-caret-right"></i>Add Transport Fee</a></li>
             <li><a href="books-fee.html"><i class="fa fa-caret-right"></i>Add Book Fee</a></li>
        <li><a href="view-acadamic-fee.html"><i class="fa fa-caret-right"></i> View Academic Fee</a></li>
             <li><a href="view-transport-fee.html"><i class="fa fa-caret-right"></i> View Transport Fee</a></li>
             <li><a href="view-book-fee.html"><i class="fa fa-caret-right"></i>View Book Fee</a></li>
             <li><a href="fee-settings"><i class="fa fa-caret-right"></i>Settings</a></li>


                                                </ul>
                                            </li>
                                            <li>
                                                <a href="add-library.html"><i class="fa  fa-institution "></i> <span>Library</span></a>
                                                <ul>
                     <li><a href="add-books.html"><i class="fa fa-caret-right"></i>Add Books</a></li>
                    <li><a href="view-books.html"><i class="fa fa-caret-right"></i>View Books</a></li>
                    <li><a href="issue-books.html"><i class="fa fa-caret-right"></i>Issue Books</a></li>
                     <li><a href="update-book.html"><i class="fa fa-caret-right"></i>Update Books</a></li>
                                       <li><a href="library-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                            </li>
                <li><a href="#"><i class="fa fa-table"></i> <span>Timetable</span></a>
               <ul>
        <li><a href="#"><i class="fa fa-caret-right"></i>Exam Timetable</a></li>
        <ul>
        <li><a href="add-timetable.html"><i class="fa fa-caret-right"></i>Add Timetable</a></li>
        <li><a href="view-timetable.html"><i class="fa fa-caret-right"></i>View Timetable</a></li>
        </ul>
        </ul>
        <ul>
        <li><a href="#"><i class="fa fa-caret-right"></i>Class Timetable</a></li>
        <ul>
        <li><a href="add-timetable.html"><i class="fa fa-caret-right"></i>Add Timetable</a></li>
        <li><a href="view-timetable.html"><i class="fa fa-caret-right"></i>View Timetable</a></li>
        </ul>
        </ul>
                </li>
                         <li><a href="#"><i class="fa fa-table"></i> <span>Exam</span></a>
                         <ul>
                     <li><a href="add-exam.html"><i class="fa fa-caret-right"></i>Add Exam</a></li>
                    <li><a href="add-marks.html"><i class="fa fa-caret-right"></i>Add Marks</a></li>
                    <li><a href="report-card.html"><i class="fa fa-caret-right"></i>Report Card</a></li>

                              </ul>
                            </li>
                          <li><a href="#"><i class="fa fa-bar-chart-o"></i> <span>Syllabus</span></a>
                          <ul>
                          <li><a href="syllabus-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                          </ul>               
                          </li>

                         <li>
                          <a href="#"><i class="fa fa-home"></i> <span>Hostel</span></a>              
                        <ul> 
                         <li><a href="add-building.html"><i class="fa fa-caret-right"></i>Add Building</a></li>
                        <li><a href="add-room.html"><i class="fa fa-caret-right"></i>Add Room</a></li>               
            <li><a href="room-availability.html"><i class="fa fa-caret-right"></i>Room Availability</a></li>
                        <li><a href="room-allocation.html"><i class="fa fa-caret-right"></i>Room Allocation</a></li>                   
            <li><a href="view-hostel-students.html"><i class="fa fa-caret-right"></i>View Hostel Students</a></li>
                        <li><a href="hostel-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>
                        </ul>   
                        </li>

                         <li>
                         <a href="#"><i class="fa fa-edit"></i> <span>Leave</span></a>
                         <ul>
                         <li><a href="holidays-list.html"><i class="fa fa-caret-right"></i>Holiday List</a></li>
                         <li><a href="request-for-leave.html"><i class="fa fa-caret-right"></i>Request for Leave</a></li>
                         <li><a href="leave-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                         </ul>
                         </li>
                         <li>
                         <a href="#"><i class="fa fa-envelope"></i> <span>Messages</span></a>
                          <ul>
                         <li><a href="message-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                         </ul>
                         </li>
                         <li>
                         <a href="#"><i class="fa fa-pencil"></i> <span>Accounts</span></a>
                         <ul>
                         <li><a href="account-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                         </ul>
                         </li>
                          <li>
                         <a href="#"><i class="fa fa-taxi"></i> <span>Transport</span></a>
                         <ul>
                         <li><a href="transport-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                         </ul>
                         </li>
 
 
                                        </ul>
                                        <!--/ NAVIGATION Content -->
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        

                </aside>                <!--/ SIDEBAR Content -->




                <!-- =================================================
                ================= RIGHTBAR Content ===================
                ================================================== -->
                               <!--/ RIGHTBAR Content -->




            </div>
            <!--/ CONTROLS Content -->




            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-forms-validate">

             


                    <!-- row -->
                    <div class="row">

                        <!-- col -->
                       <!-- <div class="col-md-6">

                            <!-- tile -->
                         <!--   <section class="tile">

                               

                                <!-- tile body -->
                                <div class="tile-body">


                                    <form name="form1" role="form" id="form1">


                                    </form>

                                </div>
                                <!-- /tile body -->

                             
                        <!-- col -->
                        <div class="col-md-12">

                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong style="text-align:center;">Add Student</strong></h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

<!--                                    <p class="text-muted">Inputs in this form validate on submit.</p>
-->
                                    <form name="form" role="form" id="form" autocomplete="on" action="hii.html">

                                        <div class="row">

                                            <div class="form-group col-md-4">
                                                <label for="fname">First Name: </label>
                                                <input type="text" name="fname" ng-model="fname" id="fname" class="form-control" pattern="^[a-zA-Z]{2,}$" required>
                                                <div class="ermsg">
                                                <span style="color: red" ng-show="form.fname.$touched && form.fname.$invalid">
                                                    <span ng-show="form.fname.$error.required">First Name Required</span>
                                                    <span ng-show="!form.fname.$error.required && form.fname.$invalid">'min-2-letters'</span>
                                                </span></div>
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label for="lname">Last Name: </label>
                                                <input type="text" name="lname" ng-model="lname" id="lname" class="form-control" pattern="^[a-zA-Z]{2,}$" required>
                                                 <div class="ermsg">
                                                <span style="color: red" ng-show="form.lname.$touched && form.lname.$invalid">
                                                    <span ng-show="form.lname.$error.required">Last Name Required</span>
                                                    <span ng-show="!form.lname.$error.required && form.lname.$invalid">'min-2-letters'</span>
                                                </span></div>
                                                 
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label for="gender">Gender: </label>
                                               
                                                <select name="gender" ng-model="gender" id="gender" class="form-control mb-10"                                              required>
                                                    <option value="">Select option...</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                                 <div class="ermsg">
                                                <span style="color: red" ng-show="form.gender.$touched && form.gender.$invalid">
                                                    <span ng-show="form.gender.$error.required">Required field</span>
                                                </span></div>
                                               
                                        </div>



                                           <div class="form-group col-md-4">
                                                <label for="dob">DOB: </label>
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" name="dob" id="dob"  required />
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                               
                                        </div>
                                        
                                         <div class="form-group col-md-4">
                                                <label for="class">Class: </label>
                                               
                                                <select name="class" id="class" ng-model="class" class="form-control mb-10"
                                                        
                                                        required>
                                                    <option value="">Select option...</option>
                                                    <option value="foo">I Class</option>
                                                    <option value="bar">II Class</option>
                                                </select>
                                             <div class="ermsg">
                                                <span style="color: red" ng-show="form.class.$touched && form.class.$invalid">
                                                    <span ng-show="form.class.$error.required">Required field</span>
                                                </span></div>
                                               
                                        </div>
                                        <div class="form-group col-md-4">
                                                <label for="doj">DOJ: </label>
                                            <div class='input-group date' id='datetimepicker2'>
                                                <input type='text' class="form-control" name="doj" id="doj"  required />
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                           
                                        </div>
                                        <div style="clear:both;"></div>
                                          <div class="form-group col-md-4">
                                                <label for="bloodgroup">Bloodgroup: </label>
                                               
                                                <select name="bloodgroup" id="bloodgroup" ng-model="bloodgroup" class="form-control mb-10"
                                                        
                                                        required>
                                                    <option value="">Select option...</option>
                                                    <option value="a">A +</option>
                                                    <option value="a">A -</option>
                                                    <option value="b">B +</option>
                                                    <option value="b">B -</option>
                                                    <option value="c">AB +</option>
                                                    <option value="c">AB -</option>
                                                    <option value="c">O +</option>
                                                    <option value="c">O -</option>

                                                </select>
                                              <div class="ermsg">
                                                <span style="color: red" ng-show="form.bloodgroup.$touched && form.bloodgroup.$invalid">
                                                    <span ng-show="form.bloodgroup.$error.required">Required field</span>
                                                </span></div>
                                               
                                        </div>
                                         <div class="form-group col-md-4">
                                                <label for="hobbies">Roll No: </label>
                                               
                                                <input type="text" name="roll_no" id="roll_no" ng-model="roll_no" class="form-control mb-10" required>
                                             <div class="ermsg">
                                                <span style="color: red" ng-show="form.hobbies.$touched && form.hobbies.$invalid">
                                                    <span ng-show="form.hobbies.$error.required">Required field</span>
                                                </span></div>
                                               
                                        </div>
                                         <div class="form-group col-md-4">
                                                <label for="caste">Caste: </label>
                                               
                                                <select name="caste" id="caste" ng-model="caste" class="form-control mb-10" required>
                                                    <option value="">Select option...</option>
                                                    <option value="oc">OC</option>
                                                    <option value="bc">BC</option>
                                                </select>
                                              <div class="ermsg">
                                                <span style="color: red" ng-show="form.caste.$touched && form.caste.$invalid">
                                                    <span ng-show="form.caste.$error.required">Required field</span>
                                                </span></div>
                                               
                                        </div>
                                         <div class="form-group col-md-4">
                                                <label for="religion">Religion: </label>
                                               
                                                <select name="religion" id="religion" ng-model="religion" class="form-control mb-10"
                                                        
                                                        required>
                                                    <option value="">Select option...</option>
                                                    <option value="hindu">Hindu</option>
                                                    <option value="muslim">Muselim</option>
                                                </select>
                                             <div class="ermsg">
                                                <span style="color: red" ng-show="form.religion.$touched && form.religion.$invalid">
                                                    <span ng-show="form.religion.$error.required">Required field</span>
                                                </span></div>
                                               
                                        </div>
                                         <div class="form-group col-md-4">
                                                <label for="uploadphoto">Upload Photo: </label>
                                             
                                                <input type="file" name="uploadphoto" class="form-control" id="uploadphoto" required accept="image/jpeg, image/jpg, image/png">
                                             
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="aadharno">Aadhar No: </label>
                                                <input type="text" name="aadharno" ng-model="aadharno" id="aadharno" class="form-control" placeholder="" maxlength="12" pattern="^\d{12}$"
                                                       data-parsley-trigger="change"
                                                       required>
                                                 <div class="ermsg">
                                                <span style="color: red" ng-show="form.aadharno.$touched && form.aadharno.$invalid">
                                                    <span ng-show="form.aadharno.$error.required">Aadhar Number Required</span>
                                                    <span ng-show="!form.aadharno.$error.required && form.aadharno.$invalid">Enter 12 digit aadhar number</span>
                                                </span></div>
                                            </div>
                                            
                                            <div style="clear:both;"></div>
                                             <div class="form-group col-md-4">
                                                <label for="certificates">Certificates:(optinal) </label>
                                                <input type="file" name="certificates" id="certificates" class="form-control" accept="application/pdf, image/jpeg, image/jpg, image/png" multiple>
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label for="tc">TC:(optional) </label>
                                                <input type="file" name="tc" id="tc" class="form-control" accept="application/pdf, image/jpeg, image/jpg, image/png">
                                            </div>

                                                        <div class="form-group col-md-4">
                                                <label for="email">Email: </label>
                                                <input type="email" id="email" ng-model="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                                       data-parsley-trigger="change"
                                                       required>
                                                <div class="ermsg">
                                                <span style="color: red" ng-show="form.email.$touched && form.email.$invalid">
                                                    <span ng-show="form.email.$error.required">Email Required</span>
                                                    <span ng-show="!form.email.$error.required && form.email.$invalid">Enter valid email</span>
                                                </span></div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="dob">Hobbies: </label>
                                            <div class='input-group' id=''>
                                                <textarea class="form-control" name="hobbies" id="hobbies"></textarea>
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                               
                                        </div>
                                            
                                            <div style="clear:both">
                                            </div>
                                            <h4 style="text-align:center"> Parent/Guardian Details</h4>
                                        
                                            <div class="form-group col-md-4">
                                                <label for="pfname">First Name: </label>
                                                <input type="text" name="pfname" id="pfname" ng-model="pfname" class="form-control" pattern="^[a-zA-Z]{2,}$" required>
                                                <div class="ermsg">
                                                <span style="color: red" ng-show="form.pfname.$touched && form.pfname.$invalid">
                                                    <span ng-show="form.pfname.$error.required">First Name Required</span>
                                                    <span ng-show="!form.pfname.$error.required && form.pfname.$invalid">'min-2-letters'</span>
                                                </span></div>
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label for="plname">Last Name: </label>
                                                <input type="text" name="plname" id="plname" ng-model="plname" class="form-control" pattern="^[a-zA-Z]{2,}$" required>
                                                 <div class="ermsg">
                                                <span style="color: red" ng-show="form.plname.$touched && form.plname.$invalid">
                                                    <span ng-show="form.plname.$error.required">First Name Required</span>
                                                    <span ng-show="!form.plname.$error.required && form.plname.$invalid">'min-2-letters'</span>
                                                </span></div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="pgender">Gender: </label>
                                               
                                                <select name="pgender" id="pgender" ng-model="pgender" class="form-control mb-10"
                                                        
                                                        required>
                                                    <option value="">Select option...</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                                <div class="ermsg">
                                                <span style="color: red" ng-show="form.pgender.$touched && form.pgender.$invalid">
                                                    <span ng-show="form.pgender.$error.required">Required field</span>
                                                </span></div>
                                               
                                        </div>
                                        
                                        <div style="clear:both;"></div>
                                            <div class="form-group col-md-4">
                                                <label for="prelation">Relation With Student: </label>
                                               
                                                <select name="prelation" id="prelation" ng-model="prelation" class="form-control mb-10"
                                                        
                                                        required>
                                                    <option value="">Select option...</option>
                                                    <option value="foo">Mother</option>
                                                    <option value="bar">Father</option>
                                                    <option value="bar">Guardian</option>

                                                </select>
                                                <div class="ermsg">
                                                <span style="color: red" ng-show="form.prelation.$touched && form.prelation.$invalid">
                                                    <span ng-show="form.prelation.$error.required">Required field</span>
                                                </span></div>
                                               
                                        </div>


                                           <div class="form-group col-md-4">
                                                <label for="phone">Contact No: </label>
                                                <input type="tel" name="phone" ng-model="phone" id="phone" class="form-control" pattern="^[7-9]{1}[0-9]{9}$" maxlength="10" required>
                                               <div class="ermsg">
                                                <span style="color: red" ng-show="form.phone.$touched && form.phone.$invalid">
                                                    <span ng-show="form.phone.$error.required">Phone Number Required</span>
                                                    <span ng-show="!form.phone.$error.required && form.phone.$invalid">Enter 10 digit phone number</span>
                                                </span></div>
                                            </div>
  
                                           <div class="form-group col-md-4">
                                                <label for="pemail">Email: </label>
                                                <input type="pemail" id="pemail" ng-model="pemail" name="pemail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                                       data-parsley-trigger="change"
                                                       required>
                                                <div class="ermsg">
                                                <span style="color: red" ng-show="form.pemail.$touched && form.pemail.$invalid">
                                                    <span ng-show="form.pemail.$error.required">Email Required</span>
                                                    <span ng-show="!form.pemail.$error.required && form.pemail.$invalid">Enter valid pemail</span>
                                                </span></div>
                                            </div>
                                            
                                        <div style="clear:both;"></div>
                                             <div class="form-group col-md-4">
                                                <label for="paadharno">Aadhar No: </label>
                                                <input type="text" name="paadharno" ng-model="paadharno" id="paadharno" class="form-control" placeholder="" maxlength="12" pattern="^\d{12}$"
                                                       data-parsley-trigger="change"
                                                       required>
                                                 <div class="ermsg">
                                                <span style="color: red" ng-show="form.paadharno.$touched && form.paadharno.$invalid">
                                                    <span ng-show="form.paadharno.$error.required">Aadhar Number Required</span>
                                                    <span ng-show="!form.paadharno.$error.required && form.paadharno.$invalid">Enter 12 digit aadhar number</span>
                                                </span></div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="panno">Pan No: </label>
                                                <input type="text" name="panno" ng-model="panno" id="panno" class="form-control" placeholder="" pattern="^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}$" maxlength="10"
                                                       data-parsley-trigger="change"
                                                       required>
                                                <div class="ermsg">
                                                <span style="color: red" ng-show="form.panno.$touched && form.panno.$invalid">
                                                    <span ng-show="form.panno.$error.required">Pancard Number Required</span>
                                                    <span ng-show="!form.panno.$error.required && form.panno.$invalid">Enter 10 digit panno</span>
                                                </span></div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="qualification">Qualification:(Optional) </label>
                                               <select name="f2" class="form-control mb-10">
                                                    <option value="">Select option...</option>
                                                    <option value="foo">Graduate</option>
                                                    <option value="bar">Postgraduation</option>

                                                </select>
                                            </div>
                                            
                                        <div style="clear:both;"></div>
                                          
                                          
                                                      <div class="form-group col-md-4">
                                                <label for="puploadphoto">Upload Photo: </label>
                                                <input type="file" name="puploadphoto" id="puploadphoto" class="form-control" placeholder="Email" accept="image/jpeg, image/jpg, image/png" required>
                                            </div>
                                            
                                            
                                            <!-- <div class="form-group col-md-4">
                                                <label for="certificates">Certificates:(optinal) </label>
                                                <input type="file" name="fc11" class="form-control" placeholder="Email"
                                                       
                                                       required>
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label for="certificates">TC:(optional) </label>
                                                <input type="file" name="fc11" class="form-control" placeholder="Email"
                                                       
                                                       required>
                                            </div>-->
                                            
                                             <div class="form-group col-md-4">
                                                <label for="bloodgroup">Bloodgroup:(Optional) </label>
                                               
                                                <select name="f2" class="form-control mb-10">
                                                    <option value="">Select option...</option>
                                                    <option value="a">A +</option>
                                                    <option value="a">A -</option>
                                                    <option value="b">B +</option>
                                                    <option value="b">B -</option>
                                                    <option value="c">AB +</option>
                                                    <option value="c">AB -</option>
                                                    <option value="c">O +</option>
                                                    <option value="c">O -</option>

                                                </select>
                                               
                                        </div>
                                        <div class="form-group col-md-4">
                                                <label for="pcaste">Caste: </label>
                                               
                                                <select name="pcaste" id="pcaste" ng-model="pcaste" class="form-control mb-10"
                                                        
                                                        required>
                                                    <option value="">Select option...</option>
                                                    <option value="oc">OC</option>
                                                    <option value="bc">BC</option>
                                                </select>
                                            <div class="ermsg">
                                                <span style="color: red" ng-show="form.pcaste.$touched && form.pcaste.$invalid">
                                                    <span ng-show="form.pcaste.$error.required">Required field</span>
                                                </span></div>
                                               
                                        </div>
                                        <div style="clear:both;"></div>

                                              <div class="form-group col-md-4">
                                            <label for="preaddr">Present Address: </label>
                                            <textarea class="form-control" rows="6" name="preaddr" id="preaddr" placeholder="Type your address" ng-model="preaddr" required></textarea>
                                                  <div class="ermsg">
                                                <span style="color: red" ng-show="form.preaddr.$touched && form.preaddr.$invalid">
                                                    <span ng-show="form.preaddr.$error.required">Required field</span>
                                                </span></div>
                                        </div>
                                       
                                        <div class="form-group col-md-4">
                                            <label for="peraddr">Permanent Address: </label>
                                            <textarea class="form-control" rows="6" name="peraddr" id="peraddr" placeholder="Type your address" ng-model="peraddr" required></textarea>
                                            <div class="ermsg">
                                                <span style="color: red" ng-show="form.peraddr.$touched && form.peraddr.$invalid">
                                                    <span ng-show="form.peraddr.$error.required">Required field</span>
                                                </span></div>
                                        </div>
           
                                        
                                      
                                        </div>
                                      
                                       <!-- <div class="form-group">
                                            <label for="website">Website: </label>
                                            <input type="text" name="website" id="website" class="form-control" placeholder="http://" pattern="/(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/">
                                        </div>

                                        <div class="form-group">
                                            <label for="message">Message: </label>
                                            <textarea class="form-control" rows="6" name="message" id="message" placeholder="Type your message" required></textarea>
                                        </div>-->
<div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                                    <!-- SUBMIT BUTTON -->
                                    <button type="submit" class="btn btn-lightred" id="">Add</button>
                                </div>
                                    </form>

                                </div>
                                <!-- /tile body -->

                                <!-- tile footer -->
                                
                                <!-- /tile footer -->

                            </section>
                            <!-- /tile -->


                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                              <!--  <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Type</strong> Validations</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
<!--                                <div class="tile-body">
-->

                                    <form class="form-horizontal" name="form4" role="form" id="form4" data-parsley-validate>

                                      <!--  <div class="form-group">
                                            <label class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" name="fc11" class="form-control" placeholder="Email"
                                                       data-parsley-trigger="change"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Url</label>
                                            <div class="col-sm-9">
                                                <input type="url" name="fc12" class="form-control" placeholder="http://"
                                                       data-parsley-trigger="change"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Digits</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc13" class="form-control" placeholder="Digits"
                                                       data-parsley-trigger="change"
                                                       data-parsley-type="digits"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Numbers</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="fc14" class="form-control" placeholder="Number"
                                                       data-parsley-trigger="change"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Alphanumeric</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc15" class="form-control" placeholder="Alphanumeric"
                                                       data-parsley-trigger="change"
                                                       data-parsley-type="alphanum"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Alpha</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc16" class="form-control" placeholder="Alpha"
                                                       data-parsley-trigger="change"
                                                       pattern="/^[a-zA-Z]+$/"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Date ISO</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc17" class="form-control" placeholder="YYYY-MM-DD"
                                                       data-parsley-trigger="change"
                                                       pattern="/[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])$/"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc18" class="form-control" placeholder="(XXX) XXXX XXX" ng-model="fc18"
                                                       data-parsley-trigger="change"
                                                       pattern="^[\d\+\-\.\(\)\/\s]*$"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Equal</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" id="fc19" name="fc19" class="form-control"
                                                               data-parsley-trigger="change"
                                                               required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="fc20" name="fc20" class="form-control"
                                                               data-parsley-trigger="change"
                                                               data-parsley-equalto="#fc19"
                                                               required>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>-->

                                    </form>

<!--                                </div>
-->                                <!-- /tile body -->

                                <!-- tile footer -->
                              <!--  <div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                                    <!-- SUBMIT BUTTON -->
                                  <!--  <button type="submit" class="btn btn-default" id="form4Submit">Submit</button>
                                </div>
                                <!-- /tile footer -->

                            </section>
                            <!-- /tile -->


                        </div>
                        <!-- /col -->



                    </div>
                    <!-- /row -->

                </div>
                
            </section>
            <!--/ CONTENT -->
        </div>
        <!--/ Application Content -->
        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      
        <script src="ncm/js/bootstrap.min.js"></script>

        <script src="ncm/js/jRespond.min.js"></script>


        <script src="ncm/js/jquery.slimscroll.min.js"></script>

        <script src="ncm/js/jquery.animsition.min.js"></script>

        <script src="ncm/js/screenfull.min.js"></script>

        <script src="ncm/js/moment.min.js"></script>

        <script src="ncm/js/bootstrap-datetimepicker.min.js"></script>


        <script src="ncm/js/main.js"></script>






        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->


<!--for datepicker-->
<script>
            $(window).load(function(){

                $('#datepicker-inline').datetimepicker({
                    inline: true
                });

                $('#datetimepicker1').datetimepicker();
                $('#datetimepicker2').datetimepicker();

             
            });
        </script>
    
   <script>
    angular.module("myApp",[]);
</script>
    <script>
    document.querySelector("#fname").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^a-zA-Z]/g,"");
});
        document.querySelector("#pfname").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^a-zA-Z]/g,"");
});
    document.querySelector("#lname").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^a-zA-Z]/g,"");
});
        document.querySelector("#plname").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^a-zA-Z]/g,"");
});
    document.querySelector("#phone").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^0-9]/g,"");
});
    document.querySelector("#aadharno").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^0-9]/g,"");
});
        document.querySelector("#paadharno").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^0-9]/g,"");
});
</script>
        <!--/ Page Specific Scripts -->

<script>
var uploadField = document.getElementById("uploadphoto");

uploadField.onchange = function() {
    if(this.files[0].size > 100000){
       alert("File must be less than 100kb");
       this.value = "";
    }else if(this.files[0].size < 50000){
       alert("File must be more than 50kb");
       this.value = "";
    };
};
    var uploadField = document.getElementById("puploadphoto");

uploadField.onchange = function() {
    if(this.files[0].size > 100000){
       alert("File must be less than 100kb");
       this.value = "";
    }else if(this.files[0].size < 50000){
       alert("File must be more than 50kb");
       this.value = "";
    };
};
    var uploadField = document.getElementById("certificates");

uploadField.onchange = function() {
    if(this.files[0].size > 300000){
       alert("File must be less than 300kb");
       this.value = "";
    }else if(this.files[0].size < 50000){
       alert("File must be more than 50kb");
       this.value = "";
    };
};
    var uploadField = document.getElementById("tc");

uploadField.onchange = function() {
    if(this.files[0].size > 300000){
       alert("File must be less than 300kb");
       this.value = "";
    }else if(this.files[0].size < 50000){
       alert("File must be more than 50kb");
       this.value = "";
    };
};
    </script>
      
    </body>
</html>
