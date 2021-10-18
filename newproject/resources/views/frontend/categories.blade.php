<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>restraunt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Restraunt</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">about</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                categories
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">contact</a></li>
                
              </ul>
            </li>
            
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>


    <table class="table table-stripped table-hover">
      @if(session('message'))

         <p class ="alert alert-success">
          {{session('message')}}
         </p>
          
    @endif
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($d1 as $a)
    <tr>
      <th scope="row">{{$a->id}}</th>
      <td>{{$a->dish_name}}</td>
      <td>{{$a->dish_description}}</td>
      <td><img src="/upload/{{$a->image}}" width="200"></td>
      <td>
        <a href="{{url('edit/'.$a->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{url('delete/'.$a->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


    <!-- Footer -->
    <footer class="bg-dark text-center text-white fixed-bottom">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Form -->
        <section class="">
          <form action="">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Sign up for our newsletter</strong>
                </p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline form-white mb-4">
                  <input type="email" id="form5Example21" class="form-control" />
                  <label class="form-label" for="form5Example21">Email address</label>
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-auto">
                <!-- Submit button -->
                <button type="submit" class="btn btn-outline-light mb-4">
                  Subscribe
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </form>
        </section>
        <!-- Section: Form -->

        <!-- Section: Text -->
        <section class="mb-4">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
            repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
            eum harum corrupti dicta, aliquam sequi voluptate quas.
          </p>
        </section>
        <!-- Section: Text -->

        
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">abcd.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>
</html>