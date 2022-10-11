<? $pageTitle = "it works!";
$cssFile = "index";
include "../components/head_element.php"; ?>

	<body>
		<div class="gridContainer">
			<? include "../components/header.php"; ?>

			<div class="contactFormContainer">
				<div class="contactForm">
					<h1>Contact us</h1>

					<form name="contact" action="contact.php" method="GET">
				
						<input type="text" name="firstName" placeholder="First Name...">

						<input type="text" name="lastName" placeholder="Last Name...">

						<input type="text" name="email" placeholder="Email..." required>

						<input type="text" name="contactNumber" placeholder="Contact Number...">

						<textarea name="message">Message</textarea>

						<input type="submit" name="submit" value="Send message">

					</form>
				</div>
			</div>

			<? include "../components/footer.php"; ?>
		</div>
	</body>
	</html>