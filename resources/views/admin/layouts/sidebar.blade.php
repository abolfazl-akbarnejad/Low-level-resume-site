<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="{{ route('admin.Home') }}" class="nav-link">
                <div class="nav-profile-image">

                    <img src="{{ asset(auth()->user()->image_profile) }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ auth()->user()->name }}</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.Home') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#settings" aria-expanded="false"
                aria-controls="settings">
                <span class="menu-title">settings</span>
                <i class="menu-arrow"></i>
                <i class="mdi  mdi-settings menu-icon"></i>
            </a>
            <div class="collapse" id="settings">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.setting.profile.index') }}"> profile
                            English
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.setting.profilePersian.index') }}">
                            profile
                            persian
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.setting.call.index') }}"> call
                        </a>
                    </li>

                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.setting.call.index') }}"> setting
                            panel admin
                        </a>
                    </li>

                </ul>

            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.socialMedia.index') }}">
                <span class="menu-title"> Social media </span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.skill.index') }}">
                <span class="menu-title"> Skills</span>
                <i class="mdi mdi-star menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Portfolio" aria-expanded="false"
                aria-controls="Portfolio">
                <span class="menu-title">Portfolio</span>
                <i class="menu-arrow"></i>
                <i class="mdi  mdi-content-duplicate  menu-icon"></i>
            </a>
            <div class="collapse" id="Portfolio">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.portfolio.category.index') }}">
                            Category
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.portfolio.index') }}"> Portfolios
                        </a>
                    </li>


                </ul>

            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.Service.index') }}">
                <span class="menu-title"> Service</span>
                <i class="mdi  mdi-package-up  menu-icon"></i>
            </a>
        </li>
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                    <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                    <div class="border-bottom">
                        <p class="text-secondary">Categories</p>
                    </div>
                    <ul class="gradient-bullet-list mt-4">
                        <li>Free</li>
                        <li>Pro</li>
                    </ul>
                </div>
            </span>
        </li>
    </ul>
</nav>
