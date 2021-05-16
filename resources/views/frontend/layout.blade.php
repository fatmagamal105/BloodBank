<html>
<head>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
</head>
<body>
<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow1">
    <div class="container">
        <a class="navbar-brand " href="{{ url('/') }}"><img  src="{{ URL::to('frontend/imge/as/logo.jpg') }}" alt=""></a>
        <button class="navbar-toggler ml-auto custom-toggler"
                type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link accc " aria-current="page" href="{{ URL::to('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/about-us') }}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/counter') }}">Blood group statistics</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About dontion
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ URL::to('/why') }}">Benefites of donation</a></li>
                        <li><a class="dropdown-item" href="{{ URL::to('/donation') }}">Conditions for Donating</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/news') }}">News</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end navbar -->
    @yield('content')
<!--start footer-->
<div class="footer-copyright mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <div class="footer-social">
                    <a href="#" title="Twitter"><i class="fab fa-twitter mr-3 "></i></a>
                    <a href="#" title="Facebook"><i class="fab fa-facebook-f mr-3  "></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram mr-3  "></i></a>
                    <a href="#" title="Dribbble"><i class="fab fa-dribbble mr-3  "></i></a>
                    <a href="#" title="Pinterest"><i class="fab fa-pinterest mr-3  "></i></a>
                </div>
            </div>
            <div class="col-md-4"><div class="page">
                    <a href="{{ URL::to('/privacy') }}" >Privacy</a>
                    <a href="{{ URL::to('/contact-us') }}" title="Dribbble">contact us</a>
                    <a href="{{ URL::to('/support') }}" title="Facebook">support</a>
                </div>
            </div>
            <div class="col-md-4 ">
                <p class="copyright text-white">
                    Copyright © 2021 <a href="#" target="_blank">blood donation website</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!--end footer-->

<script src="{{ asset('frontend/js/jquery-3.5.1.slim.min.js') }}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
