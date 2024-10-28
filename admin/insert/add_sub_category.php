<div class="content">
          <div class="card mb-3">
            <div class="card-body">
            <form action="insert_records.php" method="post">
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Add a Sub Category</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="insert_sub_category" role="button" value="Add Sub Category">
                     </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-12 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <h6 class="mb-0">Sub Category information</h6>
                </div>
                <div class="card-body pt-0"> 
                  <div class="row gx-2">
                      <div class="col-md-12 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">Sub Category name:</label>
                        <input class="form-control" id="product-name" type="text" name="sub_category_name"/>
                      </div>
                      <div class="col-md-12 col-sm-12 mb-2">
                        <?php
                               $category_id = $_GET['category_id'];
                               $sql = mysqli_query($conn, "SELECT * From tbl_category WHERE category_id=$category_id"); 
                               $records = mysqli_fetch_array($sql); 
                        ?>
                        <label class="form-label" for="product-name">Category :</label>
                        <input type="text" class="form-control" value="<?php echo htmlspecialchars($records['category_name']); ?>" readonly>

                        <!-- Hidden input for category id-->
                        <input type="hidden" name="category_id" value="<?php echo htmlspecialchars($category_id); ?>">
                      </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php include '../template/bottom.php';?>
        </div>