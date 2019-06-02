<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- VISTA PARA LOS EJEMPLOS DE SQLINJECTION -->

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
        <h1 class="mb-5">Práctica 2 - DASN</h1>
        
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Inicio</a></li>
            <li class="breadcrumb-item"><?=$example_title?></li>
        </ol>
        </nav>

        <div class="card">
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label>Introduce un texto</label>
                        <input type="text" class="form-control" name="texto" placeholder="Introduce un texto" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

    </div>
</div>