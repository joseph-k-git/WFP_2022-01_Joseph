<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <?php
                $medicines = array(
                    [
                        'img_src' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//112/MTA-9376789/panadol_panadol_paracetamol-panadol_biru_full01_mk4sxr0k.jpg',
                        'name' => 'Panadol',
                    ],
                    [
                        'img_src' => 'https://api.watsons.co.id/medias/ENERVON-C-TABLET-25X4S-STR-21584.jpg?context=bWFzdGVyfGZyb250L3ByZHwyMjY1OXxpbWFnZS9qcGVnfGZyb250L3ByZC84OTM1MDYzNTg0Nzk4LmpwZ3xiMGVkOGVhMDE0ZDIwOTczZWYwMmRkMDRkZWNhNDhhNTI2OTE4ZmU0MGQ3NzAzNGMxZGRkZDdjMDMzZTM1NDkx',
                        'name' => 'Enervon-C',
                    ],
                );

                $equipments = array(
                    [
                        'img_src' => 'https://cf.shopee.co.id/file/af17dcd483549b2e88ec4394a393d29b',
                        'name' => 'PulseOximeter',
                    ],
                    [
                        'img_src' => 'https://www.alatkedokteran.id/wp-content/uploads/2015/12/tensimeter-microlife-bp3aq1.jpg',
                        'name' => 'Tensimeter',
                    ],
                );
            ?>

            <div class="content">
            @if ($category == "medicines")
                <div class="title m-b-md">
                    Medicines
                </div>

                <div class="links">
                @foreach ($medicines as $id => $medicine)
                    <float>                        
                        <a href="/medicines/{{ $id }}"><img src="{{ $medicine['img_src'] }}" style="width: 200px">{{ $medicine['name'] }}</a>
                    </float>
                @endforeach
                </div>
            @elseif ($category == "med-equip")
                <div class="title m-b-md">
                    Medical Equipments
                </div>

                <div class="links">
                @foreach ($equipments as $id => $equipment)
                    <float>
                        <a href="/equipments/{{ $id }}"><img src="{{ $equipment['img_src'] }}" style="width: 200px">{{ $equipment['name'] }}</a>
                    </float>
                @endforeach
                </div>
            @endif
            </div>
        </div>
    </body>
</html>
