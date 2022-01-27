<?php
session_start();
$user = $_SESSION['user'];

$users = $this->users;
?>
<div class="column is-9">
    <section class="hero is-info welcome is-small">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Hey, Admin.
                </h1>
                <h2 class="subtitle">
                    J'espère que vous passez une bonne journée!
                </h2>
            </div>
        </div>
    </section>
    <div class="card events-card">
        <header class="card-header">
            <p class="card-header-title">
                Utilisateurs
            </p>
            <a href="create" class="card-header-icon" aria-label="more options">
                Créer
                <span class="icon">
                <i class="fa fa-plus" aria-hidden="true"></i>
                </span>
            </a>
        </header>
        <div class="card-table">
            <div class="content">
                <table class="table is-fullwidth is-striped">
                    <tbody>
                    <?php
                        foreach ($users as $row) {
                            ?>
                            <tr>
                                <td width="5%"><i class="fa fa-user"></i></td>
                                <td><?= $row['id']?></td>
                                <td><?= $row['nom']?></td>
                                <td><?= $row['prenom']?></td>
                                <td><?= $row['mail']?></td>
                                <td class="is-flex is-justify-content-space-around">
                                    <a href="edit?ID=<?=$row['id']?>"><i class="fa fa-pencil-square-o"></i></a>
                                    <?php 
                                        if($row['mail'] != $user['mail']) { 
                                            
                                    ?>
                                        <a href="delete?ID=<?=$row['id']?>"><i class="fa fa-trash"></i></a> 
                                    <?php 
                                        }
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>