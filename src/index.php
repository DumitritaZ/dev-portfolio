<?php 

if(isset($_COOKIE['name']) &&  isset($_COOKIE['pass'])){
session_start();
$_SESSION['name']=$_COOKIE['name'];
$_SESSION['pass']=$_COOKIE['pass'];
 header("location:user.php");
}
?>

<!DOCTYPE HTML>

<html>
	<head>
            
		<title>Coffee Shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5eb27b2d4ba4f9001384cbd7&product=inline-share-buttons" async="async"></script>
        </head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><strong><a href="index.php">Coffee Shop</a></strong></h1>
				<nav id="nav">
					<ul class="actions">
						<li><a href="index.php" class="button default big">Acasa</a></li>
						<li><a href="gallery.php" class="button default big">Galerie</a></li>
				    </ul>
				</nav>
				
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->
			<section id="banner">
                            <div class="container">
		<ul class="staff"><li><img src="images/Logo.jpg" alt="" /></li></ul>
                            </div>
				<p>Bine ai venit!!!</p>
        <nav id="nav">
					<ul class="actions">
						<li><a href="login.php" class="button special big">Conectare</a></li>
                        <li><a href="signup.php" class="button special big">Înregistrare</a></li>
				    </ul>
				</nav>
			</section>

			<!-- One -->
				<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
                <h2>De ce să ne alegi pe noi?</h2>
                  <p>PENTRU CĂ IUBIM CAFEAUA LA FEL DE MULT CA ȘI TINE!</p>
									<ul class="staff">
                                    <li><img src="images/foto.jpg" alt="" /></li>
			                        </ul>
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
              <li><img src="images/18.jpg" alt="" /></li>
              </div>
						</div>
					</div>
				</section>

			<!-- Two -->
<section id="two" class="wrapper style2 special">
    <div class="container">
        <header class="major">
            <h2>Pentru o cafea și o atmosferă mai bună vizionează:</h2>
        </header> 
        <div class="row 150%">
            <div class="6u 12u$(xsmall)">
                <div class="image fit captioned">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Z7e8tmcSrxg" title="Barista Show" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h3>Barista</h3>
                </div>
            </div>
            <div class="6u$ 12u$(xsmall)">
                <div class="image fit captioned">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/WoVagtQTwbE?si=DLj0Nh4p4JBaj-Ii" title="CAFE VLOG" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h3>Caffee Vlog</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="sharethis-inline-share-buttons"></div>
