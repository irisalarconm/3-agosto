<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    crossorigin="anonymous">
    <title>Fundación Tapitas</title>
</head>
<body style="background-color: #E6FEE8;">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #D7DAD6;" >
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="inicio">Inicio</a>
                <a class="nav-link" href="quienes-somos">Quienes Somos</a>
                <a class="nav-link" href="acerca-de">Acerca de</a>
                <a class="nav-link" href="contacto">Contacto</a>
            </div>
            </div>
        </div>
    </nav>
    <!--End Navbar-->

    <div class="container" >
        <div class="row">
            <!--SideBar-->
            <div class="col-md-3" style="background-color: #FEE005;">
                <br><br>
                <ul class="list-group">
                    <li class="list-group-item disabled" aria-disabled="true">Menú Principal</li>
                    <li class="list-group-item">Salva PetVidas</li>
                    <li class="list-group-item">Salva KidVidas</li>
                    <li class="list-group-item">Afiliate</li>
                    <li class="list-group-item">Apadrina una Vida</li>
                    <li class="list-group-item">Donaciones</li>
                    <li class="list-group-item">Voluntariado</li>
                    <li class="list-group-item">Ayuda la Fundación</li>
                    <li class="list-group-item">Hogares de paso PETS</li>
                    <li class="list-group-item">Tienda Virtual</li>
                    <li class="list-group-item">Convenios</li>
                    <li class="list-group-item">Patrocinadores</li>
                    <li class="list-group-item">Nuestras Sedes</li>
                </ul>
                <br><br>
            </div>
            <!--EndSideBar-->
            <!--Content-->
            <div class="col-md-9">
                @yield('content')
            </div>
            <!--EndContent-->
        </div>
    </div>
    <!--Footer-->
    <footer style="background-color: #B8FC12; padding:30px;">
        <div style="width: 100%; text-align: center;>
            <span style="font-color: #000000; items-align: center; "><strong>WWW.FUNDACIONTAPITAS.COM</strong></span>
        </div>
    </footer>
    <!--EndFooter-->
</body>
</html>