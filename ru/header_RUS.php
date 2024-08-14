
    <div class="headerBox">
        <div class="headerElement">
            <div class="headerContent">
                <div class="headerContent__Box">
                    <div class="headerContent__LogoBox">
                        <div class="headerContent__LogoElement">
                            <a href="index.php"><img class="headerContent__LogoContent"
                                                      src="images/mainLogoHiT.svg" width="120"></a>
                        </div>
                    </div>
                    <div class="infoContent__titleBox">
                        <div class="infoContent__titleElement">   
                            <div class="infoContent__titleContent"><span class="redColor">Девятая</span> международная
                                конференция СНГ МГО <br>по гуминовым инновационным технологиям<br>"Гуминовые вещества и зеленые технологии"<br><span class="redColor">HIT–2024</span></div>
                        </div>
                    </div>
                    <div class="headerContent__ShipBox">
                        <div class="headerContent__ShipElement">
                            <img class="headerContent__ShipContent" src="images/ship.png" width="120" >
                        </div>
                    </div>
                </div>
                <div class="headerContent__NavBox">
                    <div class="headerContent__NavElement ">
					
					
					
					
                        <ul class="headerContent__NavContent">
                            <li class="navLink">
							<?php if ($links=='index.php')
							        echo'<a class="navLinkText mainPage redColor" href="index.php">Главная</a>';
								  else echo'<a class="navLinkText mainPage " href="index.php">Главная</a>';
								?>
                            </li>
                            <li class="navLink">
							<?php if ($links=='index_information_US.php')
							        echo'<a class="navLinkText mainInformation redColor" href="index_information_RUS.php">Общая информация</a>';
								  else echo'<a class="navLinkText mainInformation" href="index_information_RUS.php">Общая информация</a>';
								?>                                
                            </li>
                            <li class="navLink">
							<?php if ($links=='index_program_US.php')
							        echo'<a class="navLinkText saintsProgram redColor" href="index_program_RUS.php">Научная программа</a>';
								  else echo'<a class="navLinkText saintsProgram" href="index_program_RUS.php">Научная программа</a>';
								?>
                                
                            </li>
							<li class="navLink">
							<?php if ($links=='index_location_US.php')
							        echo'<a class="navLinkText howToGet redColor" href="index_location_RUS.php">Как добраться</a>';
								  else echo'<a class="navLinkText howToGet" href="index_location_RUS.php">Как добраться</a>';
								?>
                                
                            </li>
                            <li class="navLink">
							<?php if ($links=='index_committees_US.php')
							        echo'<a class="navLinkText committees redColor" href="index_committees_RUS.php">Комитеты</a>';
								  else echo'<a class="navLinkText committees" href="index_committees_RUS.php">Комитеты</a>';
								?>                                
                            </li>
                            <li class="navLink">
							<?php if ($links=='index_sponsors_US.php')
							        echo'<a class="navLinkText submissionOfAbstracts redColor" href="#">Организаторы и спонсоры</a>';
								  else echo'<a class="navLinkText submissionOfAbstracts" href="#">Организаторы и спонсоры</a>';
								?>                                
                            </li>
                            <br>
                           
                            <li class="navLink">
							<?php if ($links=='index_theses_US.php')
							        echo'<a class="navLinkText organizationAndSponsors redColor" href="index_theses_RUS.php">Подача тезисов</a>';
								  else echo'<a class="navLinkText organizationAndSponsors" href="index_theses_RUS.php">Подача тезисов</a>';
								?>                                
                            </li>
                            <li class="navLink">
							<?php if ($links=='index_exibition_RUS.php')
							        echo'<a class="navLinkText organizationAndSponsors redColor" href="index_exibition_RUS.php">Выставка</a>';
								  else echo'<a class="navLinkText organizationAndSponsors" href="index_exibition_RUS.php">Выставка</a>';
								?>                                
                            </li>
                            <li class="navLink">
							<?php if ($links=='indexd.php')
							        echo'<a class="navLinkText checkIn redColor" href="https://docs.google.com/forms/d/e/1FAIpQLSeQymyGibN5hCuWPPFWBGlSGaIczxjewj3eAuKdrUCz-_5gEQ/viewform?usp=sf_link">Регистрация</a>';
								  else echo'<a class="navLinkText checkIn" href="https://docs.google.com/forms/d/e/1FAIpQLSeQymyGibN5hCuWPPFWBGlSGaIczxjewj3eAuKdrUCz-_5gEQ/viewform?usp=sf_link">Регистрация</a>';
								?>                                
                            </li>
                            <li class="navLink">
							<?php if ($links=='contacts.php')
							        echo'<a class="navLinkText organizationAndSponsors redColor" href="contacts.php">Контакты</a>';
								  else echo'<a class="navLinkText organizationAndSponsors" href="contacts.php">Контакты</a>';
								?>
                                
                            </li>
							<!--<li class="navLink">
								<a class="navLinkText organizationAndSponsors" href="doc/katalog2022.pdf">Каталог</a>
							</li>-->
                            <li class="navLink">
                                <a class="navLinkText checkIn color" href="http://perminovalab.ru">Perminova Lab</a>
                            </li>
                            <li class="navLinkflag">
														
							<?php
							   if ($links=='index_exibition_RUS.php')
									echo "<a class=\"flag\" href=\"../ru/$links\"><img src=\"images/ENG.svg\"></a>";
							   else echo "<a class=\"flag\" href=\"../en/$links\"><img src=\"images/ENG.svg\"></a>";
							?>	
								
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