</section>


			<!-- Three -->
				<section id="three" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Galeria noastră</h2>
						</header>
						<div class="feature-grid">
							<div class="feature">
								<div class="image square"><img src="images/3.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Geantă personalizată</h4>                                          
                                                                              <?php
                                                                            class edits1 {
                                                                              // Properties
                                                                              public $level;
                                                                              public $price;

                                                                              // Methods
                                                                              function set_level($level) {
                                                                                $this->level = $level;
                                                                              }
                                                                              function get_level() {
                                                                                return $this->level;
                                                                              }
                                                                              function set_price($price){
                                                                                 $this->price = $price;
                                                                              }
                                                                              function get_price(){
                                                                                return $this->price;
                                                                              }
                                                                            }

                                                                            $Converse = new edits1();
                                                                            $Converse->set_level('I');
                                                                            $Converse->set_price('15 LEI');
                                                                            echo "Nivel: " . $Converse->get_level();
                                                                            echo "<br>";
                                                                            echo "Preț: " . $Converse->get_price();
                                                                            ?>


									</header>
									
								</div>
							</div>
                                                    
							<div class="feature">
								<div class="image square"><img src="images/4.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Cană personalizată</h4>
                                                                                
									</header>
									<?php
                                                                            class edits2 {
                                                                              // Properties
                                                                              public $level;
                                                                              public $price;

                                                                              // Methods
                                                                              function set_level($level) {
                                                                                $this->level = $level;
                                                                              }
                                                                              function get_level() {
                                                                                return $this->level;
                                                                              }
                                                                              function set_price($price){
                                                                                 $this->price = $price;
                                                                              }
                                                                              function get_price(){
                                                                                return $this->price;
                                                                              }
                                                                            }

                                                                            $Converse = new edits2();
                                                                            $Converse->set_level('II');
                                                                            $Converse->set_price('20 LEI');
                                                                            echo "Nivel: " . $Converse->get_level();
                                                                            echo "<br>";
                                                                            echo "Preț:" . $Converse->get_price();
                                                                            ?>


								</div>
							</div>
                                                    
							<div class="feature">
								<div class="image square"><img src="images/6.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Termos</h4>
									</header>
									<?php
                                                                            class edits3 {
                                                                              // Properties
                                                                              public $level;
                                                                              public $price;

                                                                              // Methods
                                                                              function set_level($level) {
                                                                                $this->level = $level;
                                                                              }
                                                                              function get_level() {
                                                                                return $this->level;
                                                                              }
                                                                              function set_price($price){
                                                                                 $this->price = $price;
                                                                              }
                                                                              function get_price(){
                                                                                return $this->price;
                                                                              }
                                                                            }

                                                                            $Converse = new edits3();
                                                                            $Converse->set_level('III');
                                                                            $Converse->set_price('50 LEI');
                                                                            echo "Nivel: " . $Converse->get_level();
                                                                            echo "<br>";
                                                                            echo "Preț:" . $Converse->get_price();
                                                                            ?>
								</div>
							</div>
							<div class="feature">
								<div class="image square"><img src="images/7.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Aparat pentru cafea</h4>
									</header>
									<?php
                                                                            class edits4 {
                                                                              // Properties
                                                                              public $level;
                                                                              public $price;

                                                                              // Methods
                                                                              function set_level($level) {
                                                                                $this->level = $level;
                                                                              }
                                                                              function get_level() {
                                                                                return $this->level;
                                                                              }
                                                                              function set_price($price){
                                                                                 $this->price = $price;
                                                                              }
                                                                              function get_price(){
                                                                                return $this->price;
                                                                              }
                                                                            }

                                                                            $Converse = new edits4();
                                                                            $Converse->set_level('IV');
                                                                            $Converse->set_price('150 LEI');
                                                                            echo "Nivel: " . $Converse->get_level();
                                                                            echo "<br>";
                                                                            echo "PReț:" . $Converse->get_price();
                                                                            ?>
								</div>
							</div>
						</div>
					</div>
				</section>
                        <!--MAP-->
                        <div id="middle">
                        <div id="goomap">
                            
<!--map start-->    

<!--Positions map in page -->
 <div id="middlecontent">
                            <h2>Contactează-ne!</h2>
                                <p>
                                
                                 <!--LIKE&SHAREBUTTONS-->
                                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%2FLUCKYGRAPHICS%2Findex.php&layout=button_count&size=large&width=88&height=28&appId" width="88" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                <br>
                                 <div class="6u$ 12u$(xsmall)">
									<ul class="icons">
										
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
										<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
										<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
									</ul>

								</div>
                                Email:  coffeeshop@gmail.com<br>
                            </div>
                            </div>
                               <iframe width="425" height="330" float="right" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.17731475922!2d27.56991761501823!3d47.173964825757736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sUniversitatea%20Alexandru%20Ioan%20Cuza%20din%20Ia%C8%99i!5e0!3m2!1sro!2sro!4v1588181340168!5m2!1sro!2sro" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<!--map end-->
                            </div>
                        
                           
                             <!--COOKIES-->
                                  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-034427a3-b298-4b3c-9234-cc938e8f813a"></div>
                                  <!--END OF COOKIES-->
                        
                        
			
                                  <!-- Four -->
				<section id="four" class="wrapper style3 special">
					<div class="container">
						<header class="major">
							<h2>Urmărește-ne și pe rețelele de socializare!</h2>
							<p>Înregistrează-te acum!</p>
                                                        <>
						</header>
						
					</div>
				</section>
                                  
                                 

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>