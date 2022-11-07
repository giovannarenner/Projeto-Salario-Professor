<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculo</title>
</head>
<body>
    <div class="container">
    <div class="titulo">
        <h1 class="Calculo de Salário">Calcule seu Salário</h1>
  
    </div>
<form  method="POST">
         
            <p class="inputN">
             Numero de horas trabalhadas <input class="inputR" type="number" name="meshora" />
            </p>
            <p class="inputN">
             Valor da hora aula <input class="inputR" type="number" name="valorhora" />
            </p>
         
        <button class="res">Calcular</button> <br>
        
        <?php
        if( isset($_POST['valorhora']) || isset($_POST['meshora'])){
            
            $valorhora = $_POST['valorhora'];
            $meshora = $_POST['meshora'];
            $salBruto = $meshora * $valorhora;
            $desconto = 0;
                
                if ($salBruto < 1212.00) {
                    $desconto = ($salBruto * 0.075);
            
                } else if ($salBruto >= 1212.01 && $salBruto <= 2427.35) {
                    $deconto = ($salBruto * 0.09);
            
                } else if ($salBruto >= 2457.36 && $salBruto <= 3641.03) {
                    $desconto = ($salBruto * 0.12);
            
                } else {
                    $desconto = ($salBruto * 0.14);
                }
            
                $salLiquido = $salBruto - $desconto;
            
                echo "O seu Salário Bruto: $salBruto <br><br>
                      O Desconto INSS: $desconto <br><br>
                      O seu Salário Líquido: $salLiquido ";
            
            
        
        
        }

         ?>
        </form>
        </div>
</body>
</html>