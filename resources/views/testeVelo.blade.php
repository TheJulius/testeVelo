
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Teste Velo</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>  
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/custom.js?v=').time() }}" defer></script>


        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    </head>
<body>

<section class="mt-5 ml-5">
    <div class="col-md-6 col-xs-12">
        <div class="contatos-form">
            <form method="post" id="form-contato" action="">
                @csrf
                
                <h4 class="">Informe seu CEP</h4>

                <div class="form-group col-md-6 col-xs-12 float-left">
                    <label for="cep"> CEP</label>
                    <input type="text" autocomplete="off" placeholder="* CEP" value="" class="form-control" name="cep" id="cep"/>
                </div>
                <div class="form-group col-md-6 col-xs-12 float-left">
                    <label for="rua"> Rua</label>
                    <input type="text" autocomplete="off" placeholder="* Rua" value="" class="form-control" name="rua" id="rua"/>
                </div>
                <div class="form-group col-md-6 col-xs-12 float-left">
                    <label for="bairro"> Bairro</label>
                    <input type="text" autocomplete="off" placeholder="* Bairro" value="" class="form-control" name="bairro" id="bairro"/>
                </div>
                <div class="form-group col-md-6 col-xs-12 float-left">
                    <label for="cidade"> Cidade</label>
                    <input type="text" autocomplete="off" placeholder="* Cidade" value="" class="form-control" name="cidade" id="cidade"/>
                </div>
                <div class="form-group col-md-6 col-xs-12 float-left">
                    <label for="estado"> Estado</label>
                    <input type="text" autocomplete="off" placeholder="* Estado" value="" class="form-control" name="uf" id="uf"/>
                </div>
                <div class="form-group col-md-6 col-xs-12 float-left">
                    <label for="ibge"> IBGE</label>
                    <input type="text" autocomplete="off" placeholder="* IBGE" value="" class="form-control" name="ibge" id="ibge"/>
                </div>

            </form>
        </div>
    </div>
</section>
    
</body>
</html>