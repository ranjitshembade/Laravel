<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>
</head>

<body>
      <h1> Welcome to Home Page, {{$name ?? "Guest"}}</h1>
 
      <h1>
            @if($name == "")

            name is not entered

            @elseif($name == "RANJIT")

            name is correct

            @else

            name is not correct

            @endif 


      </h1>
</body>

</html>