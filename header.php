<!-- Begin of Top Nav Bar -->
<div class="top-nav-bar">
	<div class="search-box">
		<a href="home.php"><img src="images/logo.jpg" class="logo"></a>
		<input type="text" class="form-control">
		<span class="input-group-text"><i class="fa fa-search"></i></span>
	</div>

	<div class="menu-bar">
	<nav class="navbar navbar-expand-sm   navbar-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul>
					<li><a href="home.php"><i class="fa fa-home"></i>HOME</a></li>
					<?php 
						if (isset($_SESSION['username'])){
					?>
					<li class="nav-item dropdown dmenu">
						<i class="fa fa-user usermanage"></i>
				      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				        ACCOUNT
				      </a>
				      <div class="dropdown-menu sm-menu">
				        <a class="dropdown-item" href="edit.php">Edit Profile</a>
				        <a class="dropdown-item" href="logout.php">Logout</a>
				      </div>
					</li><?php 
					}else{ ?>
						<li><a href="home.php"><i class="fa fa-home"></i>HOME</a></li>
						<?php
					} ?>

					<li><a href="#"><i class="fa fa-shopping-basket"></i>CART</a></li>
					<li><a href="#">ABOUT US</a></li>
					<li><a href="#"><i class="fa fa-phone"></i>CONTACT</a></li>
				</ul>
		<style>

			.dropdown{
				    border-radius:0;
				    border:0;
				}
				.dropdown-menu{
				    background: #0c73cc;
				    border:0;
				    top:80%;
				    border-radius:0px 0px 5px 5px;
				}
				.dropdown-item:hover{
				    background:#085ca5;
				    color:#fff;
				}
				i.fa.fa-user.usermanage {
					    color: #FFFFFF;
					    padding: 6px;
					}
				a#navbardrop {
					    padding: 0px;
					    font-weight: bold;
					}
					nav.navbar.navbar-expand-sm.navbar-light {
					    padding: 0px;
					}
					.dropdown-menu.sm-menu.show {
				    background-color: #468184;
				    min-width: 146px;
				}
		

	</style>
			
		</style>
	</div>
	</nav>
</div>
</div>
