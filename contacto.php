<?php require 'header.php'; ?>
	<section class="contact-first">
		<div class="container">
			<form class="form-filter" method="GET">
				<div class="form-filter-description">
					<label for="firstname">NOMBRES</label>
					<input type="text" name="first name" placeholder="nombres">
				</div>
				<div class="form-filter-description">
					<label for="surname">APELLIDO</label>
					<input type="text" name="first name" placeholder="apellido">
				</div>
				<div class="form-filter-description">
					<label for="email">EMAIL</label>
					<input type="text" name="mail" placeholder="ejemplo@ejemplo.com">
				</div>
				<div class="form-filter-description-2">
					<label for="message">MENSAJE</label>
					<textarea id="message" name="user-message"></textarea>
				</div>
				<button>ENVIAR</button>
			</form>
		</div>
	</section>
<?php require 'footer.php'; ?>