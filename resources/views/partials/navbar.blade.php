{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container">
        <div class="col-2">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo-genap.png') }}" id="logo-instansi">
            </a>

        </div>

        <div class="col-6" id="nav-content">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link me-5" href="/">Input NIM</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="/detail">Detail Mahasiswa</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="/verifikasi">Verifikasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

{{-- End Navbar --}}
