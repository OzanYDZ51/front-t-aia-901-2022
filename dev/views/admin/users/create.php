<?php
session_start();
$user = $_SESSION['user'];
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
                    <input class="input" name="nom" type="text">
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
                    <input class="input" name="prenom" type="text">
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
                    <input class="input" name="mail" type="email">
                </div>
                </div>
            </div>
            </div>

            <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Mot de passe</label>
            </div>
            <div class="field-body">
                <div class="field">
                <div class="control">
                    <input class="input" name="password" type="password">
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
                    CRÉER
                    </button>
                </div>
                </div>
            </div>
            </div>
        </form>            
    </div>
</div>