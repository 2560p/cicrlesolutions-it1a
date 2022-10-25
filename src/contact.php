<? $pageTitle = "Contact us";
$cssFile = "contact";
include "../components/header.php"; ?>
			<div class="contactFormContainer">
				<div class="contactBox">
					<form name="contact" action="contact.php" method="POST"
					class="formBox">
							<h1 class="contactTitle">Contact us</h1>
							<div class="textInputBox">
								<div class="boxForInput">
									<input class="textInputs" type="text" name="firstName" placeholder=" First Name..." required>

									<input class="textInputs" type="text" name="lastName" placeholder=" Last Name...">
								</div>
								<div class="boxForInput">
									<input class="textInputs" type="text" name="email" placeholder=" Email..." required>

									<input class="textInputs" type="text" name="contactNumber" placeholder=" Contact Number...">
								</div>
							</div>
						
							<div class="bottomForm">
								<textarea name="message" class="textarea" placeholder=" Write an email..."></textarea>

								<div class="submitContainer">
									<input type="submit" name="submit" value="Send message" class="submit">

									<?php
										if ($_POST) {
									


											echo '<div class="submitText">Thank you ' . $_POST["firstName"] . ', your form has been submited!</div>';
										}
									?>
								</div>
							</div>
					</form>

					<div class="separationLine">
						<svg width="2" height="360" viewBox="0 0 2 594" fill="none"  xmlns="http://www.w3.org/2000/svg">
						<line x1="1" y1="593.041" x2="1" y2="-0.000305176" stroke="#799DAB" stroke-width="2"/>
						</svg>
					</div>
					
					<div class="separationLineMobile">
						<svg width="250" height="2" viewBox="0 0 250 2" fill="none" xmlns="http://www.w3.org/2000/svg">
						<line y1="1" x2="250" y2="1" stroke="#799DAB" stroke-width="2"/>
						</svg>
					</div>
					

					<div class="contactInformation">
						<div class="logoText">
							<svg width="28" height="28" viewBox="0 0 53 52" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16.0101 21.6663C16.0101 15.9824 20.7064 11.3747 26.4996 11.3747C32.2929 11.3747 36.9892 15.9824 36.9892 21.6663C36.9892 27.3503 32.2929 31.958 26.4996 31.958C20.7064 31.958 16.0101 27.3503 16.0101 21.6663ZM26.4996 14.6247C22.5359 14.6247 19.3226 17.7773 19.3226 21.6663C19.3226 25.5553 22.5359 28.708 26.4996 28.708C30.4634 28.708 33.6767 25.5553 33.6767 21.6663C33.6767 17.7773 30.4634 14.6247 26.4996 14.6247Z" fill="#799DAB"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M7.78262 19.1895C8.56509 9.87586 16.4978 2.70801 26.0227 2.70801H26.9766C36.5015 2.70801 44.4342 9.87586 45.2167 19.1895C45.637 24.1927 44.0619 29.1606 40.823 33.0469L30.2383 45.7474C28.306 48.066 24.6933 48.066 22.761 45.7475L12.1763 33.0469C8.93745 29.1606 7.36229 24.1927 7.78262 19.1895ZM26.0227 5.95801C18.2217 5.95801 11.7248 11.8285 11.0839 19.4565C10.7341 23.6205 12.0451 27.7552 14.7407 30.9897L25.3254 43.6902C25.9323 44.4184 27.067 44.4184 27.6739 43.6902L38.2586 30.9897C40.9542 27.7552 42.2652 23.6205 41.9154 19.4565C41.2745 11.8285 34.7776 5.95801 26.9766 5.95801H26.0227Z" fill="#799DAB"/>
							</svg>
							<p class="contactInfoText">Some address 1, 1010 NL, Emmen</p>
						</div>

						<div class="logoText">
							<svg width="28" height="28" viewBox="0 0 53 52" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.897 21.3557C16.844 29.7881 23.8676 36.4922 32.5988 40.1248L32.6264 40.1362L34.3132 40.8739C36.461 41.8128 38.9857 41.146 40.3628 39.2759L43.177 35.4545C43.3489 35.2211 43.3046 34.8965 43.0762 34.7157L38.1632 30.827C37.919 30.6336 37.5598 30.6787 37.373 30.926L35.4609 33.4575C34.9965 34.0723 34.1579 34.286 33.4473 33.9705C26.9186 31.0716 21.6723 25.9242 18.7177 19.5187C18.3961 18.8215 18.6138 17.9987 19.2404 17.5431L21.8206 15.6671C22.0727 15.4838 22.1186 15.1314 21.9216 14.8918L17.9575 10.0709C17.7733 9.84681 17.4426 9.80329 17.2047 9.9718L13.2887 12.7455C11.3701 14.1044 10.6945 16.6022 11.6738 18.7157L12.8957 21.3529C12.8962 21.3538 12.8966 21.3547 12.897 21.3557ZM31.2917 43.1111C21.8046 39.16 14.174 31.8734 9.88537 22.709L9.88278 22.7034L8.65826 20.0607C7.02608 16.5383 8.15217 12.3752 11.3498 10.1104L15.2658 7.3367C16.9312 6.15715 19.246 6.46179 20.5357 8.03023L24.4997 12.8512C25.8789 14.5285 25.5577 16.9951 23.7929 18.2782L22.3144 19.3532C24.8118 24.1078 28.77 27.9913 33.616 30.4416L34.7117 28.991C36.0195 27.2594 38.5335 26.9443 40.2431 28.2975L45.1561 32.1862C46.7551 33.4519 47.0653 35.7239 45.862 37.3579L43.0478 41.1793C40.7526 44.296 36.5448 45.4074 32.965 43.8426L31.2917 43.1111Z" fill="#799DAB"/>
							</svg>

							<p class="contactInfoText">+31 6 12 34 56 78</p>
						</div>

						<div class="logoText">
							<svg width="28" height="28" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.07475 18.0985C5.46777 23.7381 5.49483 30.2425 6.33944 35.8592C6.80679 38.967 9.34324 41.3496 12.4742 41.6217L15.7464 41.9062C22.5693 42.4993 29.4309 42.4993 36.2538 41.9062L39.526 41.6217C42.6569 41.3496 45.1934 38.967 45.6607 35.8592C46.5054 30.2424 46.5325 23.7385 45.9255 18.0989C45.847 17.4451 45.7588 16.7921 45.6607 16.1403C45.1934 13.0324 42.6569 10.6499 39.526 10.3777L36.2538 10.0933C29.4309 9.50016 22.5693 9.50016 15.7464 10.0933L12.4742 10.3777C9.34324 10.6499 6.80679 13.0324 6.33944 16.1403C6.24144 16.792 6.15321 17.4448 6.07475 18.0985ZM16.0278 13.3311C22.6635 12.7542 29.3367 12.7542 35.9723 13.3311L39.2445 13.6155C40.8789 13.7576 42.2029 15.0013 42.4469 16.6236C42.4722 16.7921 42.4969 16.9606 42.5208 17.1292L30.472 23.823C27.6909 25.3681 24.3092 25.3681 21.5281 23.823L9.47935 17.1293C9.50332 16.9607 9.52797 16.7921 9.55331 16.6236C9.79726 15.0013 11.1213 13.7576 12.7557 13.6155L16.0278 13.3311ZM42.9185 20.6262C43.3388 25.5396 43.1816 30.4901 42.4469 35.3759C42.2029 36.9982 40.8789 38.2419 39.2445 38.384L35.9723 38.6684C29.3367 39.2452 22.6635 39.2452 16.0278 38.6684L12.7557 38.384C11.1213 38.2419 9.79726 36.9982 9.55331 35.3759C8.81861 30.4902 8.6614 25.5397 9.08166 20.6262L19.9497 26.664C23.7124 28.7544 28.2876 28.7544 32.0503 26.664L42.9185 20.6262Z" fill="#799DAB"/>
							</svg>

							<p class="contactInfoText">circlesolutions@email.com</p>
						</div>

						<a href="https://www.google.com/maps/place/NHL+Stenden+University+of+Applied+Sciences/@52.7778561,6.9098366,17z/data=!3m1!4b1!4m5!3m4!1s0x47b7e61f3ec72443:0xbe9d297b3e4fbcc7!8m2!3d52.7778561!4d6.9120253" target="blank">
							<img src="img/mapNhl.jpg" class="mapImage">
						</a>
					</div>
				</div>
			</div>

<? include "../components/footer.php"; ?>
