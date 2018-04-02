<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Senai</title>
  </head>
  <body>
    <h1></h1>
      <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">PHP</h1>
          <p class="lead text-muted">Exemplos de algoritmos e conexão com bancos de dados com PHP</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

          <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">PHP Info</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-secondary" onclick="phpInfo()">View</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Consulta Oracle via DBO</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-secondary" onclick="consultaOracleViaBDO()">View</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Consultar MySql via BDO</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-secondary" onclick="consultarMySqlViaBDO()">View</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Consultar MySql via MySqli</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-secondary" onclick="consultarMySqlViaMysqli()">View</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Calculadora de fatorial, recursiva</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-secondary" onclick="calculadoraDeFatorialRecursiva()">View</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Verifica se número é impar ou par</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-secondary" onclick="imparpar()">View</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type=text/javascript>
        function phpInfo() {
            window.location.href="info.php"
        }

        function consultaOracleViaBDO() {
          window.location.href="oracle.php"
        }


        function consultarMySqlViaBDO() {
            window.location.href="mysql.php"
        }

        function consultarMySqlViaMysqli() {
            window.location.href="mysqli.php"
        }

        function calculadoraDeFatorialRecursiva() {
            window.location.href="fatorial.php?n=3"
        }

        function imparpar() {
            window.location.href="impar-par.php?n=3"
        }

    </script>
  </body>
</html>