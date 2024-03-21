<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>laravel crud</title>
  </head>
  <body>
   
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Ajax Table</h1>
            <button  type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#addModal">
               Add product
            </button>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key=>$product)
                        
                  
                  <tr>
                    <th >{{$key+1}}</th>
                    <th >{{$product->name}}</th>
                    <th >{{$product->price}}</th>
                    <td><a
                        data-id="{{$product->id}}"
                        data-name="{{$product->name}}"
                        data-price="{{$product->price}}"
                        data-bs-toggle="modal" data-bs-target="#updateModal" href=""class="update_product btn btn-success">Edit</a>
                    <a 
                    data-id="{{$product->id}}"
                    href=""class="btn btn-danger delete_product">Delte</a>

                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              {{ $products->links() }}
        </div>
        <div class="col-4"></div>
    </div>
</div>

 @include('product_modal')
 @include('updatemodal')
   
   @include('jsfile')
   
  </body>
</html>
