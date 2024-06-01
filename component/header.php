 <link rel="shortcut icon" href="./images/logo2.png" type="image/x-icon" />
 <script src="https://cdn.tailwindcss.com"></script>
 <link rel="stylesheet" href="sidebar.css">
 <link rel="stylesheet" href="Responsive.css">
 <header class="container-fluid">
   <!-- style="background-image: url('images/header-banner.jpeg'); background-size:cover; background-repeat:no-repeat; background-position:center; -->
   <div class=" header mt-4 mx-auto flex px-40  items-center justify-between ">
     <div class="logohead ">
       <a href="index.php"><img src="./images/aiimms-logo.png" class=" aiim-logo " alt="" /></a>

     </div>
     <div class="mx-auto text-center   text1-head  w-full">
       <h1 class="font-bold text-center text-[#212a47] text-2xl ">
         36<sup>th</sup> Conference of the International Society for Fluoride Research (ISFR)
       </h1>
       <h6 class="font-semibold text-[#212a47]">
         AIIMS, New Delhi India <br> 12<sup>th</sup> to 14<sup>th</sup> of November 2024
       </h6>
     </div>
     <div class="logohead2  ">
       <a href="index.php">
         <img src="./images/logo2.png" class="aiim-logo2 " alt="" /></a>

     </div>
   </div>
 </header>
 <div class="mx-auto text-center header-text2  w-full">
   <h1 class="font-bold text-center text-[#212a47] text-2xl">
     36<sup>th</sup> Conference of the International Society for Fluoride Research (ISFR)
   </h1>
   <h6 class="font-semibold text-[#212a47]">
     AIIMS, New Delhi India <br> 12<sup>th</sup> to 14<sup>th</sup> of November 2024
   </h6>
 </div>
 <div id="mySidebar" class="sidebar">
   <a href="javascript:void(0)" class="closebtn" id="icon" onclick="closeSidebar()">&times;</a>
   <a href="index.php">Home</a>
   <a href="about-isfr.php">About Us</a>
   <a href="#">Speaker</a>
   <a href="#"> Registartion <i class="fa fa-angle-down" aria-hidden="true"></i></a>
   <a href="#">Abstract <i class="fa fa-angle-down" aria-hidden="true"></i></a>
   <a href="#"> Oration & Special Prizes
     <i class="fa fa-angle-down" aria-hidden="true"></i></a>
   <a href="#"> Programme
     <i class="fa fa-angle-down" aria-hidden="true"></i></a>
   <a href="sponsor.php">Sponsors</a>
   <!-- <a href="#"> Hospitality
     <i class="fa fa-angle-down" aria-hidden="true"></i></a> -->
   <!-- <a href="#">Downloads</a> -->
   <a href="contact.php">Contact Us</a>
 </div>

 <div class="bg-[#212a47] w-auto" id='tog-mob' style="display: none;">
   <button class="openbtn mt-4" onclick="openSidebar()">&#9776; </button>
 </div>
 <style>
   #mySidebar {
     transition: width 0.5s;
   }

   .fade-in {
     animation: fadeIn 0.5s ease-in-out;
   }

   @keyframes fadeIn {
     from {
       opacity: 0;
       transform: translateY(20px);
     }

     to {
       opacity: 1;
       transform: translateY(0);
     }
   }
 </style>

 <!-- ===Navbar -->
 <nav class="container-fluid mt-2 bg-[#212a47] navbar" style="position: sticky; top:0;z-index: 1;">
   <div class=" container mx-auto bg-transparent">
     <ul class="flex justify-evenly items-center text-[15px]   py-6 text-white">
       <li> <a href="index.php">HOME</a></li>

       <ul class="menu">
         <li class="dropdown dropdown-5">
           ABOUT US &nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i>
           <ul class="dropdown_menu dropdown_menu-5">
             <a href="about-isfr.php">
               <li class="dropdown_item-1"> About ISRF

               </li>
             </a>
             <a href="about-delhi.php">
               <li class="dropdown_item-2">About Delhi

               </li>
             </a>
             <a href="about-venue.php">
               <li class="dropdown_item-3"> About Venue

               </li>
             </a>


           </ul>
         </li>
       </ul>


       <li> <a href="organizing-commitee.php">ORGANIZING COMMITTEE</a></li>
       <ul class="menu">
         <li class="dropdown dropdown-5">
           REGISTRATION &nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i>
           <ul class="dropdown_menu dropdown_menu-5">
             <a href="regis-detail.php">
               <li class="dropdown_item-1"> Registartion Fee

               </li>
             </a>
             <a href="online-regis.php">
               <li class="dropdown_item-2"> Online Registartion

               </li>
             </a>


           </ul>
         </li>
       </ul>

       <ul class="menu">
         <li class="dropdown dropdown-5">
           ABSTRACT &nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i>
           <ul class="dropdown_menu dropdown_menu-5">
             <a href="abstract-guide.php">
               <li class="dropdown_item-1"> Abstract Guidelines

               </li>
             </a>
             <a href="abstract-submission.php">
               <li class="dropdown_item-2"> Abstract Submission

               </li>
             </a>


           </ul>
         </li>
       </ul>
       <!-- <li>
         <a href="">Oration & Special Prizes
           <i class="fa fa-angle-down" aria-hidden="true"></i></a>
       </li> -->
       <li> <a href="ACCOMMODATION.php"> ACCOMMODATION </a></li>
       <!-- <ul class="menu">
         <li class="dropdown dropdown-5">
           Programme &nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i>
           <ul class="dropdown_menu dropdown_menu-5">
             <li class="dropdown_item-1"> <a href="workshop.php">workshop </a></li>
             <li class="dropdown_item-2"> <a href="sponsor.php
                "> Sponsors </a></li>
           </ul>
         </li>
       </ul> -->
       <!-- <li> <a href="sponsor.php">Sponsors</li> -->

       <!-- <li> <a href="">Downloads</a></li> -->
       <li> <a href="contact.php">CONTACT US</a></li>
     </ul>
   </div>

 </nav>