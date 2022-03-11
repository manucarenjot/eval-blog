<?php


    if(isset($_SESSION['errors']) && count($_SESSION['errors']) > 0) {
        $errors = $_SESSION['errors'];
        unset($_SESSION['errors']);

        foreach($errors as $error) { ?>

            <div class="alert alert-error"><?= $error ?></div> <?php
        }
    }
    ?>

<h1>Inscription</h1>

<form method="post" action="?c=user&a=inscription" id="inscription">
    <div>
        <label for="firstname">Firstname :</label>
        <br>
        <input type="text" name="firstname" id="firstname">
    </div>

    <div>
        <label for="lastname">Lastname :</label>
        <br>
        <input type="text" name="lastname" id="lastname">
    </div>

    <div>
        <label for="username">Username :</label>
        <br>
        <input type="text" name="username" id="username">
    </div>

    <div>
        <label for="mail">Mail :</label>
        <br>
        <input type="email" name="mail" id="mail">
    </div>

    <div>
        <label for="password">Password :</label>
        <br>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="password-repeat">Password-repeat :</label>
        <br>
        <input type="password" name="password-repeat" id="password-repeat">
    </div>
    <div>
        <br>
        <input type="submit" name="send" id="send">
    </div>
</form>