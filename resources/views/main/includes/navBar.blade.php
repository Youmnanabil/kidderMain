      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{route('index') }}" class="nav-item nav-link  {{Request()->routeIs("index")?'active':''}}">Home</a>
                    <a href="{{route('about') }}" class="nav-item nav-link  {{Request()->routeIs("about")?'active':''}}">About Us</a>
                    <a href="{{route('classes') }}" class="nav-item nav-link {{Request()->routeIs("classes")?'active':''}} ">Classes</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle  {{request()->routeIs(['facilites','teacher','becomeTeacher','appointments', 'testimonials']) ?'active':''}}" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{route('facilites') }}" class="dropdown-item  {{Request()->routeIs("facilites")?'active':''}}">School Facilities</a>
                            <a href="{{route('teacher') }}" class="dropdown-item  {{Request()->routeIs("teacher")?'active':''}}">Popular Teachers</a>
                            <a href="{{route('becomeTeacher') }}" class="dropdown-item  {{Request()->routeIs("becomeTeacher")?'active':''}}">Become A Teachers</a>
                            <a href="{{route('appointments') }}" class="dropdown-item  {{Request()->routeIs("appointments")?'active':''}}">Make Appointment</a>
                            <a href="{{route('testimonials') }}" class="dropdown-item  {{Request()->routeIs("testimonials")?'active':''}}">Testimonial</a>
                        </div>
                    </div>
                    <a href="{{route('contact') }}" class="nav-item nav-link  {{Request()->routeIs("contact")?'active':''}}">Contact Us</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->