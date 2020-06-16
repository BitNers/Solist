<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>{{config('app.name')}}</title>
  <!-- Bootstrap // JavaScript -->
@include('import')
</head>

<body>
  <!-- Navegação -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="{{route('home.page')}}">{{config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">About
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
<div class="container justify-content" style=' display: flex;'>
    <div class="row align-items-center">
        <div class="col-md-4">
          <h3>
          {{config('app.name')}}
          </h3><br>
          <h4>
              <p class='justify-content'>A <strong>Free</strong> and <strong>Open-Source</strong> Kanban Board for fast-n'-short projects.</p>
          </h4>
          <button type="button" class="btn btn-deep-purple align-centerr">Check it out</button>
        </div>
        <div class="col-md-8">
            <img src="{{asset('storage/images/header_image.jpg')}}" class='img-responsive' style="width: 70rem; height= auto;"/>
        </div>
    </div>
</div>

  <div style="height: 150px; overflow: hidden;" >
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C113.15,177.13 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: orange;">
            </path></svg></div>
  <!-- Conteúdo da Página -->
  <div class="container" style='backgroung-color= black;'>
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">ToDo List</h1>
        <p class="lead">A Free and Open-Source ToDo-List Kanban Board.</p>
        <ul class="list-unstyled">
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">ToDo List</h1>
        <p class="lead">A Free and Open-Source ToDo-List Kanban Board.</p>
        <ul class="list-unstyled">
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">ToDo List</h1>
        <p class="lead">A Free and Open-Source ToDo-List Kanban Board.</p>
        <ul class="list-unstyled">
        </ul>
      </div>
    </div>
  </div>
  <div class="container-full">
    <img src="{{asset('storage/images/footer.png')}}" class='img-responsive' style=" width: 100%;  height: auto;"/>
  </div>
<footer class="page-footer font-small blue pt-4">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns to organize your footer content.</p>
  
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="{{route('home.page')}}"> Solist.dev</a>
    </div>

  </footer>
</body>
</html>
