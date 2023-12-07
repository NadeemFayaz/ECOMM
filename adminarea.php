<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link-->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
    crossorigin="anonymous"
  />
  <link rel="stylesheet" href="../style.css">
  <style>
    body{
        padding: 1rem;
    }
    .admin-image{
        width: 100px;
        object-fit: contain;
        height: 80px;
    }
  
  </style>
</head>
<body>
    <!--nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info navbar-default fixed-top">
        <!--first part-->
         <div class="container-fluid p-0">
            <img src="..\Images\icon.png" class="logo">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="navlink">Welcome Guest</a>
                    </li>

                </ul>
            </nav>

          </div>
    </nav>
    <!-- second part-->
    <div class="bg-light pt-5 mt-5">
        <h3 class="text-center mb-2">Manage details</h3>
    </div>

    <!-- third part-->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div> 
                <a href="#"><img src="../images/juice2.png"alt="" class="admin-image"> </a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            <div class px-5="button text-center">
         
            <button><a href="" class="nav-link text-light bg-info my-1">Insert products</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View products</a> </button>
            <button><a href="" class="nav-link text-light bg-info my-1">Insert Categories</a> </button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a> </button>
            <button><a href="" class="nav-link text-light bg-info my-1">Insert Brand</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Brand</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">All payments</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">Log Out</a></button>
        </div>

        </div>
    </div>
    
<!-- bootstrap js link-->
<script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
crossorigin="anonymous"
></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
crossorigin="anonymous"
></script>
</body>
</html>