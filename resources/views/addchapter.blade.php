<!doctype html>

<html class="no-js" lang="" ng-app="myApp" ng-cloak>



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Add Chapter</title>
        <link rel="icon" type="image/ico" href="ncm/images/fav.png" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="ncm/css/bootstrap.min.css">
        <link rel="stylesheet" href="ncm/css/animate.css">
        <link rel="stylesheet" href="ncm/css/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="ncm/css/animsition.min.css">
        <link rel="stylesheet" href="ncm/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="ncm/css/datatables.bootstrap.min.css">
        <link rel="stylesheet" href="ncm/css/dataTables.colReorder.min.css">
        <link rel="stylesheet" href="ncm/css/dataTables.responsive.css">
        <link rel="stylesheet" href="ncm/css/dataTables.colVis.min.css">
        <link rel="stylesheet" href="ncm/css/dataTables.tableTools.min.css">
        <link rel="stylesheet" href="ncm/css/bootstrap-datetimepicker.min.css">
    
        <!-- project main css files -->
        <link rel="stylesheet" href="ncm/css/main.css">
        <!--/ stylesheets -->
        <!--datepicker starts-->
       <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link href="ncm/css/datepicker.css" rel="stylesheet" type="text/css">

       <!--datepicker ends -->


        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="ncm/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->




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
                       <a class="brand" href="{{ URL ('/') }}">
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
                                <img src="ncm/images/user-icn.png" alt="" class="img-circle size-30x30">
                                <span>Admin <i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                                <li>
                                    <a href="#">
                                        <i class="fa fa-cog"></i>Settings
                                    </a>
                                </li>
                               
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
                                            <li>
                                             <a href="#"><i class="fa fa-user"></i> <span>Student</span> </a>
                                                <ul>
                                                    <li><a href="add-student.html"><i class="fa fa-caret-right"></i>Add Student</a></li>
                                                 
                                                    <li><a href="student-details.html"><i class="fa fa-caret-right"></i> View Student Details</a></li>
                                                    <li><a href="view-summarizationstudent-data.html"><i class="fa fa-caret-right"></i>View Summarization Details</a></li>
                                                    <li><a href="student-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-user-secret"></i> <span>Parents</span></a>
                                                <ul>
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
                                     <li><a href="{{ URL::to('addsection') }}"><i class="fa fa-caret-right"></i> Add Section</a></li>
                                    <li><a href="{{ URL::to('viewsection') }}"><i class="fa fa-caret-right"></i> View Section Details</a></li>
                                     <li><a href="{{ URL::to('sectionsettings') }}"><i class="fa fa-caret-right"></i>Section Settings</a></li>
          
                                                </ul>
                                            </li> 
                                            <li  class="active open">
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

            </div>
            <!--/ CONTROLS Content -->




            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-tables-datatables">

                  
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">


                            <!-- tile -->
                            <section class="tile">

                                 @if ($errors->any())
                                   <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Add Chapter</strong></h1>
								
                                </div>
                                <!-- /tile header -->
                                                      



                                <!-- tile body -->
                                
                                <!--fiel starts-->
                       <div class="tile-body">
                           <div class="row">
                                 <form name="form" action="chapteraddform" method="post" role="form" id="form">

                                        
                                        <!-- <div class="form-group">
                                            <label for="secas" class="col-sm-2 control-label">Subject Name</label>
                                            <div class="col-sm-6">
                                               
                                                 <select name="subject_name" id="secas" ng-model="secas" class="form-control mb-10" required>
                                                    <option value="">Select option...</option>
                                                    <option value="First">First</option>
                                                    <option value="Second">Second</option>
                                                    <option value="Third">Third</option>

                                                </select>
                                           
                                            </div>
                  
                                        </div> -->
                                      
                                        
                                      <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Subject Name </label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="subject_name" id="sname">
                                                <option value="">-----Select Subject-----</option>
                                                 @foreach ($sname as $subjectname)          
                                                 {
                                                   <option value="{{$subjectname->id}}">{{$subjectname->subject_name}}</option>
        
                                                 }
                                                 @endforeach

                                              </select>
                                     </div>
                                   </div>
                                 </div>
                                  <div class="row">   
                                      <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Class </label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="section_name" id="secname">
                                                <option value="">-----Select Class-----</option>

                                                   @foreach ($cname as $classname)          
                                                  {
                                                      <option value="{{$classname->id}}">{{$classname->class_name}}</option>
        
                                                  }
                                                 @endforeach

                                              </select>
                                            </div>
                                        </div>
                                        </div>





                                         <div class="row">   
                                      <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Section </label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="class_name" id="cname">
                                                <option value="">-----Select Section-----</option>

                                                   @foreach ($secname as $sectionname)          
                                                  {
                                                      <option value="{{$sectionname->id}}">{{$sectionname->section_name}}</option>
        
                                                  }
                                                 @endforeach

                                              </select>
                                            </div>
                                        </div>
                                        </div>






                                        <div class="row">
                                          <div class="form-group">
                                            <label for="selectclass" class="col-sm-2 control-label">Chapter Name</label>
                                            <div class="col-sm-6">
                                                 <input type="text" name="chapter_name" id="selectclass" ng-model="ct" class="form-control">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                          <div class="form-group">
                                            <label for="selectclass" class="col-sm-2 control-label">Chapter Number</label>
                                            <div class="col-sm-6">
                                                 <input type="text" name="chapter_number" id="selectclass" ng-model="ct" class="form-control">
                                            </div>
                                        </div>
                                        </div>
                                       
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="sdt" class="col-sm-2 control-label">Chapter Start Date</label>
                                            <div class="input-group  col-sm-6" >
                                                <input type="text" class="form-control" name="chapter_start_date" id="sdt" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </div>
                  
                                        </div>
                                        </div> 
                                     <div class="row">
                                        <div class="form-group">
                                            <label for="edt" class="col-sm-2 control-label">Chapter End Date</label>
                                            <div class="input-group col-sm-6">
                                                <input type="text" class="form-control" name="chapter_end_date" id="edt"/>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </div>
                  
                                        </div>
                                        </div> 
                                       
                                   <!--          <div class="row">
                                        <div class="form-group">
                                            <label for="secas" class="col-sm-2 control-label">Status</label>
                                            <div class="col-sm-6">
                                               
                                                 <select name="status" id="secas" ng-model="secas" class="form-control mb-10" required>
                                                    <option value="" disabled>Select option...</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                
                                                </select>
                                           
                                            </div>
                  
                                        </div>
                                        </div> -->
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       
                                         
                                        
                                        
                                        <div class="form-group">
 <button type="submit" class="btn btn-blue btn-rounded mb-10">Add</button>&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-blue btn-rounded mb-10">Cancel</button>
 </div>
   </form>
