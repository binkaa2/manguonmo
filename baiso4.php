<!DOCTYPE html>
<html lang="en">

<?php include_once("model/book.php");
    $book = new Book(50,"OOP in PHP","ndungithue",2019);
?>

<head>
    <?php include_once("includes/header.php");  ?>
</head>

<body id="page-top">
    
    <?php include_once("includes/nav.php") ?>

    <div id="wrapper">
        

        <?php
        $book->display();
        ?>

    </div>
    <!-- /#wrapper -->

    <?php include_once("includes/footer.php")
  ?>



</body>

</html>