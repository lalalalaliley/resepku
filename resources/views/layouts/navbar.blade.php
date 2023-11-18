<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <!-- Navbar -->
        <a class="navbar-brand text-white fs-3 mx-5" href="{{ route('resepmakanan.index') }}">Resepku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Sidebar -->
        <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <!-- Sidebar Header -->
            <div class="offcanvas-header  text-white border-bottom shadow-none">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!--Sidebar Body -->
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item ">
                        <a class="nav-link active text-white" aria-current="page" href="{{ route('resepmakanan.tambah') }}">Tulis Resep</a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li class="nav-item mx-3">
                            <a class="nav-link active text-white" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            this.closest('form').submit();">Logout</a>
                        </li>
                    </form>


                </ul>

            </div>
        </div>
    </div>
</nav>
