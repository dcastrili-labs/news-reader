<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>News Reader</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="bd-example">
                <nav id="navbar-example2" class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">News Reader</a>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/netmk')}}#mdo">ALL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/netmk/vg/')}}#fat">VG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/netmk/nrk/')}}#mdo">NRK</a>
                        </li>
                    </ul>
                </nav>
                <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
