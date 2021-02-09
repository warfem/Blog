<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Blog Principal</title>
    <style>
        body {
            font-family: Tahoma;
        }

        hr {
            background-color: rgb(216, 163, 126);
            height: 2px;
            width: 60%;
        }
        img{
            display: flex;
            margin: 0 auto;
        }

        #imgTop {
            background-image: url("https://wallpaperstock.net/wallpapers/thumbs1/50974wide.jpg");
            z-index: 1;
            width: 100%;
            height: 300px;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        nav {
            background-color: rgb(230, 145, 84);
        }
        
        #parrafos{
            padding-left: 400px;
            padding-right: 400px;
        }
        button:focus {
            outline: 0;
        }

        .navbar .dropdown-menu .form-control {
            width: 200px;
        }


    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md  navbar-dark sticky-top ">
        <a class="navbar-brand" href="#">F.Hidalgo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="biografia">Biografía</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="libros">Publicaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Sugerencias</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
                
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12  " id="imgTop">
                <h1 class="text-center mt-5 ">Biografía</h1>
            </div>
        </div>

        <div class=" mt-2 mb-2">
            <img src="/img/autor.jpeg" style="width: 400px;" >

            <p class="mt-4" id="parrafos">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisl urna, euismod et neque eget, elementum imperdiet leo. Sed interdum egestas dui a maximus. 
                Nulla at dignissim magna. Nulla nec magna semper, pretium odio vel, feugiat dolor. Sed facilisis magna nibh, et pulvinar tortor semper eu. Curabitur ac tempus augue, 
                non tincidunt urna. Aenean nec lectus arcu. Fusce faucibus, justo a ultrices tempor, justo nunc blandit tortor, quis faucibus enim quam in nibh.
                 Nam ut libero at enim vehicula ultrices sed id eros. Pellentesque at libero at velit rhoncus efficitur in eu nulla. Quisque quis sem non orci cursus consequat.
            </p>
            <p  id="parrafos">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisl urna, euismod et neque eget, elementum imperdiet leo. Sed interdum egestas dui a maximus. 
                Nulla at dignissim magna. Nulla nec magna semper, pretium odio vel, feugiat dolor. Sed facilisis magna nibh, et pulvinar tortor semper eu. Curabitur ac tempus augue, 
                non tincidunt urna. Aenean nec lectus arcu. Fusce faucibus, justo a ultrices tempor, justo nunc blandit tortor, quis faucibus enim quam in nibh.
                 Nam ut libero at enim vehicula ultrices sed id eros. Pellentesque at libero at velit rhoncus efficitur in eu nulla. Quisque quis sem non orci cursus consequat.
            </p>
            <p  id="parrafos">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisl urna, euismod et neque eget, elementum imperdiet leo. Sed interdum egestas dui a maximus. 
                Nulla at dignissim magna. Nulla nec magna semper, pretium odio vel, feugiat dolor. Sed facilisis magna nibh, et pulvinar tortor semper eu. Curabitur ac tempus augue, 
                non tincidunt urna. Aenean nec lectus arcu. Fusce faucibus, justo a ultrices tempor, justo nunc blandit tortor, quis faucibus enim quam in nibh.
                 Nam ut libero at enim vehicula ultrices sed id eros. Pellentesque at libero at velit rhoncus efficitur in eu nulla. Quisque quis sem non orci cursus consequat.
            </p>
            <p  id="parrafos">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisl urna, euismod et neque eget, elementum imperdiet leo. Sed interdum egestas dui a maximus. 
                Nulla at dignissim magna. Nulla nec magna semper, pretium odio vel, feugiat dolor. Sed facilisis magna nibh, et pulvinar tortor semper eu. Curabitur ac tempus augue, 
                non tincidunt urna. Aenean nec lectus arcu. Fusce faucibus, justo a ultrices tempor, justo nunc blandit tortor, quis faucibus enim quam in nibh.
                 Nam ut libero at enim vehicula ultrices sed id eros. Pellentesque at libero at velit rhoncus efficitur in eu nulla. Quisque quis sem non orci cursus consequat.
            </p>
            
        </div>
        
        <div class="container-fluid"> <!--FOOTER-->
            <div class="row text-center" style=" background-color: rgb(230, 145, 84); color: white;">
                <div class="col-md-12 col-xs-12 pt-3 mx-auto">
                    <div class="copytext">&copy; MyProfile, All rights reserved | Design By: Francisco Hidalgo</div>
                </div>
            </div>
        </div>
    </div><!--Final CONTAINER-->
    

</body>
</html>
