<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW</title>
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="../css/final.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
    // DADOS NORMAIS //
    if(isset($_POST["inpname"],$_POST['inpemail'],$_POST['inptel'],$_POST['inpdate'])){
        $nome = trim($_POST["inpname"]);
        $email = trim($_POST["inpemail"]);
        $tel = trim($_POST["inptel"]);
        $date = trim($_POST["inpdate"]);
    }
?>
<?php 

    // DADOS DOC //

    if(isset($_POST["inprg"],$_POST['inptypeperson'],$_POST['inpcpf'])){
            $rg = trim($_POST["inprg"]);
            $type = trim($_POST["inptypeperson"]);
            $doc = trim($_POST["inpcpf"]);
        }
?> 
<div class="container">
        <div class="item">
            <h4>DADOS</h4>
            <hr class="mb-3">    
            <div class="final mt-4 col-md-8">
                <p><b>Nome:</b> <?php echo $nome; ?></p>
                <p><b>E-mail: </b><?php echo $email; ?></p>
                <p><b>Telefone: </b><?php echo $tel; ?></p>
                <p><b>Data de nascimento: </b><?php echo $date; ?></p>
                <p><b>RG: </b> <?php echo $rg; ?></p>
                <p><b>Tipo de pessoa:</b> <?php echo $type; ?></p>
                <?php if($type == Física){
                    echo "<p><b>CPF: </b>$doc </p>";
                }
                    if($type == Jurídica){
                        echo "<p><b>CNPJ: <b>$doc </p>";
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> 
    <script src="../script/scriptpages/scritpt.js"></script>
    <script src="../script/jquery/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
</body>
</html>