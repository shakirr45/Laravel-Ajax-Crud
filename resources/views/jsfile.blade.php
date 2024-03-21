<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<script>
    $(document).ready(function(){
         //    product insert with ajax;
       $(document).on('click','.add_product',function(e){
        e.preventDefault();
        let name=$('#name').val();
        let price=$('#price').val();
        // console.log(name , price ,"nfjksdhfjkdf");
      
        $.ajax({
            type: "post",
            url: "{{ url('/addproduct') }}",
            data: {name:name,price:price},
            dataType: "json",
            success: function (response) {
                 if (response.status=='success') {
                    $('#addModal').modal('hide');
                    $('#exampleModal')[0].reset();
                    $('.table').load(location.href+' .table');

                 }
            },error: function (err) {
               let error=err.responseJSON;
               $.each(error.errors,function(index,value){
                $('.errmsg').append('<span class="text-danger">'+value+'</span>'+'<br>');
               })
            }
        });

       });

       $(document).on('click','.update_product', function () {
         let id=$(this).data('id');
         let name=$(this).data('name');
         let price=$(this).data('price');

         $('#up_id').val(id);
         $('#up_name').val(name);
         $('#up_price').val(price);
       });

       //    product update with ajax;
       $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let up_id=$('#up_id').val();
        let up_name=$('#up_name').val();
        let up_price=$('#up_price').val();
        
       
        $.ajax({
            type: "post",
            url: "{{ url('/updateproduct') }}",
            data: {up_id:up_id,up_name:up_name,up_price:up_price},
            dataType: "json",
            success: function (response) {
                console.log(response);
                 if (response.status=='success') {
                    $('#updateModal').modal('hide');
                    $('#updatemodelform')[0].reset();
                    $('.table').load(location.href+' .table');

                 }
            },error: function (err) {
               let error=err.responseJSON;
               $.each(error.errors,function(index,value){
                $('.errmsg').append('<span class="text-danger">'+value+'</span>'+'<br>');
               })
            }
        });

       })

    //    delete product 

    $(document).on('click','.delete_product',function(e){
        e.preventDefault();
        let product_id=$(this).data('id');
       
        if (confirm("are you sure to delete This product ?")){
            $.ajax({
            type: 'DELETE',
            url: "{{ url('/deleteproduct') }}",
            data: {product_id: product_id},
            dataType: "json",
            success: function (response) {
                console.log(response);
                 if (response.status=='success') {
                    $('#updateModal').modal('hide');
                    $('#updatemodelform')[0].reset();
                    $('.table').load(location.href+' .table');

                 }
            }
        });
        }
        
       
        

       })

    })
</script>