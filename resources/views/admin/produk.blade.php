<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('img/icons/icon-48x48.png')}}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Dashboard - Admin</title>

	<link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Nama Restoran</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
						<a class="sidebar-link" href="{{route('dashboard')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item {{ (request()->is('admin/kategori')) ? 'active' : '' }}">
						<a class="sidebar-link" href="{{route('kategori.index')}}">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Kategori</span>
            </a>
					</li>
                    <li class="sidebar-item {{ (request()->is('admin/produk')) ? 'active' : '' }}">
						<a class="sidebar-link" href="{{route('produk.index')}}">
              <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Produk</span>
            </a>
					</li>
                    <li class="sidebar-item {{ (request()->is('admin/user')) ? 'active' : '' }}">
						<a class="sidebar-link" href="{{route('user.index')}}">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">User</span>
            </a>
					</li>

			</div>
		</nav>


		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">


						<li class="nav-item dropdown">


							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <i class="fas fa-fw fa-user"></i> </i><span class="text-dark">{{$user->nama}}</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda Yakin untuk logout?.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>



			<main class="content">
                <!-- Button trigger modal -->

				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Data</strong> Produk</h1>

					<div class="row">

                        <div class="col-xl-12 d-flex">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card shadow">
                                            <div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Produk</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-plus"></i> Tambah Produk</button>

                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Produk</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{url('admin/produk')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <input type="text" id="nama" name="nama" placeholder="Masukkan nama produk" class="form-control" required autocomplete="off">
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <input type="text" id="kode" name="kode" placeholder="Masukkan kode produk" class="form-control" required autocomplete="off">
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <select class="form-control select2 mx-auto mt-2" style="width: 100%" name="kategori" id="kategori">
                                                                    <option selected disabled value="">Pilih Kategori</option>
                                                                    @foreach ($kategori as $item)
                                                                    <option value="{{ $item->id_kategori}}">{{ $item->nama_kategori}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <input type="number" id="harga" name="harga" placeholder="Masukkan harga produk" class="form-control" required autocomplete="off">
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <select class="form-control select2 mx-auto mt-2" style="width: 100%" name="status" id="status">
                                                                    <option selected disabled value="">Pilih Status</option>
                                                                    <option value="Tersedia">Tersedia</option>
                                                                    <option value="Tersedia">Kosong</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group mt-3">
                                                                <input type="file" name="foto" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                        </div>
                                                    </form>

                                                </div>
                                                </div>

                                                <div class="table-responsive mt-3">
                                                    <table class="table table-bordered" id="datatableSimple" style="width: 100%">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center" style="width: 8%">No</th>
                                                                <th>Nama</th>
                                                                <th>Kode</th>
                                                                <th>kategori</th>
                                                                <th>foto</th>
                                                                <th>harga</th>
                                                                <th>status</th>
                                                                <th>aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($produk as $pd)

                                                            <tr>
                                                                <td class="text-center">{{$loop->iteration}}</td>
                                                                <td>{{$pd->nama_produk}}</td>
                                                                <td>{{$pd->kode_produk}}</td>
                                                                <td>{{$pd->kategori->nama_kategori}}</td>
                                                                <td><img src="{{asset('upload/foto_produk')}}/{{$pd->foto_produk}}" class="img-thumbnail" width="100" height="100" alt=""></td>
                                                                <td>{{$pd->harga}}</td>
                                                                <td>{{$pd->status}}</td>
                                                                <td class=""><a href="" class="btn btn-warning btn-sm mr-1" data-toggle="modal" data-target="#ubah_produk{{$pd->id_produk}}"><i class="fa-solid fa-pen to-square mr-1"></i>Ubah</a>
                                                                    <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_produk{{$pd->id_produk}}"><i class="fa-solid fa-trash to-square mr-1"></i>Hapus</a>
                                                                </td>
                                                            </tr>

                                                        @endforeach

                                                        @foreach ($produk as $pd)
                                                        <div class="modal fade" id="hapus_produk{{$pd->id_produk}}" tabindex="-1" role="dialog" aria-labelledby="hapus-siswa" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus data?</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Apakah Anda yakin ingin menghapus data?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                                    <form action="{{url('admin/produk', $pd->id_produk)}}" method="POST">
                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <button class="btn btn-danger" type="submit">hapus</button>
                                                                    </form>

                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade" id="ubah_produk{{$pd->id_produk}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Produk</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{url('admin/produk')}}/{{$pd->id_produk}}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <input type="text" id="nama" name="nama" placeholder="Masukkan nama produk" class="form-control" required autocomplete="off" value="{{$pd->nama_produk}}">
                                                                        </div>
                                                                        <div class="form-group mt-3">
                                                                            <input type="text" id="kode" name="kode" placeholder="Masukkan kode produk" class="form-control" required autocomplete="off" value="{{$pd->kode_produk}}">
                                                                        </div>
                                                                        <div class="form-group mt-3">
                                                                            <select class="form-control select2 mx-auto mt-2" style="width: 100%" name="kategori" id="kategori">
                                                                                <option selected disabled value="">Pilih Kategori</option>
                                                                                @foreach ($kategori as $item)
                                                                                <option @if ($item->nama_kategori == $pd->kategori->nama_kategori) @selected(true) @endif value="{{ $item->id_kategori}}">{{ $item->nama_kategori}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mt-3">
                                                                            <input type="number" id="harga" name="harga" placeholder="Masukkan harga produk" class="form-control" required autocomplete="off" value="{{$pd->harga}}">
                                                                        </div>

                                                                        <div class="form-group mt-3">
                                                                            <select class="form-control select2 mx-auto mt-2" style="width: 100%" name="status" id="status">
                                                                                <option selected disabled value="">Pilih Status</option>
                                                                                <option @if ($pd->status == "Tersedia") @selected(true) @endif value="Tersedia">Tersedia</option>
                                                                                <option @if ($pd->status == "Kosong") @selected(true) @endif value="Kosong">Kosong</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group mt-3">
                                                                            <input type="file" name="foto" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                                                <input type="hidden" name="_method" value="PUT">
                                                                            <button class="btn btn-warning" type="submit">Ubah</button>
                                                                    </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            </div>



                                                        @endforeach
                                                    </tbody>
                                                    </table>
                                                </div>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="{{asset('js/app.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>
    @include('sweetalert::alert')


</body>

</html>
