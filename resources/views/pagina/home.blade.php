<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo ao Vestibular</title>
    <!-- Favicon da página -->
   <link href="{{url("css/img/icon")}}" alt="imagem auxiliar">
    <!-- Importação da fonte Montserrat-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <!-- Fullpage.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css"
        integrity="sha512-8M8By+q+SldLyFJbybaHoAPD6g07xyOcscIOQEypDzBS+sTde5d6mlK2ANIZPnSyxZUqJfCNuaIvjBUi8/RS0w=="
        crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Folha de estilo global -->
       <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <!-- Folha(s) de estilos específica(s) -->
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>

<body>
    <!-- navbar-->
    <nav class="navbar fixed-top navbar-dark" id="navbar">
        <div class="container">
            <a class="navbar-brand font-weight-bold notranslate" href="index.html">VestibularStudio</a>
            <div class="btn-group" role="group">
               
 @guest
                            @if (Route::has('login'))
                              
                                   <a href= "{{url("../login")}}" class="btn text-white btn-success">Entrar <i
                        class="fas fa-sign-in-alt"></i> </a>
                               
                            @endif
                        
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre > 
                                    {{ Auth::user()->name }}
                                </a>
                    

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                            
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                      <a href= "{{url("../adm")}}" class="btn text-white btn-success">Vestibulares <i
                        class="fas fa-sign-in-alt"></i> </a>
                        <a href= "{{url("../user")}}" class="btn text-white btn-success">Administradores<i
                        class="fas fa-sign-in-alt"></i> </a>

                                    
                                </div>
                            </li>
                        @endguest
               

            </div>
            
        </div>
    </nav>

    <div id="fullpage">
        <div class="section s1" id="section-home">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md">
                        <img src="{{url("css/img/landingPage.svg")}}" alt="imagem auxiliar">
                    </div>
                    <div class="col-md texto-landing-page">
                        <h1 class="text-black font-weight-bold m-1 mt-0 p-1 notranslate">Vestibular</h1>
                        <h5 class="text-black m-2 p-1">Saiba as matérias que mais caem nos maiores vestibulares do Brasil</h5>
                        <div class="m-3 mb-0 p-1 btn-group btn-landing-page">
                            <button class="btn-roxo" onclick="location.href='#Vestibulares'"><i
                                    class="fas fa-plus"></i> Informações</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section s3">
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
            <h2 class="mt-5 p-1 pt-5 text-center text-white font-weight-bold">Vestibulares</h2>
            <div class="container p-3">
                <div class="row d-flex justify-content-around align-items-end">
                    <div class="col-lg-12 col-md-12 shadow text-left" id="container-arredondado">
                        <div class="testimonial-section">                              
                            <table>
                                <thead>
                                    <tr>
                                        <th>Instituição</th>
                                        <th>Ano</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($vest as $vests)

    <tr>
    
      <td><b>{{$vests->inst}}</b></td>
     
      <td><b>{{$vests->ano}}</b></td>
           
   <td>
      
       <a href="{{url("home/$vests->id")}}">
        <button class="btn btn-dark">Visualizar</button>
    </a>
</td>
@endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </footer>

    </div>

    <!-- Bootstrap: Optional JavaScript -> jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- Dropdown menu-->
    <script>
        $('.dropdown-menu').on({
            "click": function (e) {
                e.stopPropagation();
            }
        });
    </script>
    <!-- Importação Fullpage.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js"
        integrity="sha512-Gx/C4x1qubng2MWpJIxTPuWch9O88dhFFfpIl3WlqH0jPHtCiNdYsmJBFX0q5gIzFHmwkPzzYTlZC/Q7zgbwCw=="
        crossorigin="anonymous"></script>
    <script>
        var fullpage = new fullpage("#fullpage", {
            autoScrolling: false,
            navigation: true,
            fitToSection: true,
            navigationTooltips: ["Home", "Vestibulares"],
            anchors: ['home', 'Vestibulares'],
            showActiveTooltip: false,
            navigationPosition: "right",
            scrollBar: true,
            scrollHorizontally: true
        });

        fullpage_api.setAllowScrolling(true);

    </script>
    <!-- Importação da biblioteca de icones FontAwesome-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Código JS da testimonial -->
    <script>
        $('.testimonial-pics img').click(function () {
            $(".testimonial-pics img").removeClass("active");
            $(this).addClass("active");

            $(".testimonial").removeClass("active");
            $("#" + $(this).attr("alt")).addClass("active");
        });
    </script>
</body>

</html>