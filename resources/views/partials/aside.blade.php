<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-0 font-weight-bold text-white fs-3 align-middle text-center">Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white {{ ($title === "user") ? "active" : '' }}" href="/admin/user">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-users"></i>
              </div>
              <span class="nav-link-text ms-1">User</span>
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ ($title === "dashboard") ? "active" : '' }}" href="/admin/dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <form action="/logout" method="POST">
         @csrf
          {{-- <button type="submit" class="btn btn-outline-success mt-4 w-100"><i class="bi bi-box-arrow-right"> Logout</i></button> --}}
          <button type="submit" class="btn bg-gradient-success w-100"><i class="bi bi-box-arrow-right"> Logout</i></button>
        </form>  
      </div>
    </div>
  </aside>