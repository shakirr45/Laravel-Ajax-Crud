<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="" method="post" enctype="multipart/form" id="exampleModal">
    @csrf

    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Add product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="errmsg my-2">

            </div>
           <div class="form-group">

            <label for="name">Product Name : </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"><br>
            <label for="name">Product Price : </label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">

           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary add_product">Save Product</button>
          </div>
        </div>
      </div>

    </form>
    
  </div>