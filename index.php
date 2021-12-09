<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

    <title>Distance Between Citis</title>
  </head>
  <body>
  <div class="jumbotron">
          <div class="container-fluid">
              <h1>Distance between cities App.</h1>
              <p>Our app will help you calculate travelling distances.</p>
              <form class="form-horizontal">
                  <div class="form-group">
                      <label for="from" class="col-xs-2 control-label">From:</label>
                      <div class="col-xs-10">
                          <input type="text" id="from" placeholder="Origin" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="to" class="col-xs-2 control-label">To:</label>
                      <div class="col-xs-10">
                          <input type="text" id="to" placeholder="Destination" class="form-control">
                      </div>
                  </div>
              </form>
              
              <div class="col-xs-offset-2 col-xs-10">
              <button class="btn btn-info btn-lg" onclick="calcRoute();">Submit</button>
              </div>
          </div>
          <div class="container-fluid">
              <div id="googleMap">
              
              </div>
              <div id="output">
              
              </div>
          </div>
      
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHiW4226_iqcGEkEqdrkyE4ph5PUw4GNQ=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
  </body>
</html>