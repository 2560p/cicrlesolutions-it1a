<? $pageTitle = "it works!";
$cssFile = "contact";
include "../components/head_element.php"; ?>

	<body>
		<div class="gridContainer">
<!--			<? include "../components/header.php"; ?> -->

			<div class="contactFormContainer">
					<h1>Contact us</h1>
				<div class="contactBox">
					<form name="contact" action="contact.php" method="GET">

						<input type="text" name="firstName" placeholder="First Name...">

						<input type="text" name="lastName" placeholder="Last Name...">

						<input type="text" name="email" placeholder="Email..." required>

						<input type="text" name="contactNumber" placeholder="Contact Number...">

						<textarea name="message">Message</textarea>

						<input type="submit" name="submit" value="Send message">

					</form>
				

					<div class="contactInformation">
						<p>Some address 1, 1010 NL, Emmen</p>
						<p>+31 6 12 34 56 78</p>
						<p>circlesolutions@email.com</p>

						<img src="img/map.jpg" width="210px" height="140px">
					</div>
				</div>
			</div>

<!--			<? include "../components/footer.php"; ?> -->
		</div>
	</body>
	</html>