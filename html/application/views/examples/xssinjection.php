<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- VISTA PARA LOS EJEMPLOS DE XSSINJECTION -->

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
                <?php echo form_open(''); ?>
                    <div class="form-group">
                        <label>Introduce tu comentario</label>
                        <textarea class="form-control" name="comment" placeholder="Introduce tu comentario" required></textarea>
                        <small class="form-text text-muted">Para comprobar el uso <b>normal</b>, introducir un texto como: Buenas tardes, amigos.</small>
                        <small class="form-text text-muted">Para comprobar el uso <b>malicioso</b>, introducir una cadena maliciosa como: &lt;script type="text/javascript"&gt;alert("XSS");&lt;/script&gt;</small>
                        <small class="form-text text-muted">Otro ejemplo <b>malicioso</b>, puede ser: &lt;p style="font-size:200px"&gt;Esto es un párrafo&lt;/p&gt;</small>
                        <small class="form-text text-muted">Otro ejemplo <b>malicioso</b> más: &lt;img src="https://www.webconsultas.com/sites/default/files/styles/wc_adaptive_image__small/public/migrated/tomate.jpg"&gt;</small>
                        <br>
                    </div>
                    <?php
                    if (isset($comment)){
                        echo "<h4>Resultado</h4>";
                        echo "<p>" . $comment . "</p>";
                    }
                    ?>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

    </div>
</div>