<?php
require_once('config/db.php');
require_once('lib/functions.php');

try {
  $userModel = new UserModel(DB_ENGINE, DB_HOST, DB_NAME, DB_CHARSET, DB_USER, DB_PWD);
  $users = $userModel->readAll();
} catch(Exception $e) {
  header('Location: .?_err=500');
  exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>USN France | CRM Dashboard</title>

  <!-- CSS Header -->
  
  <?php
    include('config/cssHeader.php');
    ?>

  </head>

  <!-- Left Navbar --> 

  <nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="#"><img src="img/usn-logo-small.png" class="usn-logo-small" alt="usn-logo-small"> <b><em>USN France</em></b>  </a>
    <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>Menu
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Dashboard</a>
        <li class="nav-item">
          <a class="nav-link" href="companies.php">Companies</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="finances.php">Finances</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sales.php">Sales</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="users.php">Users</a>
        </li>

      </ul>

  <!-- Right Navbar -->

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="">Welcome : <i> pab@usn.fr </i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Header -->

  <header id="header">
    <div class="container">
      <div class="row"> <!-- Grid Format-->
        <div class="col-md-10">
          <h1> <img src="img/usn-logo-small.png" class="usn-logo-small" alt="usn-logo-small">
          Dashboard <small>| Management</small></h1>
        </div>
        <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Create New
              </button>
              <div class="dropdown-menu bg-warning">
                <a class="dropdown-item" href="addCompany.php">Company</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Breadcrumb -->

  <section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb dash">
        <li class="active"><h3>Dashboard</h3></li>
      </ol>
    </div>
  </section>

  <!-- Left Side -->

  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="index.php" class="list-group-item list-group-item-action active">
            <h6><i class="far fa-list-alt"></i> USN France in Numbers</h6>
            </a>
            <a href="companies.php" class="list-group-item list-group-item-action"><i class="far fa-building"></i> Companies <span class="badge badge-pill badge-warning float-right"> 50 </span></a>
            <a href="finances.php" class="list-group-item list-group-item-action"><i class="far fa-money-bill-alt"></i> Finances <span class="badge badge-pill badge-warning float-right"> 50 </span></a>
            <a href="sales.php" class="list-group-item list-group-item-action"><i class="far fa-edit"></i> Sales Team <span class="badge badge-pill badge-warning float-right"> 50 </span></a>

            <a href="users.php" class="list-group-item list-group-item-action"><i class="far fa-address-card"></i> Users <span class="badge badge-pill badge-warning float-right"> 9 </span></a>

          </div>

          <br>

  <!-- Progress Bar -->

          <div class="card text-dark bg-default mb-3 mt-2" style="max-width: 18rem;">
            <div class="card-header"><h6><i class="fas fa-coins"></i> Monthly Target €100, 000</h6></div>
              <div class="card-body">
                <h5 class="card-title">Reached</h5>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;n"> 67% </div>
                  </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Remaining</h5>
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;n"> 33%
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

  <!-- Right Side -->

  <!-- Overview -->

          <div class="col-md-9">
            <div class="row">
              <div class="card pb-3">
                <div class="card-header">
                 <h6> Dashboard Overview</h6>
                </div>
                <br>
                <div class="card-deck col-sm-3 text-center">
                    <div class="card text-dark bg-warning">
                      <div class="card-body">
                        <h5 class="card-title">Companies</h5>
                        <p class="card-text">Access To All Company Info...</p>
                        <a href="companies.php" class="btn text-info btn-dark">View</a>
                      </div>
                    </div>
                  </div>           
                <div class="col-sm-3 text-center">
                  <div class="card text-dark bg-info">
                    <div class="card-body">
                      <h5 class="card-title">Finances</h5>
                      <p class="card-text">Access To All Financial Info...</i></p>
                        <a href="finances.php" class="btn text-warning btn-dark">View</a>
                      </div>
                    </div>
                  </div>  
                <div class="col-sm-3 text-center">
                  <div class="card text-dark bg-warning">
                    <div class="card-body">
                      <h5 class="card-title">Sales Team</h5>
                      <p class="card-text">Access To All Sales Info...</p>
                      <a href="sales.php" class="btn text-info btn-dark">View</a>
                    </div>
                  </div>
                </div> 
                  <div class="col-sm-3 text-center">
                    <div class="card text-dark bg-info">
                      <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text">Access To All Sales Info...</i></p>
                        <a href="users.php" class="btn text-warning btn-dark">View</a>
                      </div>
                    </div>
                    <br>
                  </div>
                </div>
                </div>
                </div>
              

  <!-- Latest Users -->
  <div class="row mt-3">        
          <div class="card w-100">
            <div class="card-header">
             <h6> Latest Users</h6>
            </div>
              <div class="card-body">

              <?php if(!empty($users)) { ?>

              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Last Login</th>
                  </tr>
                </thead>
                <tbody>                  

                <?php
                foreach($users as $data) {
                    $conv = new User($data);
                    $conv->showTable();
                  }
                  ?>
                </tbody>
              </table>
              <?php } else { ?>
              <p>No Users</p>
              <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  
  <!-- Footer -->
  
    <?php
    include('config/footer.php');
    ?> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Removed the below to avoid double-click on dropdown -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>

