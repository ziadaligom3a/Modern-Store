<header>
	<!--- Navbar --->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand text-white" href="/">My Store</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="nvbCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item pl-1">
						<a class="nav-link" href="/"><i class="fa fa-home fa-fw mr-1"></i>Home</a>
					</li>
					<li class="nav-item {{ request()->getPathInfo() === "/login" ? "active" : "" }} pl-1">
						<a class="nav-link" href="/login"><i class="fa fa-th-list fa-fw mr-1"></i>Login</a>
					</li>

					<li class="nav-item {{ request()->getPathInfo() === "/register" ? "active" : "" }} pl-1">
						<a class="nav-link" href="/register"><i class="fa fa-info-circle fa-fw mr-1"></i>Register</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="/password/reset"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Forget Password</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--# Navbar #-->
	</header>

