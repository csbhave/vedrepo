<nav class="nav-bar">
            <div class="header">
                     <div class="brand">Ved Academy<a href="javascript:void(0)" class="btn-bars"> <i class="fa fa-bars"></i></a></div>
                 
                     <div class="header-right"> 
                        <input type="search" placeholder="Search">
                         <div class="blog-user">
                            <a href="#" class="avator"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgV1cokAhUc_f0ljJt88_Jf4K9RaRgZSvGuUCBV6Up4SS9wo--"></a>
                         
                          <ul class="navbar-right hidden">

                                <li><a href="admindash.php?page=updatepassword"><i class="fa fa-lock"></i><span>Change Password</span></a></li>
                                <li><a href="admin.php?page=profilepic"><i class="fa fa-user"></i><span>change Profile Picture</span></a></li>
                                <li><a href="../logout.php"><i class="fa fa-home"></i><span>Logout</span></a></li>
                        </ul>
                         </div>
                    </div>
            </nav>
        
        <?php 
        @$page=  $_GET['page'];
          if($page!=" ")
          {
            if($page=="updatepassword")
            {
                include('updatepassword.php');
            }
            if($page=="profilepic")
            {
                include('profilepic.php');
            }

            if($page=="addstudent")
            {
                include('addstudent.php');
            }

            if($page=="updatestudent")
            {
                include('updatestudent.php');
            }
            if($page=="deletestudent")
            {
                include('deletestudent.php');
            }
            if($page=="enquiry")
            {
                include('enquirydata.php');
            }
            if($page=="viewstudent")
            {
                include('viewstudent.php');
            }
            if($page=="studentfees")
            {
                include('studentfees.php');
            }
            if($page=="addsubject")
            {
                include('addsubject.php');
            }
            
          if($page=="payment")
          {
              include('payment.php');
          }

          if($page=="invoice")
            {
                include('invoice.php');
            }
                                                                            
        }
       ?>