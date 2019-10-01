<!DOCTYPE html>
<html lang="en">

<?php include_once("model/book.php");
    $search = '';
    if(isset($_GET['search']))
      $search = $_GET['search'];
    $books = Book::getList($search);
?>

<head>
    <?php include_once("includes/header.php");  ?>
</head>

<body id="page-top">
    
    <?php include_once("includes/nav.php") ?>

    <div id="wrapper">
        
        <?php include_once("includes/sidebar.php") ?>

        <div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tables</li>
  </ol>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
    Bai tap thay dung 5</div>
    <div class="card-body">
    <div class="row float-left">
      <div class="col">
      <form method="GET" action="">
        <input class="form-control" type="search" placeholder="Search" name="search" />
      </form>
      </div>
    </div>
    <div class="row float-right">
        <div class="col pb-3">
        <button class="btn" style="border: 1px solid #6170DF;
    font-family: Avenir-Heavy;
    font-size: 13px;
    color: #6170DF;
    line-height: 20px;">+ Add</button>
        </div>
    </div>
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th style="background: black;
    color: white;">ID</th>
              <th style="background: black;
    color: white;">Title</th>
              <th style="background: black;
    color: white;">Author</th>
              <th style="background: black;
    color: white;">YEAR</th>
              <th style="background: black;
    color: white;">PRICE</th>
              <th style="background: black;
    color: white;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach($books as $key => $book){ 
           ?>
            <tr>
              <td><?php echo $key ?></td>
              <td><?php echo $book->title ?></td>
              <td><?php echo $book->author ?></td>
              <td><?php echo $book->year ?></td>
              <td><?php echo $book->price ?></td>
              <td width="200px;">
                  <button class="btn btn-primary">Edit</button>
                  <button class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <?php
            }?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

  <p class="small text-center text-muted my-5">
    <em>More table examples coming soon...</em>
  </p>

</div>
<!-- /.container-fluid -->


</div>

    </div>
    <!-- /#wrapper -->

    <?php include_once("includes/footer.php")
  ?>



</body>

</html>