 <!-- Product grid -->
 <div class="col-lg-12">
            <div class="row row-cols-2 row-cols-md-4 g-3 pb-3 mb-3">

              <!-- Item -->
              <?php
                        include '../admin/include/connection.php';
                        $sql = "SELECT * FROM tbl_book INNER JOIN tbl_category ON tbl_book.category_id=tbl_category.category_id INNER JOIN tbl_book_image ON tbl_book.isbn=tbl_book_image.isbn WHERE category_name='fiction' AND type='front'";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
              ?>   
              <div class="col">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="book-general-info.php?isbn=<?php echo $row['isbn'] ?>">
                      <div class="ratio" style="--cz-aspect-ratio: calc(320 / 258 * 100%)">
                        <img src="../admin/uploads/books/<?php echo $row["isbn"];?>/<?php echo $row["stat_file"]; ?>" alt="VR Glasses">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star text-body-tertiary opacity-75"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(123)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="book-general-info.php?isbn=<?php echo $row['isbn'] ?>">
                        <span class="animate-target"><?php echo $row['name'] ?></span>
                      </a>
                    </h3>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="book-general-info.php?isbn=<?php echo $row['isbn'] ?>">
                        <span class="animate-target"><?php echo $row['author'] ?></span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0"><?php echo $row['amount'] ?></div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
               }
               ?>
            </div>
 </div>       