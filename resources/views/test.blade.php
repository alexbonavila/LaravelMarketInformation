<!DOCTYPE html>
<html>
<head>
    <title>My Title</title>
</head>

<body>
<body>

<script>
    function Suma() {
        var ingreso1 = document.calculadora.ingreso1.value;
        var ingreso2 = document.calculadora.ingreso2.value;
        try{
            //Calculamos el número escrito:
            ingreso1 = (isNaN(parseInt(ingreso1)))? 0 : parseInt(ingreso1);
            ingreso2 = (isNaN(parseInt(ingreso2)))? 0 : parseInt(ingreso2);
            document.calculadora.resultado.value = ingreso1*ingreso2;
        }

        catch(e) {}
    }
</script>

<form name="calculadora">
    Ingrese números:<br>
    <input type="text" name="ingreso1" onKeyUp="Suma()"><br><br>
    <input type="text" name="ingreso2" onKeyUp="Suma()"><br><br>
    El resultado es:<br>
    <input type="text" name="resultado" disabled><br>
</form>

</body>

</body>
</html>