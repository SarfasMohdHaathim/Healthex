<?php 
session_start();
include_once 'php/db_conn.php';
if(!isset($_SESSION['admin'])){
   header('location:login.php');
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
   }
    ?>
<?php include 'header.php'; ?>
<div class="card mb-3">
            <div class="card-header ">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                  <h5 class="mb-0" data-anchor="data-anchor" id="file-input">ADD WORK<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#file-input" style="padding-left: 0.375em;"></a></h5>
                </div>
                <div class="col-auto ms-auto">
                  <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07" type="button" role="tab" aria-controls="dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07" aria-selected="true" id="tab-dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07">Preview</button><button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-5bbda65a-67ab-4be4-82b8-62eef18af131" type="button" role="tab" aria-controls="dom-5bbda65a-67ab-4be4-82b8-62eef18af131" aria-selected="false" id="tab-dom-5bbda65a-67ab-4be4-82b8-62eef18af131" tabindex="-1">Code</button></div>
                </div>
              </div>
            </div>
            <div class="card-body bg-light">
              <div class="tab-content">
                <form action="php/upload-product_image.php" method="POST" enctype="multipart/form-data" >
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07" id="dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07">                
                <div class="mb-3 w-50">
                    <label class="form-label" for="customFile">Image input</label>
                    <input class="form-control image" id="customFile" type="file" name="image">
                  </div>
                  <input type="hidden" name="id" value="<?=$id?>">
                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <?php 
          $sql = "SELECT * FROM product_image WHERE work_id='$id' ORDER BY id DESC";
          $res = mysqli_query($conn,$sql);

          if (mysqli_num_rows($res) > 0) {
            ?>
          
<div class="card mb-3">
            <div class="card-header">
              <div class="row flex-between-end">
                
              </div>
            </div>
            
           <div class="row">
           <?php
          	while ($row = mysqli_fetch_assoc($res)) {  ?>
            

           <div class="col-md-4">
            <div class="card-body bg-light">
                  <div class="tab-content">
                    <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-9b51b3a6-b7fa-416c-9f5f-0fbd5384b04a" id="dom-9b51b3a6-b7fa-416c-9f5f-0fbd5384b04a">
                      <div class="card overflow-hidden" style="width: 20rem;">
                        <div class="card-img-top"><img class="img-fluid" src="uploads/<?=$row['image_url']?>" alt="Card image cap"></div>
                        <div class="card-body">
                          <div class="d-flex">
                          <a class="btn btn-falcon-danger btn-sm" type="button" data-toggle="modal" data-target="#myModal<?=$row['id']?>" href="#!">Delete</a>
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
                      Are you sure want delete???
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="php/delete-product_image.php?id=<?=$row['id']?>" type="button" class="btn btn-danger">Delete</a>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <?php }} ?>
                </div>
          </div>


          
      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="modalLabel">Crop image</h5>
                      <button type="button" class="close-button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">close</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="img-container">
                          <div class="row">
                              <div class="col-md-8">  
                                  <img id="image">
                              </div>
                              <div class="col-md-4">
                                  <div class="preview"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-info close-button" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary " id="crop">Crop</button>
                  </div>
              </div>
          </div>
      </div>
      <style type="text/css">
        img {
            display: block;
            max-width: 100%;
        }
        .preview {
            overflow: hidden;
            width: 160px; 
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }
        
    </style>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>   
    <script>
      var bs_modal = $('#modal');
      var image = document.getElementById('image');
      var image1 = document.getElementById('image1');
      var cropper,reader,file;
  
      
      $("body").on("change", ".image", function(e) {
          var files = e.target.files;
          var done = function(url) {
              image.src = url;
              bs_modal.modal('show');
          };
          $('.close-button').on('click', function() {
                bs_modal.modal('hide');
            });
          $('.delete-modal').on('click', function() {
                bs_modal.modal('show');
            });

  
  
          if (files && files.length > 0) {
              file = files[0];
  
              if (URL) {
                  done(URL.createObjectURL(file));
              } else if (FileReader) {
                  reader = new FileReader();
                  reader.onload = function(e) {
                      done(reader.result);
                  };
                  reader.readAsDataURL(file);
              }
          }
      });
  
      bs_modal.on('shown.bs.modal', function() {
          cropper = new Cropper(image, {
              aspectRatio: 16/16,
              viewMode: 3,
              preview: '.preview'
          });
      }).on('hidden.bs.modal', function() {
          cropper.destroy();
          cropper = null;
      });
  
      $("#crop").click(function() {
          canvas = cropper.getCroppedCanvas({
              width: 450,
              height: 600,
          });
  
          canvas.toBlob(function(blob) {
              url = URL.createObjectURL(blob);
              var reader = new FileReader();
              reader.readAsDataURL(blob);
              reader.onloadend = function() {
                  var base64data = reader.result;
                  $.ajax({
                      type: "POST",
                      dataType: "json",
                      url: "image-upload1.php",
                      data: {image: base64data},
                      success: function(data) { 
                          bs_modal.modal('hide');
                          
                      }
                  });
                  
              };
          });
      });
  </script>           


    
<?php include 'footer.php'; ?>