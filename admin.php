<?php

include "assets/back/inc/pdo.php";

$sql = "SELECT * from users WHERE 1";
$query = $pdo->prepare($sql);
$query->execute();
$users = $query->fetchALL();

?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Administration ADN</title>

<!-- Custom fonts for this template-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="assets/back/css/style-admin.css">

<!-- Custom styles for this template-->
<link href="assets/back/css/sb-admin-2.css" rel="stylesheet">

</head>

  <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
          <div class="sidebar-brand-text mx-3">Administration ADN</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-home"></i>
            <span>Retour à l'acceuil</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <h1>Administration utilisateurs</h1>

            <div id="content-wrapper">
              <div class="container-fluid">
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fas fa-table"></i> Liste des utilisateurs <a href="#">Créer un nouvelle utilisateur</a></div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Prenom</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Edition</th>
                                    <th>Supression</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($users as $key => $user): ?>
                                <tr>
                                  <td><?php echo $user['prenom']; ?></td>
                                  <td><?php echo $user['email']; ?></td>
                                  <td><?php echo $user['roles'] ?></td>
                                  <td><a class="btn btn-success"href="user_edition.php?id=<?php echo $user['id'] ?>">EDITION</a></td>
                                  <td><a class="btn btn-danger" href="user_suppression.php?id=<?php echo $user['id'] ?>">SUPPRESSION</a></td>
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                        </table>

                      </div>
                    </div>
                  </div>

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span> YVAS&copy; 2019</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/back/js/jquery.min.js"></script>
    <script src="assets/back/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/back/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/back/js/sb-admin-2.min.js"></script>


  </body>

</html>
