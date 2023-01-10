<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    @yield('css')
</head>
<body>
    
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Nin ChanDara</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{'/'}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('profile')}}">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('about')}}">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('calculator')}}">Calculator</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('upload')}}">Upload</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('crew')}}">Crews</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </div>

    

      <div class="container-fluid">
        @yield('content')
      </div>
    

    <script> src="{{asset('js/jquery-3.6.3.min.js')}}" </script>
    <script> src="{{asset('bootstrap/js/bootstrap.js')}}" </script>
</body>
</html>