<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>
    
</head>
<body>
    <h1 id="aurys">Soy</h1>
    <button id= "btnrojo" style = "background-color: red; " onclick ="rojo()"> RED </button>
    <button id= "btnazul" style = "background-color:  blue  ;" onclick ="azul() ">BLUE</button>
    <button id= "btnrnegro" style = "background-color: black ; " onclick ="negro()">BLACK </button>
    <button id= "btnramarillo" style = "background-color: yellow; " onclick ="amarillo()">YELLOW</button>

    <script>
        function rojo(){
            //alert ("outch soy rojo ");
            document.getElementById("AURYSS").style.backgroundcolor= "blue"; 

        }
        function azul(){
            alert ("outch soy azul ");
            document.getElementById("AURYSS").style.backgroundcolor= "blue"; 

        }
        function negro (){
            alert ("outch soy negro ");
            document.getElementById("AURYSS").style.backgroundcolor= "black"; 


        }
        function amarillo (){
            alert ("outch soy amarillo ");
            document.getElementById("AURYSS").style.backgroundcolor= "yellow"; 

        }
    </script>
</body>
</html>