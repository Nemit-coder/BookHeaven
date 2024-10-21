<div class="content">
          <div class="card mb-3">
            <div class="card-body">
            <form action="insert_records.php" method="post" enctype='multipart/form-data'>
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Add a Book Image</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="insert_book_image" role="button" value="Add Image">
                     </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-12 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <h6 class="mb-0">Basic information</h6>
                </div>
                <div class="card-body pt-0">
                 
                  <div class="row gx-2">
                      <div class="col-4 mb-2">
                        <label class="form-label" for="product-name">Select File:</label>
                        <input class="form-control" id="product-name" type="file" name="stat_file"/>
                      </div>

                      <div class="col-4 mb-2">
                        <label class="form-label" for="product-name">Select Type:</label>
                        <select name="type" class="form-select" required>
                          <option selected disabled>Type</option>
                          <option value="front">Front</option>
                          <option value="back">Back</option>
                          <option value="left">Left</option>
                          <option value="right">Right</option>
                        </select>
                      </div>
                     
                      <div class="col-4 mb-2">
                        <label class="form-label" for="manufacturar-name">Book Name:</label>
                        <!-- <select class="form-select" id="import-status" name="category">
                        <option value="imported" selected disabled>Select Category</option> -->
                        <?php
                                          //  include '../include/connection.php';         
                                           $isbn = $_GET['isbn'];
                                          $sql = mysqli_query($conn, "SELECT * From tbl_book WHERE isbn=$isbn"); 
                                          $records = mysqli_fetch_array($sql);
                                         ?>
                                          <!-- Display the name -->
                                          <input type="text" class="form-control"value="<?php echo htmlspecialchars($records['name']); ?>" readonly>

                                          <!-- Hidden input for the isbn and category id-->
                                          <input type="hidden" name="isbn" value="<?php echo htmlspecialchars($records['isbn']); ?>">


                                         <?php
                                            mysqli_close($conn);
                                        ?>  
                        <!-- </select>    -->
                     </div>
                  </div>

                 


                 

                  </form>
                </div>
              </div>
             
            </div>
            
          </div>
         
          
          <?php include '../template/bottom.php';?>
        </div>