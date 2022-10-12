<? $pageTitle = "Contact us";
$cssFile = "contact";
include "../components/header.php"; ?>
			<div class="contactFormContainer">
				<h1 class="contactTitle">Contact us</h1>

				<div class="contactBox">
					<form name="contact" action="contact.php" method="POST">
						<div class="inputFlexBox">

							<div class="textInputBox">
								<div class="boxForInput">
									<input class="textInputs" type="text" name="firstName" placeholder="First Name...">

									<input class="textInputs" type="text" name="lastName" placeholder="Last Name...">
								</div>
								<div class="boxForInput">
									<input class="textInputs" type="text" name="email" placeholder="Email..." required>

									<input class="textInputs" type="text" name="contactNumber" placeholder="Contact Number...">
								</div>
							</div>
						
							<div class="bottomForm">
								<textarea name="message" class="textarea" placeholder="Write an email..."></textarea>

								<input type="submit" name="submit" value="Send message" class="submit">
							</div>
						</div>
					</form>
				

					<div class="contactInformation">
						<p>Some address 1, 1010 NL, Emmen</p>
						<p>+31 6 12 34 56 78</p>
						<p>circlesolutions@email.com</p>
						<a href="#">
							<img src="img/map.jpg" class="mapImage" 
							width="210px" height="140px">
						</a>
					</div>
				</div>
			</div>

<? include "../components/footer.php"; ?>
