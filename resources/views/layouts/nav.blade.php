 <div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-default pb-0"  style="background-color: #343A40;">

         <!-- <a class="navbar-brand" href="#">
      <img width="40" src="D:\XAAMP\htdocs\Personal Project\Images\logo.jpg">
     </a> -->
     <style>

     a:hover .navbar {background-color: #3e8e41;}
     </style>

            <div class="collapse navbar-collapse">
               <ul class="navbar-nav mr-auto"></ul>
                  <div class="form-inline">
                 <a class="mr-3" href=""><i class="fa fa-facebook" style="color: white;"></i></a>
                 <a class="mr-3" href=""><i class="fa fa-instagram" style="color: white;"></i></a>
                 <a class="mr-3" href=""><i class="fa fa-twitter" style="color: white;"></i></a>
                </div>
         </div>

      </nav>
      <nav class="navbar navbar-expand-lg navbar-default   pt-0" style="background-color: #343A40;">

           <a class="navbar-brand" href="#">
      <img width="40" src="{{asset('Images\logo.jpg') }}">
     </a>


         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
         <a class="nav-link" href="{{ url('/')}}"style="color:  white;">Home</a>
         </li>

          <li class="nav-item">

       <!--  <a class="nav-link" href="{{ url('/product')}}"  style="color:  white;"> Products</a> -->

<!-- Hover And Drop Down Code Start-->

<!--#343A40 this is a color of nav bar -->
       <style>  



.dropdown {
  position: relative;
  display: inline-block;

}


.dropdown-cnt {
  display: none;
  position: absolute;
  background-color:white;  
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-cnt a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
} 

.dropdown-cnt a:hover {background-color:red;}

.dropdown:hover .dropdown-cnt {display: block;}



</style>
</head>
<body>

<div class="dropdown">
  <a class="nav-link" href="{{ url('/product')}}" style="color: white;"> Buy/Sell</a>
  <div class="dropdown-cnt">
    <a href="{{ url('/commercial_plots')}}">Residential Plots</a>
    <a href="#">Commercial Plots</a>
  </div>
</div>


<!-- Hover And Drop Down Code Ends-->



         </li>
         <li class="nav-item">
         <a class="nav-link" href="{{ url('/contact_us')}}" style="color:  white;">Contact Us</a>
         </li>
         <li class="nav-item">
         <a class="nav-link" href="{{ url('/about')}}"style="color:  white;" >About Us</a>
         </li>

     <!--  <a class="nav-link" href="http://www.evolve.pk/demos/sagroup/sagarden-vrtour.html"style="color:  white;" >Virtual Tour</a>


      <a class="nav-link" href="http://www.evolve.pk/demos/sagroup/sagarden-vrtour.html"style="color:  white;" >Virtual Tour</a> -->

         </li>


<!-- DropDown Code Start -->
         <style>  


.dropbtn {
  background-color: red;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;

}


.dropdown-content {
  display: none;
  position: absolute;
  background-color:white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
} 

.dropdown-content a:hover {background-color: red;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

</style>
</head>
<body>

<div class="dropdown">
  <button class="dropbtn">Virtual Tour</button>
  <div class="dropdown-content">
    <a href="http://www.evolve.pk/demos/sagroup/sagarden-vrtour.html">S.A Gardens Phase II</a>
    <a href="#">S.A Gardens Phase I</a>
    <a href="#">Others</a>
  </div>
</div>

<!-- DropDown Code Ends -->










</body>







        
            </ul>
         </div>
      </nav>

</div>