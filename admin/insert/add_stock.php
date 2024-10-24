<div class="content">
          
          <div class="card mb-3">
            <div class="card-body">
            <form action="insert_records.php" method="post" enctype='multipart/form-data'>
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Add Stock</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="insert_stock" role="button" value="Add Stock">
                     </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-12 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <h6 class="mb-0">Stock information</h6>
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
                            <label class="form-label" for="manufacturar-name">Amount:</label>
                            <input class="form-control" id="amount" type="number" name="amount">
                      </div>
                      <div class="col-6 mb-2">
                        <label class="form-label" for="product-name">Quantity:</label>
                        <input class="form-control" id="quantity" type="number" name="quantity">
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