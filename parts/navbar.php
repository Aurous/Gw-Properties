<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">G&W Properties</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?PHP echo $_SESSION['site'] . '/'?>">Home <span class="sr-only">(current)</span></a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Renters Information <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="<?PHP echo $_SESSION['site'] . '/renters#resposibilities'?>">Responsibilities</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="<?PHP echo $_SESSION['site'] . '/renters#decorating'?>">Decorating</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="<?PHP echo $_SESSION['site'] . '/renters#equal'?>">Equal Housing</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="<?PHP echo $_SESSION['site'] . '/renters#insurance'?>">Insurance</a></li>
			</ul>
		</li>
        <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Properties <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?1=1'?>">All Properties</a></li>
				<li role="separator" class="divider"></li>
				<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Houses</a>
					<ul class="dropdown-menu">
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=House'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">All Houses</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=House&bedrooms=2'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">2 Bedrooms</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=House&bedrooms=3'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">3 Bedrooms</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=House&bedrooms=4'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">4 Bedrooms</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=House&bedrooms=5'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">5 Bedrooms</a></li>
					</ul>
				</li>
				<li role="separator" class="divider"></li>
				<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Apartments</a>
					<ul class="dropdown-menu">
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=Apartment'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">All Apartments</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=Apartment&bedrooms=1'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">1 Bedroom</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=Apartment&bedrooms=2'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">2 Bedrooms</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=Apartment&bedrooms=3'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">3 Bedrooms</a></li>
					</ul>
				</li>
				<li role="separator" class="divider"></li>
				<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Duplexes</a>
					<ul class="dropdown-menu">
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=duplex'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">All Duplexes</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=duplex&bedrooms=2'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">2 Bedrooms</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=duplex&bedrooms=3'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">3 Bedrooms</a></li>
					</ul>
				</li>
				<li role="separator" class="divider"></li>
				<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Fourplexes</a>
					<ul class="dropdown-menu">
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=fourplex'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">All Fourplexes</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=fourplex&bedrooms=1'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">1 Bedroom</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=fourplex&bedrooms=2'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">2 Bedrooms</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=fourplex&bedrooms=3'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">3 Bedrooms</a></li>
					</ul>
				</li>
				<li role="separator" class="divider"></li>
				<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Condos</a>
					<ul class="dropdown-menu">
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=condo'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">All Condos</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=condo&bedrooms=2'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">2 Bedrooms</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=condo&bedrooms=3'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">3 Bedrooms</a></li>
					</ul>
				</li>
				<li role="separator" class="divider"></li>
				<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Townhomes</a>
					<ul class="dropdown-menu">
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=townhome'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">All Townhomes</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=townhome&bedrooms=2'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">2 Bedrooms</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=townhome&bedrooms=3'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">3 Bedrooms</a></li>
					</ul>
				</li>
				<li role="separator" class="divider"></li>
				<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=commercial'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">Commercial</a></li>
				<li role="separator" class="divider"></li>
				<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Villas</a>
					<ul class="dropdown-menu">
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=villas'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">All Villas</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=villas&bedrooms=2'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">2 Bedrooms</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=villas&bedrooms=3'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">3 Bedrooms</a></li>
						<li><a href="<?PHP echo $_SESSION['site'] . '/properties/?type=villas&bedrooms=4'; if(!isset($_SESSION['admin'])){ echo 'available=Yes';} ?>">4 Bedrooms</a></li>
					</ul>
				</li>
			</ul>
        </li>
		<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
		  ...
		  <li class="dropdown-submenu">
			<a tabindex="-1" href="#">More options</a>
			<ul class="dropdown-menu">
			  ...
			</ul>
		  </li>
		</ul>
		<li><a href="<?PHP echo $_SESSION['site'] . '/map'?>">Area Maps</a></li>
        <li><a href="<?PHP echo $_SESSION['site'] . '/contact'?>">Contact</a></li>
        <li><a href="<?PHP echo $_SESSION['site'] . '/properties/'?>">Search Properties</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		<?PHP
			if(isset($_SESSION['user'])){
				if(isset($_SESSION['admin']) and $_SESSION['admin'] == True){
		?>
			<li><a href="<?PHP echo $_SESSION['site'] . '/properties/new/'?>">Add New Property</a></li>
				<?PHP
				}
				?>
			<li><a href="<?PHP echo $_SESSION['site'] . '/user/'?>"><?PHP echo $_SESSION['user']; ?></a></li>
			<li><a href="<?PHP echo $_SESSION['site'] . '/logout'?>">Logout</a></li>
		<?PHP
		   }else{
		?>
			<li><a href="<?PHP echo $_SESSION['site'] . '/login'?>">Login</a></li>
		<?PHP
		   }
		?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>