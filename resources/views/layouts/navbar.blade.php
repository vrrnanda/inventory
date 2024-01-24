<div class="col-lg-12">
    <nav class="navbar navbar-expand-lg navbar">
      <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <img src="{{asset('../assets/images/logos/logo betesda.png') }}" alt="" width="90" height="89">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
          <a href="/" target="_blank" class="btn btn-light"> {{ Auth::user()->name }}</a>
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="{{asset('../assets/images/profile/user-1.jpg') }}" alt="" width="35" height="35" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
              <div class="message-body">
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
                <a href="{{ route('logout') }}" class="btn btn-outline-danger mx-3 mt-2 d-block" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
</div>
