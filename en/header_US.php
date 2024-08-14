<div class="headerBox">
				<div class="headerElement">
					<div class="headerContent">
						<div class="headerContent__Box">
							<div class="headerContent__LogoBox">
								<div class="headerContent__LogoElement">
									<a href="index.php"><img class="headerContent__LogoContent" src="images/mainLogoHiT.svg"  width="120"></a>
								</div>
							</div>
							<div class="infoContent__titleBox">
									<div class="infoContent__titleElement">
										<div class="infoContent__titleContent">Seventh International Conference of the CIS IHSS on<br>humic innovative technologies<br>"Humic substances and green technologies" <br><span class="redColor">HIT-2022</span></div>
									</div>
								</div>
							<div class="headerContent__ShipBox">
								<div class="headerContent__ShipElement">
									<img class="headerContent__ShipContent" src="images/ship.png"  width="120">
								</div>
							</div>
						</div>
						<div class="headerContent__NavBox">
							<div class="headerContent__NavElement">
								<ul class="headerContent__NavContent">
									<li class="navLink">
									<?php if ($links=='index.php')
							        echo'<a class="navLinkText mainPage redColor" href="index.php">Home page</a>';
									else echo'<a class="navLinkText mainPage" href="index.php">Home page</a>';
									?>
										
									</li>
									<li class="navLink">
									<?php if ($links=='index_information_RUS.php')
							        echo'<a class="navLinkText mainInformation redColor" href="index_information_US.php">General Information</a>';
									else echo'<a class="navLinkText mainInformation" href="index_information_US.php">General Information</a>';
									?>
										
									</li>
									<li class="navLink">
									<?php if ($links=='index_program_RUS.php')
							        echo'<a class="navLinkText saintsProgram redColor" href="index_program_US.php">Scientific program</a>';
									else echo'<a class="navLinkText saintsProgram" href="index_program_US.php">Scientific program</a>';
									?>
										
									</li>
									<li class="navLink">
									<?php if ($links=='index_location_RUS.php')
							        echo'<a class="navLinkText location redColor" href="index_location_US.php">How to get</a>';
									else echo'<a class="navLinkText location" href="index_location_US.php">How to get</a>';
									?>
										
									</li>
									<li class="navLink">
									<?php if ($links=='index_committees_RUS.php')
							        echo'<a class="navLinkText committees redColor" href="index_committees_US.php">Committees</a>';
									else echo'<a class="navLinkText committees" href="index_committees_US.php">Committees</a>';
									?>
										
									</li>
									<li class="navLink">
									<?php if ($links=='index_sponsors_RUS.php')
							        echo'<a class="navLinkText submissionOfAbstracts redColor" href="#">Organizers and sponsors</a>';
									else echo'<a class="navLinkText submissionOfAbstracts" href="#">Organizers and sponsors</a>';
									?>
										
									</li>
									<br>
									<li class="navLink">
									<?php if ($links=='index_theses_RUS.php')
							        echo'<a class="navLinkText organizationAndSponsors redColor" href="index_theses_US.php">Abstract submission</a>';
									else echo'<a class="navLinkText organizationAndSponsors" href="index_theses_US.php">Abstract submission</a>';
									?>
										
									</li>
									<li class="navLink">
									<?php if ($links=='indexd.php')
							        echo'<a class="navLinkText checkIn redColor" href="https://docs.google.com/forms/d/e/1FAIpQLSdcy_s3Y9V-ars9SlbwPGMwzQr06xet3OUCEbhGOwgI17Pyqw/viewform?usp=sf_link">Registration</a>';
									else echo'<a class="navLinkText checkIn" href="https://docs.google.com/forms/d/e/1FAIpQLSdcy_s3Y9V-ars9SlbwPGMwzQr06xet3OUCEbhGOwgI17Pyqw/viewform?usp=sf_link">Registration</a>';
									?>
										
									</li>
									<li class="navLink">
									<?php if ($links=='contacts.php')
							        echo'<a class="navLinkText organizationAndSponsors redColor" href="contacts.php">Contacts</a>';
									else echo'<a class="navLinkText organizationAndSponsors" href="contacts.php">Contacts</a>';
									?>
										
									</li>
									<!--<li class="navLink">
										<a class="navLinkText organizationAndSponsors" href="doc/katalog2022.pdf">Catalog</a>
									</li>-->
									<li class="navLink">
										<a class="navLinkText checkIn color" href="http://perminovalab.ru/en/">Perminova Lab</a>
									</li>
									<li class="navLinkflag">
									
									<?php
									   echo "<a class=\"flag\" href=\"../ru/$links\"><img src=\"images/RUS.svg\"></a>"
										
									?>
									
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>