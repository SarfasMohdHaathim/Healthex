<?php 
session_start();

if(!isset($_SESSION['admin'])){
   header('location:login.php');
} ?>
<?php include 'header.php';
include_once 'php/db_conn.php';
$id=$_GET['id'];
$sql = "SELECT * FROM blog WHERE id=$id";
$res = mysqli_query($conn,$sql);

if (mysqli_num_rows($res) > 0) {
    while ($rows = mysqli_fetch_assoc($res)) {
        $title=$rows['title'];
        $des=$rows['des'];
        $image_url=$rows['image_url'];
        $Pharagraph1=$rows['Pharagraph1'];
        $Pharagraph2=$rows['Pharagraph2'];
        $Pharagraph3=$rows['Pharagraph3'];
     }}
      ?>

<div class="card mb-3">
            <div class="card-header">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                  <h5 class="mb-0 mt-2" data-anchor="data-anchor" id="background">RECENT BLOG<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#background" style="padding-left: 0.375em;"></a></h5>
                </div>
                <div class="col-auto ms-auto">
                <a href="add-blog.php">
                        <div id="bulk-select-replace-element"><button class="btn btn-falcon-info" type="button">ADD BLOG &nbsp;&nbsp;&nbsp;<svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <span class="fas fa-plus"></span> Font Awesome fontawesome.com --><span class="ms-1"></span></button></div>
                </a>    
                </div>
              </div>
            </div>
            
           <div class="row">
            

           <div class="col-md-12">
            <div class="card-body bg-light">
                  <div class="tab-content">
                    <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-9b51b3a6-b7fa-416c-9f5f-0fbd5384b04a" id="dom-9b51b3a6-b7fa-416c-9f5f-0fbd5384b04a">
                      <div class="card overflow-hidden" style="width: 90%;">
                        <div class="card-img-top"><img class="img-fluid" src="<?php echo $image_url?>" alt="Card image cap"></div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $title ?> </h5>
                          <h6 class="card-title"><?php echo $des ?> </h6>
                          <p><?php echo $Pharagraph1 ?></p>
                          <p><?php echo $Pharagraph2 ?></p>
                          <p><?php echo $Pharagraph3 ?></p>
                          <div class="d-flex">
                          <a class="btn btn-falcon-danger btn-sm" type="button" data-toggle="modal" data-target="#myModal<?php echo $id ?>" href="#!">Delete</a>
                          <a class="btn btn-falcon-info btn-sm"  href="edit-blog.php?id=<?php echo $id ?>">Edit</a>
                        </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="modal" id="myModal<?php echo $id ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">DELETE</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      Are you sure want delete <span class="text-info">"<?php echo $title ?>"</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="php/delete-blog.php?id=<?php echo $id ?>" type="button" class="btn btn-danger">Delete</a>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
          </div>

<?php include 'footer.php'; ?>