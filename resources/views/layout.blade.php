<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Merlos</title>
</head>

<body>
    <div>
        <img class="mx-auto d-block" src="/images/logo-merlos.png" alt="">
        <h3 class="text-center">Nuevo Cliente</h3>
    </div>
    <div>
        <form method="POST">
            <div class="form-row">
                <div class="form-group col-sm-2">
                    <label>IdCliente*</label>
                    <input type="text" class="form-control" placeholder="ejemplo: 0000000" required>
                </div>
                <div class="form-group col-sm-2">
                    <label for="inputPassword4">NIF*</label>
                    <input type="password" class="form-control" placeholder="ejemplo:  12345678X" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-7">
                    <label for="inputAddress">Nombre Comercial*</label>
                    <input type="text" class="form-control" placeholder="ejemplo:  Merlos Soluciones Tecnológicas" required>
                </div>


                <div class="form-group col-sm-7">
                    <label>Razón Social*</label>
                    <input type="text" class="form-control" placeholder="ejemplo: Merlos Infor S.l.">
                </div>

                <div class="form-group col-md-7">
                    <label for="inputAddress">Dirección:</label>
                    <input type="textarea" class="form-control" placeholder="ejemplo: C/ Dr. Robert, 13">
                </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-2">
                <label>Población</label>
                <input type="text" class="form-control" placeholder="ejemplo: Badalona">
              </div>
              <div class="form-group col-sm-2">
                <label for="inputPassword4">Código Postal</label>
                <input type="password" class="form-control" placeholder="ejemplo: 08915">
              </div>
            </div>

      <div class="form-row">
        <div class="form-group col-sm-2">
          <label>Provincia</label>
          <input type="text" class="form-control" placeholder="ejemplo: Barcelona">
        </div>
        <div class="form-group col-sm-2">
          <label>Pais</label>
          <input type="text" class="form-control" placeholder="ejemplo: Pais de Razón Social">
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-2">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" placeholder="info@merlos.net">
      </div>
      <div class="form-group col-md-2">
        <label>Teléfono</label>
        <input type="tel" class="form-control" placeholder="ejemplo: 934 608 900">
      </div>
    </div>  
      
      <div class="form-row">
        <div class="form-group col-sm-2">
          <button type="submit" class="btn btn-success mx-auto d-block">Guardar</button>
        </div>
        <div class="form-group col-sm-2">
          <button type="reset" value="Reset" class="btn btn-danger mx-auto d-block">Anular</button>
        </div>
      </div>
    </div>    
  </form>
</div>
</body>

</html>
          
          
      
