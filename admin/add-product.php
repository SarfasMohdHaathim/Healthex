<?php 
session_start();

if(!isset($_SESSION['admin'])){
   header('location:login.php');
} ?>
<?php include 'header.php';
include_once 'php/db_conn.php'; ?>
<div class="card mb-3">
            <div class="card-header ">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                  <h5 class="mb-0" data-anchor="data-anchor" id="file-input">ADD PRODUCT<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#file-input" style="padding-left: 0.375em;"></a></h5>
                </div>
                <div class="col-auto ms-auto">
                    <a href="add-category.php">
                <button class="btn btn-falcon-info" type="button">ADD CATEGORY &nbsp;&nbsp;&nbsp;<svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <span class="fas fa-plus"></span> Font Awesome fontawesome.com --><span class="ms-1"></span></button>
                </a>    
            </div>
              </div>
            </div>
            <div class="card-body bg-light">
              <div class="tab-content">
                <form action="php/upload-product.php" method="POST" enctype="multipart/form-data" >
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07" id="dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07">
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Title</label>
                    <input class="form-control w-50" id="exampleFormControlInput1" type="text" placeholder="" name="title">
                </div>  
                <div class="mb-3 w-50">
                    <label class="form-label" for="customFile">Image input</label>
                    <input class="form-control image" id="customFile" type="file" name="image">
                  </div>

                <div class="mb-3 w-50">
                    <label class="form-label" for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des"></textarea>
                </div>
                <div class="mb-3 w-50">
                <label class="form-label" for="dom-748f15f2-63a1-4a6e-b5f1-ef398d7783e3">Category select</label>
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-748f15f2-63a1-4a6e-b5f1-ef398d7783e3" id="dom-748f15f2-63a1-4a6e-b5f1-ef398d7783e3">
                <select class="form-select" aria-label="Default select example" name="category">
                    <option selected="">Open this select menu</option>
                    <?php
                    $sql = "SELECT * FROM category ORDER BY id DESC";
          $res = mysqli_query($conn,$sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($row = mysqli_fetch_assoc($res)) {  ?>
                <option value="<?=$row['title']?>"><?=$row['title']?></option>
                
                <?php }} ?>


                  </select>
                </div>
                </div>
                
                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                </div>
                </form>
              </div>
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