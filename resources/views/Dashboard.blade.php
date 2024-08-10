<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- Bootstrap CSS for Modal -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	

	<title>Diabedocs Dashboard</title>
</head>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="{{ asset('assets/logo.png') }}" alt="Logo" class="logo mt-5 ms-5">
			{{-- <span class="text">DiabeDocs</span>  --}}
		</a>
		<p class="paraf mt-5">SISTEM INFORMASI PEMINJAMAN DAN PENGEMBALIAN BERKAS REKAM MEDIS PASIEN DIABETES MELLITUS</p>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-file-import'></i>
					<span class="text">Peminjaman</span>
				</a>
			</li>
			<li>
				<a href="#">
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
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="profile">
				<img src="{{ asset ('assets/user.png') }}" alt="Profile">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard Admin</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download" data-bs-toggle="modal" data-bs-target="#addPeminjamanModal">
					<i class='bx bxs-add-to-queue'></i>
					<span class="text">TAMBAHKAN</span>
				</a>
			</div>
            <ul class="box-info">
				<li>
					<i class='bx bx-export'></i>
					<span class="text">
						<h3>00</h3>
						<p>Dipinjamkan</p>
					</span>
				</li>
				<li>
					<i class='bx bx-import'></i>
					<span class="text">
						<h3>00</h3>
						<p>Dikembalikan</p>
					</span>
				</li>
				<li>
					<i class='bx bx-archive'></i>
					<span class="text">
						<h3>00</h3>
						<p>Total Documents</p>
					</span>
				</li>
			</ul>

            <div class="table-data">
				<div class="order">
					<div class="head">
						<h5>Tabel Ekpedisi</h5>
						{{-- <i class='bx bx-search' ></i> --}}
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
                                <th>No</th>
                                <th>Nomor RM</th>
                                <th>Nama Pasien</th>
                                <th>Petugas</th>
                                <th>Tanggal<br>
									Peminjaman</th>
                                <th>Tanggal<br>
									Pengembalian</th>
                                <th>Status</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							{{-- @foreach($dokumens as $dokumen)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $dokumen->no_rekam_medis }}</td>
									<td>{{ $dokumen->nama_pasien }}</td>
									<td>{{ $dokumen->petugas }}</td>
									<td>{{ $dokumen->tanggal_pinjam }}</td>
									<td>{{ $dokumen->tanggal_kembali }}</td>
									<td>{{ $dokumen->status }}</td>
									<td>
										<a href="{{ route('dokumens.edit', $dokumen->id) }}" class="btn btn-warning">Edit</a>
										<form action="{{ route('dokumens.destroy', $dokumen->id) }}" method="POST" class="d-inline">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger">Hapus</button>
										</form>
                        			</td>
                    			</tr>
							@endforeach --}}
							//data masih dummy belum ke controller
							<tr>
								<td>00</td>
								<td>00</td>
								<td>Pasien1</td>
                                <td>Petugas1</td>
                                <td>12-12-2024</td>
                                <td>12-12-2024</td>
                                <td><span class="status pending">Dipinjam</span></td>
								<td>-</td>
							</tr>
							<tr>
								<td>00</td>
								<td>00</td>
								<td>Pasien1</td>
                                <td>Petugas1</td>
                                <td>12-12-2024</td>
                                <td>12-12-2024</td>
                                <td><span class="status pending">Dipinjam</span></td>
								<td>-</td>
							</tr>
							//
						</tbody>
					</table>
				</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<!-- Include the Modal -->
    @include('partials.modal')

    <!-- Bootstrap JS and dependencies -->
    
	<!-- Bootstrap JS and dependencies -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

	<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
