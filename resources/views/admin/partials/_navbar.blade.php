<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<li class="nav-item nav-profile">
						<a href="#" class="nav-link">
							<div class="nav-profile-image">
								<img src="{{URL::to('backend/images/faces/face1.jpg')}}" alt="profile">
								<span class="login-status online"></span> <!--change to offline or busy as needed-->
							</div>
							<div class="nav-profile-text d-flex flex-column">
								<span class="font-weight-bold mb-2">David Grey. H</span>
								<span class="text-secondary text-small">Project Manager</span>
							</div>
							<i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('admin.index')}}">
							<span class="menu-title">Dashboard</span>
							<i class="mdi mdi-home menu-icon"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
							<span class="menu-title">Manage Products</span>
							<i class="menu-arrow"></i>
							<i class="mdi mdi-crosshairs-gps menu-icon"></i>
						</a>
						<div class="collapse" id="ui-basic">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="{{ route('admin.products') }}">Products</a></li>
								<li class="nav-item"> <a class="nav-link" href="{{route('admin.product.create')}}">Create Product</a></li>
							</ul>
						</div>
					</li>
						<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#ui_cat" aria-expanded="false" aria-controls="ui_cat">
							<span class="menu-title">Manage Category</span>
							<i class="menu-arrow"></i>
							<i class="mdi mdi-crosshairs-gps menu-icon"></i>
						</a>
						<div class="collapse" id="ui_cat">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="{{ route('admin.categories') }}">Categories</a></li>
								<li class="nav-item"> <a class="nav-link" href="{{ route('admin.create.category') }}">Create Category</a></li>
								
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pages/icons/mdi.html">
							<span class="menu-title">Icons</span>
							<i class="mdi mdi-contacts menu-icon"></i>
						</a>
					</li>
					
				
				</ul>
			</nav>