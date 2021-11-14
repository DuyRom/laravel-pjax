<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
   <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/> -->
  <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script defer  src="{{asset('/js/jquery.pjax.js')}}"></script>
  <script type="text/javascript">
    
    $(document).ready(function(){
        $(document).pjax('a', '#pjax-container')
        // does current browser support PJAX
        if ($.support.pjax) {
          $.pjax.defaults.timeout = 1000; // time in milliseconds
        }
    });

  </script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="nav-page"><a href="#">Home</a></li>
      <li class="nav-page"><a href="/page1">Page 1</a></li>
      <li class="nav-page"><a href="{{route('studentList')}}">Student list</a></li>
      <li class="nav-page"><a href="/page2">Page 2</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <div id="pjax-container">
    @yield('content')
    @stack('js')
  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
</html>
