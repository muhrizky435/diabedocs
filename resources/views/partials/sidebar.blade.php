<!-- resources/views/partials/sidebar.blade.php -->
<section id="sidebar">
    <a href="/" class="brand">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="logo mt-5 ms-5">
    </a>
    <p class="paraf mt-5">SISTEM INFORMASI PEMINJAMAN DAN PENGEMBALIAN BERKAS REKAM MEDIS PASIEN DIABETES MELLITUS</p>
    <ul class="side-menu top">
        <li class="{{ request()->is('/') ? 'active' : '' }}">
            <a href="/">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="{{ request()->is('peminjaman') ? 'active' : '' }}">
            <a href="peminjaman">
                <i class='bx bxs-file-import'></i>
                <span class="text">Peminjaman</span>
            </a>
        </li>
        <li class="{{ request()->is('pengembalian') ? 'active' : '' }}">
            <a href="pengembalian">
                <i class='bx bxs-file-export'></i>
                <span class="text">Pengembalian</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
