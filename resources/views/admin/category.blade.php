<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
  <title>
    Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <style>
    #sidenav-main {
      height: calc(100vh - 90px); /* Adjust the height as needed */
      overflow-y: auto; /* Adds scroll when content overflows */
    }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
@include('admin.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('admin.navbar')
    <!-- End Navbar -->
    <div class="page-content mx-4">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Categories</h2>
          </div>
        </div>
        <form action="{{ url('add_category') }}" method="POST">
            @csrf
            <div class="form-group pl-4 pr-4">
                <label for="category_name">Category Name</label>
                <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Enter category name" required>
            </div>
            <div class="form-group pl-4">
                <button type="submit" class="btn btn-primary">Add Category</button>
            </div>
        </form>
        <div class="categories container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <table class="table table-bordered mt-4 mx-auto">
                        <tbody>
                            <tr>
                                <th>Category Names</th>
                                <th>Delete</th>
                            </tr>
                            @foreach ($data as $category)
                            <tr>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    <a href="{{ url('delete_category', $category->id) }}" onclick="confirmation(event)" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </div>
  <!--   Core JS Files   -->
    
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/soft-ui-dashboard.min.js?v=1.0.7') }}"></script>
</body>

</html>