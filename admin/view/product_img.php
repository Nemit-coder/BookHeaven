 <div class="content">
         
          <div class="row gx-3">
            <div class="col-xxl-12 col-xl-12">
              <div class="card" id="ticketsTable" data-list='{"valueNames":["no","er","name","date","phone","course","counsellor"],"page":30,"pagination":true,"fallback":"tickets-table-fallback"}'>
                <div class="card-header border-bottom border-200 px-0">
                  <div class="d-lg-flex justify-content-between">
                    <div class="row flex-between-center gy-2 px-x1">
                      <div class="col-auto pe-0">
                        <h6 class="mb-0">All product Images</h6>
                      </div>
                      <div class="col-auto">
                        <form>
                          <div class="input-group input-search-width">
                            <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search  by name" aria-label="search" /><button class="btn btn-sm btn-outline-secondary border-300 hover-border-secondary"><span class="fa fa-search fs-10"></span></button></div>
                        </form>
                      </div>
                    </div>
                    <div class="border-bottom border-200 my-3"></div>
                    <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                      
                      <div class="bg-300 mx-3 d-none d-lg-block d-xl-none" style="width:1px; height:29px"></div>
                      
                      <div class="d-flex align-items-center" id="table-ticket-replace-element">
                      <a class="btn btn-falcon-default btn-sm mx-2" href="<?php echo BASE_URL?>insert/insert.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('add_doc')));?>"type="button">
                            <span class="fas fa-plus" data-fa-transform="shrink-3"></span>
                            <span class="d-none d-sm-inline-block ms-1">Add Book</span>
        </a>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive scrollbar">
                  <?php   if (mysqli_num_rows($result) > 0) { ?> 
                    <table class="table table-sm mb-0 fs-10 table-view-tickets text-center">
                      <thead class="bg-body-tertiary">
                        <tr>
                        <th class="text-800 sort align-middle" data-sort="no">No</th>
                          
                         
                        <th class="text-800 sort align-middle" data-sort="name">Category Name</th>
                          
                          <th class="text-800 sort align-middle" data-sort="name">Category</th>
                          <th class="text-800 sort align-middle" data-sort="name">Action</th>
                          
                        </tr>
                      </thead>
                      <tbody class="list" id="table-ticket-body">
                      <?php $i=1; while($row = mysqli_fetch_array($result)) { ?> 
                      <tr>
                         
                        <td class="align-middle no py-2 pe-14"><?php echo $i; ?></td>
                        <td class="align-middle name py-2 pe-2"><?php echo $row["name"]; ?></td>
                        <td class="align-middle name py-2 pe-2"><img src="../uploads/<?php echo $row["category"];?>/<?php echo $row["stat_file"]; ?>" height="50" width="50"></td>
                        <td>
                      
        </a>    
        <a class="btn btn-falcon-default btn-sm mb-sm-0" href="../delete.php?productid=<?php echo base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($row['id'])))))?>" type="button">
                              <span class="fas fa-trash me-1"> </span>
        </a>    
                        </td>
                     
                      </tr>
                   
                      <?php $i++;  } ?>

                        
                      </tbody>
                    </table>
                    <?php } else{ echo "No result found"; }?>  
                    <div class="text-center d-none" id="tickets-table-fallback">
                      <p class="fw-bold fs-8 mt-3">No ticket found</p>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="d-flex justify-content-center"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                    <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <?php include '../template/bottom.php'?>
        </div>