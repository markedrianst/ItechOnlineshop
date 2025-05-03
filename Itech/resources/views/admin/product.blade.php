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

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">

    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />

    <!-- Custom CSS -->
    <style type="text/css">
      /* Container for centering the form */
      .div_center {
        text-align: center;
        padding-top: 15px;
      }

      /* Heading style */
      .h2_font {
        font-size: 30px; /* Smaller font size */
        margin-bottom: 20px;
        margin-top: 15px;
        font-weight: bold;
        color: #ffffff;
      }

      /* Styling the form container */
      .form-container {
        max-width: 450px; /* Reduced width */
        background-color: #DFD0B8;
        border: 1px solid #ddd;
        padding: 20px; /* Reduced padding */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: auto;
      }

      /* Styling each form input section */
      .div_design {
        margin-bottom: 12px; /* Reduced space between inputs */
        text-align: left;
        color: #333;
      }

      label {
        display: block;
        margin-bottom: 5px;
        font-weight: 500;
        color: #333;
        font-size: 14px; /* Smaller font size */
      }

      /* Input field styling */
      input[type="text"],
      input[type="number"],
      select,
      input[type="file"] {
        width: 100%;
        padding: 8px; /* Smaller padding */
        font-size: 14px; /* Smaller font size */
        border: 1px solid #ccc;
        border-radius: 6px;
        color: #333;
        background-color: #c2b7a7;
        transition: border-color 0.3s ease;
      }

      /* Input field focus effect */
      input[type="text"]:focus,
      input[type="number"]:focus,
      select:focus {
        border-color: #007bff;
        outline: none;
        background-color: #fff;
      }

      /* Centering the button only */
      .div_design button {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

      .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 8px 18px; /* Smaller button size */
        font-size: 14px; /* Smaller font size */
        border-radius: 6px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .btn-primary:hover {
        background-color: #0056b3;
      }

      /* Alert box styling */
      .alert {
        max-width: 400px; /* Reduced width */
        margin: 15px auto;
        padding: 8px;
        font-size: 14px;
        color: #333;
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
      }

      .btn-close {
        background-color: transparent;
        border: none;
        font-size: 16px;
        color: #333;
      }
      .content-wrapper{
        background: #222831;
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
              <h2 class="h2_font">Add Product</h2>

              <div class="form-container">
                <form action="{{url('add_product')}}" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="div_design">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" id="name" placeholder="Name of the Product">
                  </div>

                  <div class="div_design">
                    <label for="price">Product Price</label>
                    <input type="number" name="price" id="price" placeholder="Price of the Product">
                  </div>

                  <div class="div_design">
                    <label for="discount">Product Discount</label>
                    <input type="number" name="discount" id="discount" placeholder="Discount of the Product">
                  </div>

                  <div class="div_design">
                    <label for="description">Product Description</label>
                    <input type="text" name="description" id="description" placeholder="Description of the Product">
                  </div>

                  <div class="div_design">
                    <label for="category">Product Category</label>
                    <select name="category" id="category">
                      <option value="" disabled selected>Select a Category</option>
                      @foreach($category as $category)
                      <option value="{{$category->id}}">{{$category->category_name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="div_design">
                    <label for="image">Product Image</label>
                    <input type="file" name="image" id="image">
                  </div>

                  <div class="div_design">
                    <input type="submit" value="Add Product" class="btn-primary">
                  </div>
                </form>
              </div>
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
