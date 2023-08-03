<?php 
session_start();

if(!isset($_SESSION['admin'])){
   header('location:login.php');
} ?>
<?php include 'header.php'; ?>
<?php 
include 'php/db_conn.php';
if(isset($_GET['id']))
{
$id=$_GET['id'];
$sql = "SELECT * FROM blog WHERE id=$id";
$result = mysqli_query($conn, $sql);
                  while($rows = mysqli_fetch_assoc($result)){
                    $id=$rows['id'];
                    $title=$rows['title'];
                    $des=$rows['des'];
                    $image_url=$rows['image_url'];
                    $Pharagraph1=$rows['Pharagraph1'];
                    $Pharagraph2=$rows['Pharagraph2'];
                    $Pharagraph3=$rows['Pharagraph3'];
                  }
                }
?>
<div class="card mb-3">
            <div class="card-header ">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                  <h5 class="mb-0" data-anchor="data-anchor" id="file-input">Edit blog <a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#file-input" style="padding-left: 0.375em;"></a></h5>
                </div>
                <div class="col-auto ms-auto">
                  <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07" type="button" role="tab" aria-controls="dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07" aria-selected="true" id="tab-dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07">Preview</button><button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-5bbda65a-67ab-4be4-82b8-62eef18af131" type="button" role="tab" aria-controls="dom-5bbda65a-67ab-4be4-82b8-62eef18af131" aria-selected="false" id="tab-dom-5bbda65a-67ab-4be4-82b8-62eef18af131" tabindex="-1">Code</button></div>
                </div>
              </div>
            </div>
            <div class="card-body bg-light">
              <div class="tab-content">
                <form action="php/edit-blog.php" method="POST" enctype="multipart/form-data" >
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07" id="dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07">
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Title</label>
                    <input class="form-control w-50" id="exampleFormControlInput1" type="text" placeholder="" name="title" value="<?php echo $title ?>">
                </div>  
                <div class="mb-3 w-50">
                    <label class="form-label" for="customFile">Image input</label>
                    <label class="form-label text-danger" for="customFile"><?php echo $image_url ?></label>
                    
                    <div class="mb-3 form-check"><input class="form-check-input" id="flexCheckDefault" type="checkbox" name="checkbox_name" onclick="myFunction()">
                    <label class="form-check-label" for="basic-form-checkbox">Change Image</label></div>
                    <input class="form-control image" id="customFile" type="file" name="image" style="display:none">
                  </div>
                  <div class="mb-3 w-50">
                    <label class="form-label" for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="des"><?php echo $des ?></textarea>
                </div>
                <div class="mb-3 w-50">
                    <label class="form-label" for="exampleFormControlTextarea1">Pharagraph 1</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="p1"><?php echo $Pharagraph1 ?></textarea>
                </div>
                <div class="mb-3 w-50">
                    <label class="form-label" for="exampleFormControlTextarea1">Pharagraph 2</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="p2"><?php echo $Pharagraph2 ?></textarea>
                </div>
                
                <div class="mb-3 w-50 hidden">
                    <label class="form-label" for="exampleFormControlTextarea1">Pharagraph 3</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="p3"><?php echo $Pharagraph3 ?></textarea>
                </div>
                
             <input type="hidden" value="<?php echo $id ?>" name="id">
             <input type="hidden" value="<?php echo $image_url ?>" name="nimage">
                
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
              aspectRatio:  21/12,
              viewMode: 3,
              preview: '.preview'
          });
      }).on('hidden.bs.modal', function() {
          cropper.destroy();
          cropper = null;
      });
  
      $("#crop").click(function() {
          canvas = cropper.getCroppedCanvas({
              width: 950,
              height: 1200,
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
      <script>
function myFunction() {
  var checkBox = document.getElementById("flexCheckDefault");
  var text = document.getElementById("customFile");

  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}
</script>
    
<?php include 'footer.php'; ?>