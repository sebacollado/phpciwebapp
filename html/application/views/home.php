<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Práctica 2 - DASN</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
			<h1 class="mb-5">Práctica 2 - DASN</h1>
			<div class="list-group">
				<span href="#" class="list-group-item">
					<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">Evaluación de la pila de desarrollo</h5>
					</div>
					<p class="mb-1">Apache + PHP + CodeIgniter + SQLite</p>
				</span>
				<span href="#" class="list-group-item">
					<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">Detalles de la pila</h5>
					</div>
					<p class="mb-1">Apache + PHP + CI + SQLite</p>
				</span>
				<span href="#" class="list-group-item">
					<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">Autor</h5>
					</div>
					<p class="mb-1">Sebastián Collado Montañez</p>
				</span>
				<span href="#" class="list-group-item">
					<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">Ejemplos</h5>
					</div>

					<span><a class="mb-1" href="<?=base_url();?>home/ejemplo1">Ejemplo 1. Haciéndolo mal.</a>
						<span class="badge badge-secondary">SQLInjection</span>
						<span class="badge badge-danger">Vulnerable</span>
					</span>
					<br>

					<span><a class="mb-1" href="<?=base_url();?>home/ejemplo2">Ejemplo 2. Utilizando el método “Escape”.</a>
						<span class="badge badge-secondary">SQLInjection</span>
						<span class="badge badge-success">Seguro</span>
					</span>
					<br>

					<span><a class="mb-1" href="<?=base_url();?>home/ejemplo3">Ejemplo 3. Utilizando el método “Query Binding”.</a>
						<span class="badge badge-secondary">SQLInjection</span>
						<span class="badge badge-success">Seguro</span>
					</span>
					<br>

					<span><a class="mb-1" href="<?=base_url();?>home/ejemplo4">Ejemplo 4. Utilizando la clase “Query Builder Class”.</a>
						<span class="badge badge-secondary">SQLInjection</span>
						<span class="badge badge-success">Seguro</span>
					</span>
					<br>

					<span><a class="mb-1" href="<?=base_url();?>home/ejemplo5">Ejemplo 5. Utilizando “Form Validation”.</a>
						<span class="badge badge-secondary">Validación de datos</span>
						<span class="badge badge-success">Seguro</span>
					</span>
					<br>

				</span>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>