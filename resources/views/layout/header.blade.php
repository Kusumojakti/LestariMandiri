<header>
    <nav class="navbar navbar-expand navbar-light navbar-top navbar-fixed">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0"></ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ Auth::user()->nama }}</h6>
                                <p class="mb-0 text-sm text-gray-600">{{ Auth::user()->role }}</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="./assets/compiled/jpg/1.jpg" />
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="min-width: 11rem">
                        <li>
                            <h6 class="dropdown-header">Hello, {{ strtok(Auth::user()->nama, ' ') }}!</h6>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="/logout"><i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
