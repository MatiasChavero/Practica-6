<?php require 'header.php'; ?>
	<section class="contact-first">
		<div class="container">
			<form class="form-filter" method="GET">
				<div class="form-filter-description">
					<label for="firstname">NOMBRE</label>
					<input type="text" name="first name" required>
				</div>
				<div class="form-filter-description">
					<label for="surname">APELLIDO</label>
					<input type="text" name="first name" required>
				</div>
				<div class="form-filter-description">
					<label for="email">EMAIL</label>
					<input type="email" name="mail" placeholder="ejemplo@ejemplo.com" required>
				</div>
				<div class="form-filter-description-2">
					<label for="message">MENSAJE</label>
					<textarea id="message" name="user-message"></textarea>
				</div>
				<button type="submit" id="button-first">ENVIAR</button>
			</form>
		</div>
	</section>
<?php require 'footer.php'; ?>