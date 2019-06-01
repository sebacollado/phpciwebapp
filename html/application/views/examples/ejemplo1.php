<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
        <h1 class="mb-5">Práctica 2 - DASN</h1>
        
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Inicio</a></li>
            <li class="breadcrumb-item">Ejemplo 1. Haciéndolo mal.</li>
        </ol>
        </nav>

        <div class="card">
            <div class="card-body">
                <form method="post" action="<?=base_url();?>home/ejemplo1">
                    <div class="form-group">
                        <label>Introduce tu email para obtener información de tu usuario</label>
                        <input type="text" class="form-control" name="email" placeholder="Introduce tu email">
                        <small class="form-text text-muted"><b>Atención</b>: Este formulario es vulnerable a SQLInjection.</small>
                        <br>
                        <small class="form-text text-muted">Para comprobar el uso <b>normal</b>, introducir un correo como: seba@example.com</small>
                        <small class="form-text text-muted">Para comprobar el uso <b>malicioso</b>, introducir una cadena como: ' or '1'='1</small>
                        <br>

                    </div>
                    <?php
                    if (isset($users) && sizeof($users) != 0){

                        echo "<h3>Resultado</h3>";

                        foreach ($users as $user){
                            $id = $user->id;
                            $name = $user->name;
                            $email = $user->email;

                            echo "<span>" . $id . " " . $name . " " . $email . "</span>";
                            echo '<br>';
                        }

                        if (sizeof($users) > 1){
                            echo "<small class='form-text text-muted'>Vaya, has obtenido más información de la cuenta...</small>";
                            echo "<br>";
                        }else if(sizeof($users) == 1){
                            echo "<small class='form-text text-muted'>Eres buena persona ;)</small>";
                            echo "<br>";
                        }
                        
                    }
                    ?>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

    </div>
</div>