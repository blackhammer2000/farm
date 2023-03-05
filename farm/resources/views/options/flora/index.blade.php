
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FarmFresh - Organic Farm Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('home_ui/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('home_ui/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('home_ui/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('home_ui/css/style.css')}}" rel="stylesheet">
</head>

<body>

<div class="container d-flex justify-content-center align-items-center h-100">
 <form method="post" action="{{route('addCrop')}}" class="form" enctype="multipart/form-data">
    @csrf
    <div class=form-group>
        <input id="name" type="text" placeholder="Enter Crop Name" @error('name') is-invalid @enderror required autocomplete="name" autofocus>

      @error('name')
       <span class="invalid-feedback" role="alert">
        <strong>{{message}}</strong>
       </span>
      @enderror
    </div>

    <div class=form-group>
    <input id="name" type="text" placeholder="Enter Crop Quantity" @error('quantity') is-invalid @enderror required autocomplete="quantity" autofocus>

    @error('quantity')
       <span class="invalid-feedback" role="alert">
        <strong>{{message}}</strong>
       </span>
      @enderror
    </div>

    <div class=form-group>
     <input id="name" type="text" placeholder="Enter Crop Disease" @error('disease') is-invalid @enderror required autocomplete="disease" autofocus>

    @error('disease')
       <span class="invalid-feedback" role="alert">
        <strong>{{message}}</strong>
       </span>
      @enderror

    </div>
    <div class=form-group>
        <button type="submit" class="btn btn-success">Save Crop</button>
    </div>
 </form>
</div></body>
</html>
