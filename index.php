<?php

$letter = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$letteruP = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$symbols = ['?','!','$','&','#','='];

$welcomeMessage = 'Seleziona il livello di sicurezza della tua password !';
$passwordLength = $_POST['pswLength'] ?? 0;


if (isset($_POST['pswLength'])) {
    $generatedPassword = passwordGenerate($letter,$letteruP,$symbols,$passwordLength);
};

//FUNCTIONS 
function passwordGenerate($l , $lUp , $s, $limit){

    $generatedPassword = [];

    while (count($generatedPassword) < $limit) {

        # Iteratori Array
        $iterator1 = rand(1, count($l) -1);
        $iterator2 = rand(1, count($lUp)-1);
        $iterator3 = rand(1, count($s)-1);

        array_push($generatedPassword , $l[$iterator1],$lUp[$iterator2],$s[$iterator3], random_int(1,9));
    }

    return implode("",$generatedPassword);
}

?>

<?php
require_once './partials/head.php'
?>

<body>

    <div class="container my-5">
        <div class="row">
            <div class="col-5">
                <form action="index.php" method="POST" class="d-flex ">

                <select class="form-select" name="pswLength" >
                    <option value="0" selected>Seleziona il livello di sicurezza</option>
                    <option value="3">Non sicura (3caratteri)</option>
                    <option value="6">Poco Sicura (6caratteri)</option>
                    <option value="9">Sicura (9caratteri)</option>
                    <option value="12">Molto Sicura (12caratteri)</option>
                    <option value="15">Inpenetrabile (15caratteri)</option>
                    <option value="30">FBI password generator (3caratteri)</option>
                </select>

                <button type="submit" class="btn btn-success mx-4">Invia</button>

                </form>
            </div>
        </div>

    </div>

    <div class="container">

        <?php if(isset($_POST['pswLength']) && $passwordLength != 0) : ?>
            <h1>Password Generata : <?php echo $generatedPassword ?></h1>
            <?php else : ?>
                <h1><?php echo $welcomeMessage?></h1>
            <?php endif ;?>

    </div>


</body>
</html>