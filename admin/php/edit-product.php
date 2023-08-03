
<?php    
if(isset($_POST['submit'])){
    include "../php/db_conn.php";
            $id = $_POST['id'];
            $title=$_POST['title'];
            $des=$_POST['des'];
            $category=$_POST['category'];

            $updatequery = "UPDATE `product`
                      SET `title`='$title',`des`='$des',`category`='$category'
                      WHERE `id`=$id";
                  mysqli_query($conn, $updatequery);
          
          
          if(isset($_POST['checkbox_name'])){
            session_start();
            $image=$_SESSION['image'];
            unset($_SESSION['image']);
              $id=$_POST['id'];
          $query1 = "UPDATE `product`
                 SET `title`='$title',`des`='$des',`image_url`='$image',`category`='$category'
                 WHERE `id`=$id";
                  mysqli_query($conn, $query1);
          }
                
        }
        echo "<script>window.location.href='../product.php'</script>";
      
?>