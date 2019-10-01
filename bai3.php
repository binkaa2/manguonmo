<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("includes/header.php");  ?>
</head>
<?php
                    #init variable
                    $msv = $hoten = $ngaysinh = $email = "";
?>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $msv = $_REQUEST["msv"];
        $hoten = $_REQUEST["hoten"];
        $ngaysinh = $_REQUEST["ngaysinh"];
        $email = $_REQUEST["email"];
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Email good!";
        } else {
            echo "Email bad!";
        }
        var_dump(time());
        if($_FILES["avatar"]["name"] != "")
            move_uploaded_file($_FILES["avatar"]["tmp_name"],"upload/avatar.jpg");
    }
?>

<body id="page-top">

    <?php include_once("includes/nav.php") ?>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Login Screens:</h6>
                    <a class="dropdown-item" href="login.html">Login</a>
                    <a class="dropdown-item" href="register.html">Register</a>
                    <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Other Pages:</h6>
                    <a class="dropdown-item" href="404.html">404 Page</a>
                    <a class="dropdown-item" href="blank.html">Blank Page</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>

                <!-- OK -->
                <div class="row justify-content-center">
                    <form method="POST" action="/bai3.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="Ma Sinh Vien">Ma Sinh Vien</label>
                            <input type="text" placeholder="Nhap ma sinh vien" value="<?php echo $msv ?>" name="msv" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="Ho Ten">Ho Va Ten</label>
                            <input type="text" placeholder="Nhap ho va ten" value="<?php echo $hoten ?>" name="hoten" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="ngay sinh">Ngay Sinh</label>
                            <input type="date" name="ngaysinh" value="<?php echo $ngaysinh ?>" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type=""  name="email" value="<?php echo $email ?>" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="email">Avatar</label>
                            <input type="file" accept=".png, .jpg, .jpeg" name="avatar" class="form-control" />
                        </div>
                        <div style="text-align:center;">
                            <button type="submit" class="btn btn-info" style="margin-bottom:15px;">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2019</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include_once("includes/footer.php")
  ?>



</body>

</html>