</div>

                              
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
       <!-- <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>-->

        <script src="ncm/js/bootstrap.min.js"></script>

        <script src="ncm/js/jRespond.min.js"></script>

        <script src="ncm/js/jquery.sparkline.min.js"></script>

        <script src="ncm/js/jquery.slimscroll.min.js"></script>

        <script src="ncm/js/jquery.animsition.min.js"></script>

        <script src="ncm/js/screenfull.min.js"></script>

        <script src="ncm/js/jquery.dataTables.min.js"></script>
        <script src="ncm/js/dataTables.colReorder.min.js"></script>
        <script src="ncm/js/dataTables.responsive.min.js"></script>
        <script src="ncm/js/dataTables.colVis.min.js"></script>
        <script src="ncm/js/dataTables.tableTools.min.js"></script>
        <script src="ncm/js/dataTables.bootstrap.js"></script>

        <!--/ vendor javascripts -->



        <script src="ncm/js/moment.min.js"></script>

        <script src="ncm/js/bootstrap-datetimepicker.min.js"></script>

        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="ncm/js/main.js"></script>
        <!--/ custom javascripts -->
<!--date piceker file starts-->

<!--datepicker file ends-->





      

<script>
    angular.module('myApp',[]);
</script>
            <script>
                document.querySelector("#ct").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^a-zA-Z]/g,"");
});
            </script>


<script>
   
 $("#sdt").datepicker({

     numberOfMonths: 1,
     changeMonth:true,
              changeYear:true,
     

     onSelect: function(selected) {

       $("#edt").datepicker("option","minDate", selected)

     }

 });

 $("#edt").datepicker({

     numberOfMonths: 1,
     changeMonth:true,
              changeYear:true,
   

     onSelect: function(selected) {

        $("#sdt").datepicker("option","maxDate", selected)

     }

 }); 

</script> 

   </body>
</html>

