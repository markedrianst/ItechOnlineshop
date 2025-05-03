<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>G_Gadgets Admin</title>
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
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style type="text/css">
  body {
    background-color: #f4f6f9;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .div_center {
    text-align: center;
    padding-top: 40px;
  }

  .h2_font {
    font-size: 36px;
    margin-bottom: 30px;
    color: #ffffff;
    font-weight: 600;
  }

  .input_color {
    color: #212529;
    background-color: #948979;
    border: 1px solid #ced4da;
    border-radius: 5px;
    padding: 10px 15px;
    width: 300px;
    margin-right: 10px;
  }

  .btn-primary {
    padding: 10px 20px;
    border-radius: 5px;
  }

  .center {
    margin: 40px auto;
    width: 80%;
    max-width: 800px;
    text-align: center;
    border: none;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 20px;
  }
  table.center {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    border-radius: 8px; /* Add this line */
    overflow: hidden; /* Ensures the border radius applies properly */
  }

  table.center th,
  table.center td {
    padding: 15px;
    border-bottom: 1px solid #dee2e6;
    color: black;
  }

  table.center th {
    background-color: #948979;
    color: white;
    font-weight: bold;
  }

  table.center td {
    background-color: #DFD0B8;
  }

  .btn-danger {
    border-radius: 5px;
    padding: 5px 12px;
    font-size: 14px;
  }
  .placeholder{
    border-radius: 10px;
  }
  .content-wrapper{
    background: #222831;
  }
  .placeholder{
    background: #948979;
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
                    <h2 class="h2_font">Add Category</h2>
                    <form action="{{url('/add_category')}}" method="POST">
                         @csrf
                        <input type="text" name="category"class ="input_color" id="category" placeholder="Input Product Category">
                        <input type="submit" value="Add Category" name="submit" class="btn btn-primary">

                    </form>
                </div>
                <table class="center">
                  <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                  @foreach($data as $data)
                  <tr>
                    <td>{{$data->category_name}}</td>
                    <td><a href="{{url('delete_category',$data->id)}}" onclick="return  confirm('Are your sure you want to delete this Data?')" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
                </table>
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