<?php 
session_start();

if(!isset($_SESSION['admin'])){
   header('location:login.php');
} ?>
<?php include 'header.php';
include_once 'php/db_conn.php'; ?>

<div class="card mb-3">
            <div class="card-header">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                  <h5 class="mb-0 mt-2" data-anchor="data-anchor" id="background">PRODUCT<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#background" style="padding-left: 0.375em;"></a></h5>
                </div>
                <div class="col-auto ms-auto">
                <a href="add-product.php">
                        <div id="bulk-select-replace-element"><button class="btn btn-falcon-info" type="button"><svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <span class="fas fa-plus"></span> Font Awesome fontawesome.com --><span class="ms-1">New</span></button></div>
                </a>    
                </div>
              </div>
            </div>
            
           <div class="row">
           <?php 
          $sql = "SELECT * FROM product ORDER BY id DESC";
          $res = mysqli_query($conn,$sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($row = mysqli_fetch_assoc($res)) {  ?>
            

           <div class="col-md-4">
            <div class="card-body bg-light">
                  <div class="tab-content">
                    <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-9b51b3a6-b7fa-416c-9f5f-0fbd5384b04a" id="dom-9b51b3a6-b7fa-416c-9f5f-0fbd5384b04a">
                      <div class="card overflow-hidden" style="width: 20rem;">
                        <div class="card-img-top"><img class="img-fluid" src="<?=$row['image_url']?>" alt="Card image cap"></div>
                        <div class="card-body">
                          <h5 class="card-title"><?=$row['title']?> </h5>
                          <p class="card-text"><?=$row['des']?></p>
                          <p class="card-text"><?=$row['category']?></p>
                          <div class="d-flex">
                          <a class="btn btn-falcon-danger btn-sm" type="button" data-toggle="modal" data-target="#myModal<?=$row['id']?>" href="#!">Delete</a>
                          <a class="btn btn-falcon-info btn-sm"  href="edit-product.php?id=<?=$row['id']?>">Edit</a>
                          <a class="btn btn-falcon-success btn-sm"  href="add-product_image.php?id=<?=$row['id']?>">add multiple images</a>
                        </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="modal" id="myModal<?=$row['id']?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">DELETE</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      Are you sure want delete <span class="text-info">"<?=$row['title']?>"</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="php/delete-product.php?id=<?=$row['id']?>" type="button" class="btn btn-danger">Delete</a>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <?php }} ?>
                </div>
          </div>

  
<?php include 'footer.php'; ?>