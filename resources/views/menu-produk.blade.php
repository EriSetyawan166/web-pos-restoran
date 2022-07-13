<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{asset('img/icons/icon-48x48.png')}}" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Nama Warung</title>

    <link href="{{asset('css/card.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="{{url('warung')}}">
        <span class="align-middle">Nama Restoran</span>
        </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Beranda
                    </li>



                    <li class="sidebar-item {{ (request()->is('warung')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{url('warung')}}">
            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Menu</span>
            </a>
                    </li>
                    <li class="sidebar-item {{ (request()->is('warung/keranjang/')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{url('warung/keranjang')}}">
            <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Keranjang  <span class="text-success">10</span></span>
            </a>
                    </li>

                    <li class="sidebar-header">
                        Kategori
                    </li>

                    @foreach ($data_kategori as $kg)
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('warung/produk')}}/{{$kg->id_kategori}}">
            <span class="align-middle">{{$kg->nama_kategori}}</span>
            </a>
                    </li>
                    @endforeach









                    </ul>




            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>

        </a>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">

                <a href="{{url('warung/keranjang')}}" class="btn"><i class="fa-solid fa-cart-plus end "></i><span class="indicator text-success">4</span></a>

            </ul>
        </div>

        </nav>



            <main class="content">
                <!-- Button trigger modal -->

                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong>Kategori</strong> {{$kategori->nama_kategori}}</h1>


                    <div class="row">
                        @foreach ($produk as $pd)


                        <div class="col-lg-6">
                            <div class="card p-3 pt-4 pb-4">
                            <div class="d-flex align-items-center">
                                <div class="col-md-4">
                                    <img class="flex-shrink-0 img-thumbnail rounded produk" src="{{asset('upload/foto_produk')}}/{{$pd->foto_produk}}" alt="" style="height: 90px">
                                </div>
                                <div class="col-md-4">
                                    <span class="ps-2">{{$pd->nama_produk}}</span>
                                            <span class="ps-2 text-primary">Rp.{{$pd->harga}}</span>

                                </div>


                                <div class="col-md-4">
                                    <a class="btn btn-primary" ><i class="fas fa-fw fa-add"></i><span class="keranjang"> Keranjang</span></a>
                                </div>





                            </div>
                            </div>
                        </div>
                        @endforeach

                    </div>



                </div>
            </main>


        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>

</html>
