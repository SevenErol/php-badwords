<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words PHP</title>

    <!-- link bootstrap  -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>

</head>
<body>

<div class="container text-center p-3">
    <form action="badwords.php" method="get">

        <label for="paragraph">Put your text here</label>
        <div>
        <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea>
        </div>

        <label for="word">select your censored word</label>
        <input type="text" class="mb-3" name="word">

        <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
</div>

<!-- link bootstrap  -->
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    
</body>
</html>