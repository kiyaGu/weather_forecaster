
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather predictor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container" id="container">
    <div class="row" id="container-row">
       <div class="col-md-6 col-md-offset-3 center">
       <h1>Weather Predictor</h1>
       <p class="lead" id="head">Enter your city to see the weather forcast</p>
        <form action="" method="post">
            <div class="form-group">
               <label for="city" class="marginRight">
                <input type="text" name="city" class="form-control marginRight" placeholder="E.g. London, Paris" id="city"></label>
            </div>
            <input type="submit" name="submit" class="btn btn-success" id="getWeather">      
        </form>
        <div id="displaySuccess" class="marginTop alert alert-success"></div>
        <div id="displayFailure" class="marginTop alert alert-danger"></div>
       </div>
    </div>
    
</div>



<script>window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><\/script>')
</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>
