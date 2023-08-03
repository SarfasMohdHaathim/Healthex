<?php 
session_start();

if(!isset($_SESSION['admin'])){
   header('location:login.php');
} ?>
<?php include 'header.php'; 
include_once 'php/db_conn.php';?>
<div class="card mb-3">
            <div class="card-header border-bottom">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                  <h5 class="mb-0" data-anchor="data-anchor" id="responsive-table">Contact<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#responsive-table" style="padding-left: 0.375em;"></a></h5>
                </div>
              </div>
            </div>



            <div class="card-body pt-0">
              <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-a0cc4f30-2a10-4ef8-ae2b-c45cded0cbf8" id="dom-a0cc4f30-2a10-4ef8-ae2b-c45cded0cbf8">
                  <div class="table-responsive scrollbar">
                    <table class="table table-hover table-striped overflow-hidden">
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Date</th>
                          <th scope="col">Subject</th>
                          <th class="text-end" scope="col"></th>
                          <th class="text-end" scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        
           <?php 
          $sql = "SELECT * FROM contact ORDER BY id DESC";
          $res = mysqli_query($conn,$sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($row = mysqli_fetch_assoc($res)) {  ?>
                        <tr class="align-middle">
                          <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                              
                              <div class="ms-2"><?=$row['name']?></div>
                            </div>
                          </td>
                          <td class="text-nowrap"><?=$row['email']?></td>
                          <td class="text-nowrap"><?=$row['phone']?></td>
                          <td class="text-nowrap"><?=$row['date']?></td>
                          <td class="text-nowrap"><?=$row['subject']?></td>
                          <td class="text-end">
                                <div class="d-flex">
                                <button class="btn btn-falcon-danger " type="button"  data-toggle="modal" data-target="#myModal<?=$row['id']?>"><span class="ms-1">Delete</span></button>
                                <button class="btn btn-falcon-info " type="button"  data-toggle="modal" data-target="#myView<?=$row['id']?>"><span class="ms-1">View</span></button>
                            </div>
                              </td>
                        </tr>
              <div class="modal" id="myModal<?=$row['id']?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        Modal body text goes here.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="php/delete-contact.php?id=<?=$row['id']?>" type="button" class="btn btn-danger">Delete</a>
                    </div>
                    </div>
                </div>
                </div>
              <div class="modal" id="myView<?=$row['id']?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        Message  ::<?=$row['message']?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>
                        <?php } } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
                
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

<?php include 'footer.php'; ?>