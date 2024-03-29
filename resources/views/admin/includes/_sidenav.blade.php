 <!-- Sidenav -->
 <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="/admin">
            <h1 class="text-primary font-weight-bold">English Course</h1>
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('assets/argon/img/theme/team-1-800x800.jpg')}}">
                    </span>
                </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="./examples/profile.html" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                </a>
                <a href="./examples/profile.html" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Settings</span>
                </a>
                <a href="./examples/profile.html" class="dropdown-item">
                    <i class="ni ni-calendar-grid-58"></i>
                    <span>Activity</span>
                </a>
                <a href="./examples/profile.html" class="dropdown-item">
                    <i class="ni ni-support-16"></i>
                    <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                <div class="col-6 collapse-brand">
                    <a href="./index.html">
                    <img src="{{ asset('assets/argon/img/brand/blue.png')}}">
                    </a>
                </div>
                <div class="col-6 collapse-close">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                    </button>
                </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <span class="fa fa-search"></span>
                    </div>
                </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}" href="/admin/dashboard">
                        <i class="ni ni-tv-2 text-primary"></i> Dashboard
                    </a>
                </li>
            </ul>

            @if(Auth::user()->role->name == "admin")
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading text-muted">Main Menu Admin</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('student*') ? 'active' : '' }}" href="{{ route('admin.student.index')}}">
                            <i class="ni ni-badge text-pink"></i> Siswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('payment*') ? 'active' : '' }}" href="{{ route('admin.payment.index')}}">
                            <i class="ni ni-bullet-list-67 text-green"></i> Konfirmasi Pembayaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('question*') ? 'active' : '' }}" href="{{ route('admin.question.index')}}">
                            <i class="ni ni-spaceship text-primary"></i> Soal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user*') ? 'active' : '' }}" href="{{ route('admin.user.index')}}">
                            <i class="ni ni-circle-08 text-red"></i> User
                        </a>
                    </li>
                </ul>
            @elseif(Auth::user()->role->name == "student")
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading text-muted">Main Menu Siswa</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profil*') ? 'active' : '' }}" href="{{ route('admin.profil.index')}}">
                            <i class="ni ni-badge text-pink"></i> Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('payment-individual*') ? 'active' : '' }}" href="{{ route('admin.payment-individual.index')}}">
                            <i class="ni ni-bullet-list-67 text-green"></i>Pembayaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('test*') ? 'active' : '' }}" href="{{ route('admin.test.index')}}">
                            <i class="ni ni-spaceship text-primary"></i> Test
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="ni ni-circle-08 text-red"></i> Hasil Test
                        </a>
                    </li>
                </ul>
            @endif

            <!-- Divider -->
            <hr class="my-3">

        </div>
    </div>
</nav>
