<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic</title>
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    
</head>
<body>
<?php
    // DADOS NORMAIS //
    $nome = "";
    $email = "";
    $tel = "";
    $date = "";
    if(isset($_POST["inpname"],$_POST['inpemail'],$_POST['inptel'],$_POST['inpdate'])){
        $nome = trim($_POST["inpname"]);
        $email = trim($_POST["inpemail"]);
        $tel = trim($_POST["inptel"]);
        $date = trim($_POST["inpdate"]);
    }
?>

<?php 

    // DADOS DOC //

    $nome = "";
    $email = "";
    $tel = "";
    $date = "";
    if(isset($_POST["inprg"],$_POST['inptypeperson'],$_POST['inpcpf'])){
            $rg = trim($_POST["inprg"]);
            $type = trim($_POST["inptypeperson"]);
            $doc = trim($_POST["inpcpf"]);
        }
?>
    <div class="container">
        <div class="item col-md-9">
            <form action="final.php" class="formulario col-md-12" method="post">
                <h2 id="h2">DADOS</h2>
                <hr class="mb-3">   
                    <div class="camps">
                        <div class="elements col-md-8">
                            <input class="form-control mb-4" type="text" name="inpname" id="info" placeholder="Digite eu nome!" data-ls-module="charCounter" minlenght="2" maxlength="200" autocomplete="off" value=""onkeypress='return event.charCode >= 97 && event.charCode <= 122 || event.charCode >= 65 && event.charCode <= 90 || event.charCode == 32' required>
                            <input class="form-control mb-4" type="email" name="inpemail" id="info" placeholder="E-mail" data-ls-module="charCounter" maxlength="100" autocomplete="off" required>
                            <input class="form-control mb-4" type="text" name="inptel" id="info" placeholder="Telefone" autocomplete="off" required> 
                            <input class="form-control" type="date" name="inpdate" id="info" placeholder="Data de nascimento" max="<?php echo date('Y-m-d', strtotime('-18 year')); ?>" required>
                            <h6 id="h6">Data de nascimento</h6>
                        </div>
                        <div class="elements col-md-8">
                            <input class="form-control mb-4" type="text" name="inprg" id="info" placeholder="RG" data-ls-module="charCounter" minlenght="2" maxlength="200" autocomplete="off" required>
                            <select class="form-control mb-3" id="typeperson" name="inptypeperson">
                                <option value="Branco"></option
                                ><option value="Física">Pessoa Fisica</option>
                                <option value="Jurídica">Pessoa Jurídica</option>
                            </select>
                            <input class="form-control mb-4" type="text" name="inpcpf" id="info" placeholder="CPF/CNPJ" autocomplete="off" required>    
                        </div>
                    </div>
                    <input id="submit" class="btn btn-primary mt-3 ml-2" type="submit" value="Next">              
            </form>
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