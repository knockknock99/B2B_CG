 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title', 'Dactilar')</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
 </head>

 <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 200px;">
         <div class="container-fluid">
             <a class="navbar-brand" href="#">Codegraphi</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                     <li class="nav-item">
                         <a class="nav-link active" href="{{ url('/') }}">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('mobile-recharge') }}">Mobile Recharge</a>
                     </li>
                     <li>
                         <a href="{{ route('dth-recharge') }}"><i class="fas fa-tv"></i> DTH Recharge</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>

     <div class="container mt-4">
         @yield('content')
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
 </body>

 </html>