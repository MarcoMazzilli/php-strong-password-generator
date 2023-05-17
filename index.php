<?php

include './partials/function.php';

$letter = 'abcdifghijklmnopqrstuvwxyz';
$symbols = '!?&%$<>^+-*/()[]{}@#_=';

$passwordLength = $_POST['pswLength'] ?? 0;

$welcomeMessage = 'Seleziona il livello di sicurezza della tua password !';


if (isset($_POST['pswLength'])) {
    $generatedPassword = passwordGenerate($letter ,$symbols,$passwordLength);
};



?>

<?php
require_once './partials/head.php'
?>

<body>

    <div class="container my-5 text-center">
        <h1>Strong Password Generator</h1>
    </div>

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
            <h3>Password Generata : <?php echo $generatedPassword ?></h3>
            <?php else : ?>
                <h3><?php echo $welcomeMessage?></h3>
            <?php endif ;?>

    </div>


</body>
</html>