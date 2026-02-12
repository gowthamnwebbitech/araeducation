        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">

                    <li><a href="{{ route('admin.dashboard') }}" class="" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					
				
					<li><a href="{{ route('slider.index') }}" class="" aria-expanded="false">
						<i class="fas fa-clone"></i>
							<span class="nav-text">slider(Home)</span>
						</a>
					</li>
					
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
						<i class="fa fa-th-large"></i>
							<span class="nav-text">Gallery</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('imageGallery.index') }}">Image Gallery</a></li>
							<li><a href="{{ route('videoGallery.index') }}">Video Gallery</a></li>
                        </ul>
                    </li>
                    
                    
                    <li><a href="{{ route('testimonial.index') }}" class="" aria-expanded="false">
						<i class="fa fa-tasks"></i>
							<span class="nav-text">Testimonials</span>
						</a>
					</li>
					
					
					<li><a href="{{ route('blog.index') }}" class="" aria-expanded="false">
						<i class="fa fa-tasks"></i>
							<span class="nav-text">Blog</span>
						</a>
					</li>
					
					<li><a href="{{ route('resource.index') }}" class="" aria-expanded="false">
						<i class="fa fa-window-restore"></i>
							<span class="nav-text">Resource</span>
						</a>
					</li>
					
					<li><a href="{{ route('course.index') }}" class="" aria-expanded="false">
						<i class="fa fa-university"></i>
							<span class="nav-text">Course List</span>
						</a>
					</li>
					
					<li><a href="{{ route('contact.queries') }}" class="" aria-expanded="false">
						<i class="fa fa-question"></i>
							<span class="nav-text">Contact us Queries</span>
						</a>
					</li>
					
                    <li><a href="{{ route('enquiries') }}" class="" aria-expanded="false">
						<i class="fa fa-phone"></i>
							<span class="nav-text">Enquiries</span>
						</a>
					</li>
                    
					<li><a href="{{ route('admin.popup') }}" class="" aria-expanded="false">
						<i class="fa fa-question"></i>
							<span class="nav-text">Pop-up Image</span>
						</a>
					</li>
					
                    <li><a href="{{ route(name: 'category.index') }}" class="{{ request()->is('/admin/category*') ? 'mm-active' : '' }}" aria-expanded="false">
						<i class="fa fa-list"></i>
							<span class="nav-text">Category</span>
						</a>
					</li>

					<li><a href="{{ route(name: 'landing.index') }}" class="{{ request()->is('/admin/landing*') ? 'mm-active' : '' }}" aria-expanded="false">
						<i class="fa fa-globe"></i>
							<span class="nav-text">Landing Page</span>
						</a>
					</li>
                    
                     <li><a href="{{ route('password.change') }}" class="" aria-expanded="false">
							<i class="fa fa-unlock-alt"></i>
							<span class="nav-text">Change password</span>
						</a>
					</li>
                    
                    

                </ul>
				
	
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->