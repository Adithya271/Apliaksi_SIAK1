<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page"
             href="{{url('dashboard')}}">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('mahasiswadashboard') ? 'active' : ''}}" 
            href="{{url('mahasiswadashboard')}}">
              <span data-feather="users" class="align-text-bottom"></span>
              Mahasiswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('jurusandashboard') ? 'active' : ''}}" 
            href="{{url('jurusandashboard')}}">
              <span data-feather="file" class="align-text-bottom"></span>
              Jurusan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dosendashboard') ? 'active' : ''}}"
             href="{{url('dosendashboard')}}">
              <span data-feather="users" class="align-text-bottom"></span>
              Dosen
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('beritadashboard') ? 'active' : ''}}"
             href="{{url('beritadashboard')}}">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Berita
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>