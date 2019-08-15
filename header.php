

<!-- Begin of Top Nav Bar -->
<div class="top-nav-bar">
	<div class="search-box">
		<a href="home.php"><img src="images/logo.jpg" class="logo"></a>
		<input type="text" class="form-control" id="searching">
		<span class="input-group-text" ><i class="fa fa-search"></i></span>
	</div>

	<div class="menu-bar">
	<nav class="navbar navbar-expand-sm   navbar-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation" >
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul>
					<li><a href="home.php"><i class="fa fa-home"></i><br> HOME</a></li>
					<li><a href="mostviewDisplay.php">Most View</a></li>
					<li><a href="cart.php"><i class="fa fa-shopping-basket"></i>CART</a></li>
					<?php 
						if (empty($_SESSION['username']))
						{ ?>
							<li><a href="login.php"> Login</a></li>
					<?php	} else {
					 ?>
					<li class="nav-item dropdown dmenu">
						<i class="fa fa-user usermanage"></i><br>
				      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				        ACCOUNT
				      </a>
				      <div class="dropdown-menu sm-menu">
				        <a class="dropdown-item" href="edit.php">Edit Profile</a>
				        <a class="dropdown-item" href="logout.php">Logout</a>
				      </div>
					</li>
					<?php } ?>	
					<li><a href="user_recommendation.php"> Recommendation</a></li>
				</ul>
		
	</div>
	</nav>
</div>
</div>

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
					    float:right;
					}
					.dropdown-menu.sm-menu.show {
				    background-color: #468184;
				    min-width: 146px;
				}

.menu-bar {
    width: 45%;
    height: 75px;
    float: right;
}
.menu-bar ul
{
	display: inline-flex;
	float: right;

}
.menu-bar li
{
	border-left: 1px solid #fff;
	 list-style-type: none;
	 padding: 0px;
	 text-align: center;
	 background-color: orange;
	 cursor: pointer;
	 
}
.menu-bar li a
{
	font-size: 16px;
	font-weight: bold;
	color: #fff;
	text-decoration: none;

}
.menu-bar li a:hover
{
	color: red;
}

#navbarTogglerDemo03 ul li{
	width: 122px;
	height: 72px;
	float: left;
	text-align: center;
}

			
		</style>