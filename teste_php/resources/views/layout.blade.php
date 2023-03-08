<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> CRUD Clientes</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css" />

    <style>
        table.ui.celled img {
            display: inline-block;
        }

        head,
        content,
        body {
            font-size: 16px !important;
        }

        .centralizar {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .space {
            margin-top: 80px;
        }

        .ui.form {
            font-size: 16px !important;
        }

        .form-control {
            font-size: 16px !important;
        }

        .centro {
            text-align: center;
        }

        .btn.btn-outline-primary.ui.button {
            font-size: 16px;
            text-align: center !important;
        }
    </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <main class="py-4">
        @yield('content')
    </main>

    <script>
        $(document).ready(function() {
            $('#telefone').inputmask('(99) 999.999.999').attr('minlength', 16).attr('maxlength', 16);
            var $select = $('#tipo_pessoa option:selected').val();

            if ($select == "Fisica") {
                $('#documento').inputmask('999.999.999-99').attr('minlength', 14).attr('maxlength', 14);
            } else if ($select == "Juridica") {
                $('#documento').inputmask('99.999.999/9999-99').attr('minlength', 18).attr('maxlength', 18);
            } else {
                //continua
            }

            $("#tipo_pessoa").change(function() {
                var $select = $('#tipo_pessoa option:selected').val();
                if ($select == "Fisica") {
                    $('#documento').inputmask('999.999.999-99').attr('minlength', 14).attr('maxlength', 14);
                } else {
                    $('#documento').inputmask('99.999.999/9999-99').attr('minlength', 18).attr('maxlength', 18);
                }
            });
        });
    </script>
</body>

</html>