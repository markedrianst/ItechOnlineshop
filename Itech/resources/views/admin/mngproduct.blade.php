<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ITECH</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style type="text/css">

      .div_center {
          text-align: center;
          padding-top: 40px;
      }

      .h2_font {
          font-size: 36px;
          padding-bottom: 30px;
          font-weight: 600;
          color: black;
      }

      .input_color {
          color: #000;
      }

      .center {
          margin: 30px auto;
          width: 90%;
          max-width: 1200px;
          border-collapse: collapse;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          overflow: hidden;
          border-radius: 8px;
      }

      table.center th,
      table.center td {
          padding: 16px 20px;
          text-align: center;
      }

      .th_color {
          background-color:rgb(243, 33, 68);
          color: white;
          font-weight: 600;
      }

      table.center tr:nth-child(even) {
        background-color: white; 
        color: black; 
      }

      /*table.center tr:hover {
          background-color: #f1f1f1;
          transition: background-color 0.3s ease;
      }*/

      .img_size {
          width: 100px;
          height: 100px;
          object-fit: cover;
          border-radius: 8px;
      }

      .btn {
          padding: 6px 16px;
          font-size: 14px;
          border-radius: 6px;
          transition: all 0.3s ease;
      }

      .btn-danger {
          background-color: #e53935;
          color: white;
          border: none;
      }

      .btn-danger:hover {
          background-color: #c62828;
      }

      .btn-success {
          background-color: #43a047;
          color: white;
          border: none;
      }

      .btn-success:hover {
          background-color: #388e3c;
      }

      @media screen and (max-width: 768px) {
        .center {
            width: 100%;
            font-size: 14px;
        }
        table.center th, table.center td {
            padding: 12px;
        }
        .img_size {
            width: 80px;
            height: 80px;
        }
      }
      .content-wrapper{
        background: #c2b7a7;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->

        <div class="main-panel">
          <div class="content-wrapper">

            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{session()->get('message')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="div_center">
              <h2 class="h2_font">Manage Product</h2>
              <table class="table table-success table-striped  center">
                <tr class="th_color">
                  <th>Product Image</th>
                  <th>ID</th>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Discounted Price</th>
                  <th colspan="2">Action</th>
                </tr>

                @foreach($product as $product)
                <tr>
                  <td><img class="img_size" src="product/{{$product->image}}" alt="{{$product->product_name}}"></td>
                  <td>{{$product->id}}</td>
                  <td>{{$product->product_name}}</td>
                  <td>{{$product->description}}</td>
                  <td>${{$product->price}}</td>
                  <td>${{$product->discounted_price}}</td>
                  <td>
                    <a href="{{url('delete_product',$product->id)}}" onclick="return confirm('Are you sure you want to delete {{$product->product_name}}?')" class="btn btn-danger">Delete</a>
                  </td>
                  <td>
                    <a href="{{url('update_product',$product->id)}}" class="btn btn-success">Update</a>
                  </td>
                </tr>
                @endforeach

              </table>
            </div>

          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
