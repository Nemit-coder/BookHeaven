<div class="content">
          
          <div class="card mb-3">
            <div class="card-body">
            <form action="insert_records.php" method="post" enctype='multipart/form-data'>
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Add a Book</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="insert_book" role="button" value="Add Book">
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
                      <div class="col-6 mb-2">
                        <label class="form-label" for="product-name">ISBN Number:</label>
                        <input class="form-control" id="isbn" type="number" name="isbn">
                      </div>
                      <div class="col-6 mb-2">
                            <label class="form-label" for="manufacturar-name">Book Name:</label>
                            <input class="form-control" id="book-name" type="text" name="bookname">
                      </div>
                  </div>

                  <div class="row gx-2">
                      <div class="col-6 mb-2">
                        <label class="form-label" for="product-name">Category:</label>
                        <select name="category_id" id="" class="form-select">
                          <option disabled selected>Category</option>
                          <?php
                                include '../include/connection.php';
                                $result = mysqli_query($conn,"SELECT * FROM tbl_category");
                                while($row = mysqli_fetch_array($result))
                                {?>
                                  <option  value='<?php echo $row['category_id'] ?>'><?php echo $row['category_name'] ?></option>
                                 <?php 
                                }
                                mysqli_close($conn);
                          ?>
                        </select>
                      </div>
                      <div class="col-6 mb-2">
                            <label class="form-label" for="manufacturar-name">Publisher:</label>
                            <input class="form-control" id="publisher" type="text" name="publisher">
                      </div>
                  </div>
                  
                  <div class="row gx-2">
                      <div class="col-6 mb-2">
                        <label class="form-label" for="product-name">Author:</label>
                        <input class="form-control" id="author" type="text" name="author">
                      </div>
                      <div class="col-6 mb-2">
                            <label class="form-label" for="manufacturar-name">Description:</label>
                            <input class="form-control" id="description" type="text" name="description">
                      </div>
                  </div>

                  <div class="row gx-2">
                      <div class="col-6 mb-2">
                        <label class="form-label" for="product-name">Language:</label>
                        <input class="form-control" id="language" type="text" name="language">
                      </div>
                      <div class="col-6 mb-2">
                            <label class="form-label" for="manufacturar-name">Amount:</label>
                            <input class="form-control" id="amount" type="number" name="amount">
                      </div>
                  </div>


                  <div class="row gx-2">
                      <div class="col-6 mb-2">
                        <label class="form-label" for="product-name">Special Amount:</label>
                        <input class="form-control" id="spamount" type="number" name="spamount">
                      </div>
                  </div>

                  
                  </div>
                  </form>
                </div>
              </div>
             
            </div>
            
          </div>
         
          
          <?php include '../template/bottom.php';?>
        </div>