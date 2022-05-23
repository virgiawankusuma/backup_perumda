<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Screen</title>
    <!-- CSS Custom -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top py-3" style="background-color:rgba(0, 0, 0, 0.329);">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('') }}assets/images/logo PERUMDA JEPARA.png" alt="logo PERUMDA JEPARA"
                        width="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0">
                        <li class="nav-item me-2">
                            <a class="nav-link active px-2 border-0 rounded" href="#">
                                <i class="fa-solid fa-power-off me-2 "></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid d-flex p-0" style="height: 100vh; width: 100vw;">
            <div class="w-100 h-100 m-0 d-block position-absolute" style="z-index: -99">
                <div class="col-lg-4 col-md-4 col-sm-4 rounded-0 h-100 mx-auto"
                    style="background-color: rgba(0, 0, 0, 0.534);padding-top: 115px">
                    <div class="text-center lh-1">
                        <p class="h3 text-white">Selamat Datang</p>
                        <p class="h3 fw-bold" style="color:rgb(255, 196, 0);">LUNA MAYA</p>
                        <div class="m-0 text-light lh-base">
                            <p class="m-0 fw-bold">ADMIN UTAMA PERGUDANGAN</p>
                            <p class="m-0 fw-bold">BIDANG PERDAGANGAN PERUMDA JEPARA</p>
                            <p class="m-0">Semoga hari anda menyenangkan</p>
                        </div>
                    </div>
                    <div class="h2 text-center text-white fw-bold mt-5">
                        <div id="clock" class="h2"></div>
                    </div>
                    <div class="text-center text-white">
                        <!-- Menampilkan Hari, Bulan dan Tahun -->
                        <script type='text/javascript'>
                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                                'November', 'Desember'
                            ];
                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth();
                            var thisDay = date.getDay(),
                                thisDay = myDays[thisDay];
                            var yy = date.getYear();
                            var year = (yy < 1000) ? yy + 1900 : yy;
                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                        </script>
                    </div>
                </div>
            </div>
            <div class="row w-100 no-gutters m-0 mt-auto fixed-bottom">
                <div class="col-lg-4 col-md-12 col-sm-12 btn btn-success rounded-0 container-fluid"
                    style="height: auto;">
                    <a href="#" class="text-white" style="text-decoration: none">
                        <div class="d-flex justify-content-around align-items-center gap-4 pt-4 px-3">
                            <i class="fa fa-id-card-o" style="font-size: 64px"></i>
                            <header style="text-align: left!important">
                                <h3 class="m-0 fw-bolder">MY ACCOUNT</h3>
                                <p class="fw-light fs-5">Informasi tentang personal data dan akses sistem
                                </p>
                            </header>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 btn btn-success rounded-0 container-fluid"
                    style="height: auto; background-color: rgb(20, 109, 68);">
                    <a href="{{url('/dashboard')}}" class="text-white" style="text-decoration: none">
                        <div class="d-flex justify-content-around align-items-center gap-4 pt-4 px-3">
                            <i class="fa fa-rocket" style="font-size: 64px"></i>
                            <header style="text-align: left!important">
                                <h3 class="m-0 fw-bolder">GO TO APLIKASI</h3>
                                <p class="fw-light fs-5">Pergi ke aplikasi untuk menggunakan seluruh layanan
                                </p>
                            </header>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 btn btn-success rounded-0 container-fluid"
                    style="height: auto;">
                    <a href="#" class="text-white" style="text-decoration: none">
                        <div class="d-flex justify-content-around align-items-center gap-4 pt-4 px-3">
                            <i class="fa fa-cogs" style="font-size: 64px"></i>
                            <header style="text-align: left!important">
                                <h3 class="m-0 fw-bolder">GENERAL SETTING</h3>
                                <p class="fw-light fs-5">Lakukan general setting untuk optimalisasi penggunaan fitur
                                    aplikasi
                                </p>
                            </header>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
<script src="{{ asset('assets/bootstrap-5.1.3-dist/js/bootstrap.min.js') }}"></script>
<script src="https://kit.fontawesome.com/7ac3fca741.js " crossorigin="anonymous "></script>
<!-- Menampilkan Jam (Aktif) -->
<script type="text/javascript">
    function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "AM";
        } else {
            a_p = "PM";
        }
        if (curr_hour == 0) {
            curr_hour = 12;
        }
        if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
        document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);
    //-->
</script>

</html>
