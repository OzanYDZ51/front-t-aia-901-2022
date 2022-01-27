<?php
session_start();
$user = $_SESSION['user'];

$editUser = $this->user;
?>
<div class="container column is-10">
    <div class="section">
        <form action="" method="POST" enctype="multipart/form-data">


            <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Nom</label>
            </div>
            <div class="field-body">
                <div class="field">
                <div class="control">
                    <input class="input" name="nom" type="text" value="<?=$editUser['nom']?>">
                </div>
                </div>
            </div>
            </div>

            <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Prénom</label>
            </div>
            <div class="field-body">
                <div class="field">
                <div class="control">
                    <input class="input" name="prenom" type="text" value="<?=$editUser['prenom']?>">
                </div>
                </div>
            </div>
            </div>

            <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">E-mail</label>
            </div>
            <div class="field-body">
                <div class="field">
                <div class="control">
                    <input class="input" name="mail" type="email" value="<?=$editUser['mail']?>">
                </div>
                </div>
            </div>
            </div>

            <div class="field is-horizontal">
            <div class="field-label">
                <!-- Left empty for spacing -->
            </div>
            <div class="field-body">
                <div class="field">
                <div class="control">
                    <button class="button is-primary">
                    METTRE À JOUR
                    </button>
                </div>
                </div>
            </div>
            </div>
        </form>            
    </div>
</div>