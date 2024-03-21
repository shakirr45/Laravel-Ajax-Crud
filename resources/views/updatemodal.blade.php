
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form action="" method="post" enctype="multipart/form" id="updatemodelform">
    @csrf
  <input type="hidden" id="up_id">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="updateModalLabel">Update product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="errmsg my-2">

            </div>
           <div class="form-group">

            <label for="name">Product Name : </label>
            <input type="text" class="form-control" id="up_name" name="up_name" placeholder="Enter Name"><br>
            <label for="name">Product Price : </label>
            <input type="text" class="form-control" id="up_price" name="up_price" placeholder="Enter Price">

           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary up_product">Update Product</button>
          </div>
        </div>
      </div>

    </form>
    
  </div>