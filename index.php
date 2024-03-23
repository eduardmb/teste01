<ml>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Formulario</title>
    <script>
        function valida(){
            nome = document.getElementById("nome").value;
            idade = document.getElementById("idade").value;
            if(nome == '') {
                alert("nome não pode ser vazio");
                return false;
            }
            if(idade == ''){
                alert("idade não pode ser vazia");
                return false; 
            }else if(idade<18){
                alert("proibido menores 18");
                return false;
            }
            return true;
        }   
    </script>

</head>
<body>
    <form action="pagina.php" target="_self" method="post" onsubmit="return valida();">
        nome: <input type="text" id = "nome" name="nome"><br>
        idade: <input type="text" id = "idade" name="idade"><br>

        <input type="submit" id="enviar">
    </form>
        



</body>
</html>
</ml>
<?php 

?>
