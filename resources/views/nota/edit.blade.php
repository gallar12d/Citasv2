<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Nota</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Nota</h1>
            <form method = 'get' action = 'http://localhost:8000/nota'>
                <button class = 'btn btn-danger'>Nota Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/nota/{{$nota->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nota1">nota1</label>
                    <input id="nota1" name = "nota1" type="text" class="form-control" value="{{$nota->nota1}}">
                </div>
                
                <div class="form-group">
                    <label for="nota2">nota2</label>
                    <input id="nota2" name = "nota2" type="text" class="form-control" value="{{$nota->nota2}}">
                </div>
                
                <div class="form-group">
                    <label for="nota3">nota3</label>
                    <input id="nota3" name = "nota3" type="text" class="form-control" value="{{$nota->nota3}}">
                </div>
                
                
                <button class = 'btn btn-primary from-control' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
