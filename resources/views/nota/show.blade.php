<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Nota</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Nota</h1>
            <br>
            <form method = 'get' action = 'http://localhost:8000/nota'>
                <button class = 'btn btn-primary'>Nota Index</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>nota1 : </i></b>
                        </td>
                        <td>{{$nota->nota1}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>nota2 : </i></b>
                        </td>
                        <td>{{$nota->nota2}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>nota3 : </i></b>
                        </td>
                        <td>{{$nota->nota3}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
