
<?php    
if(isset($_POST['submit'])){
    include "../php/db_conn.php";
            $id = $_POST['id'];
            $title=$_POST['title'];
            $title=str_replace("'", "''", $title);
            $des=$_POST['des'];
            $des=str_replace("'", "''", $des);

            $Pharagraph1=$_POST['p1'];
            $Pharagraph1=str_replace("'", "''", $Pharagraph1);

            $Pharagraph2=$_POST['p2'];
            $Pharagraph2=str_replace("'", "''", $Pharagraph2);
            
                $p3=$_POST['p3'];
                $p3=str_replace("'", "''", $p3);
                



            $updatequery = "UPDATE `blog`
                SET `title`='$title',`des`='$des',`Pharagraph1`='$Pharagraph1',`Pharagraph2`='$Pharagraph2',`Pharagraph3`='$p3'
                WHERE `id`=$id";
                mysqli_query($conn, $updatequery);
          
          
          if(isset($_POST['checkbox_name'])){
            $fileName =$_POST['nimage'];
            $filePath = '../'.$fileName;
            unlink($filePath);
            session_start();
            $image=$_SESSION['image'];
            unset($_SESSION['image']);
            
              $id=$_POST['id'];
          $query1 = "UPDATE `blog`
                 SET `title`='$title',`des`='$des',`Pharagraph1`='$Pharagraph1',`Pharagraph2`='$Pharagraph2',`image_url`='$image',`Pharagraph3`='$p3'
                 WHERE `id`=$id";
                  mysqli_query($conn, $query1);
          }
                
        }
        echo "<script>window.location.href='../blog.php'</script>";
      
?>