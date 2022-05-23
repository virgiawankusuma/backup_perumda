@extends('layout.general_layout')
@section('content')
<div class="col_3" style="margin-top: -20px">
    <div class="col-md-3 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-dollar icon-rounded"></i>
            <div class="stats">
            <h5><strong>$452</strong></h5>
            <span>Total Revenue</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
            <div class="stats">
            <h5><strong>$1019</strong></h5>
            <span>Total Sales Per Day</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-money user2 icon-rounded"></i>
            <div class="stats">
            <h5><strong>$1012</strong></h5>
            <span>Monthly Revenue</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
            <div class="stats">
            <h5><strong>$450</strong></h5>
            <span>Monthly Target</span>
            </div>
        </div>
    </div>

    <div class="clearfix"> </div>
</div>
<div class="row-one widgettable" style="margin-top: 30px">
    <div class="col-md-12 content-top-2 card" style="width: 98.5%">
        <div class="agileinfo-cdr">
            <style>
                #map {
                    height: 420px;
                    width: 100%;
                }

                .leaflet-popup-content-wrapper, .leaflet-popup-tip{
                  /* background: none; */
                  padding: 0;
                  color: #000;
                  border-radius: 0.25rem;
                }

                .leaflet-popup-content{
                  margin: 0 !important;
                  width: 250px;
                }

                .leaflet-popup-content p{
                  margin: 0;
                }
            </style>
            <div class="card shadow">
              <div class="card-body">
                <div id="map"></div>
              </div>
            </div>
            <script>
                let map = L.map('map').setView([-6.583858098282382, 110.66215780395581], 15);
                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    maxZoom: 18,
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1,
                    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
                }).addTo(map);

                const storeMarker = L.icon({
                  iconUrl: 'assets/images/store%202.png',
                  iconSize:     [38,],
                  iconAnchor:   [22,]
                });

                L.marker([-6.583858098282382, 110.66215780395581], {icon: storeMarker})
                .addTo(map)
                .bindPopup(`
                <div class="card border-0">
                  <img src="https://lh5.googleusercontent.com/p/AF1QipMob9uBIWUTo7pUe5VBslaySHK4ncMUDZPoDcBa=w426-h240-k-no" class="card-img-top" style="max-height:100px" alt="Perumda Aneka Usaha Kabupaten Jepara">
                  <div class="card-body row">
                    <div class="col-md-8 mb-1">
                      <h5 class="card-title">Perumda Aneka Usaha Kabupaten Jepara</h5>
                      <a href="#" class="text-muted small">City district office</a>
                      <p class="text-muted small">
                        <span>Closed</span>
                        &bull;
                        <span>Opens 7:30AM Thu</span>
                      </p>
                    </div>
                    <div class="col-md-4 d-inline-block mb-1 px-0">
                      <a class="btn btn-outline-primary btn-sm rounded-circle">
                        <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                      </a>
                      <a class="btn btn-outline-primary btn-sm rounded-circle">
                        <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
                      </a>
                    </div>
                  </div>
                </div>
                `)
            </script>

        </div>
    </div>
</div>
<div class="row-one widgettable" style="width: 98.5%">
    <div class="col-md-9 content-top-2 card">
        <div class="agileinfo-cdr">
            <div class="card-header">
                <h3>Weekly Sales</h3>
            </div>

                <div id="Linegraph" style="height: 363px">
                </div>

        </div>
    </div>
    <div class="col-md-3 stat">
        <div class="content-top-1">
        <div class="col-md-6 top-content">
            <h5>Rojoku Store</h5>
            <label>1283+</label>
        </div>
        <div class="col-md-6 top-content1">
            <div id="demo-pie-1" class="pie-title-center" data-percent="45"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
        <div class="content-top-1">
        <div class="col-md-6 top-content">
            <h5>Rojoku Mart</h5>
            <label>1283+</label>
        </div>
        <div class="col-md-6 top-content1">
            <div id="demo-pie-2" class="pie-title-center" data-percent="45"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
        <div class="content-top-1">
        <div class="col-md-6 top-content">
            <h5>Rojoku Corporate</h5>
            <label>1283+</label>
        </div>
        <div class="col-md-6 top-content1">
            <div id="demo-pie-3" class="pie-title-center" data-percent="45"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="col_1" style="width: 98.5%">
    <div class="col-md-4 span_8">
        <div class="activity_box">
            <h2>SARAN DAN MASUKAN</h2>
            <div class="scrollbar" id="style-1">
                <a href="#">
                    <div class="activity-row">
                        <div class="col-xs-12 activity-desc" style="margin-top: 10px">
                            <h5 style="color: red">KOPI ROJOKU POUCH</h5>
                            <h6 style="color: rgb(54, 54, 54)">Kamis, 23 April 2022</h6>
                            <p>Pak Yasin - Toko Jaya Makmur</p>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                ... <a href="" style="color: rgb(255, 78, 78); font-weight: bold">Read More</a>
                            </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </a>
                <a href="#">
                    <div class="activity-row">
                        <div class="col-xs-12 activity-desc" style="margin-top: 10px">
                            <h5 style="color: red">KOPI ROJOKU POUCH</h5>
                            <h6 style="color: rgb(54, 54, 54)">Kamis, 23 April 2022</h6>
                            <p>Pak Yasin - Toko Jaya Makmur</p>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                ... <a href="" style="color: rgb(255, 78, 78); font-weight: bold">Read More</a>
                            </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </a>
                <a href="#">
                    <div class="activity-row">
                        <div class="col-xs-12 activity-desc" style="margin-top: 10px">
                            <h5 style="color: red">KOPI ROJOKU POUCH</h5>
                            <h6 style="color: rgb(54, 54, 54)">Kamis, 23 April 2022</h6>
                            <p>Pak Yasin - Toko Jaya Makmur</p>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                ... <a href="" style="color: rgb(255, 78, 78); font-weight: bold">Read More</a>
                            </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </a>
                <a href="#">
                    <div class="activity-row">
                        <div class="col-xs-12 activity-desc" style="margin-top: 10px">
                            <h5 style="color: red">KOPI ROJOKU POUCH</h5>
                            <h6 style="color: rgb(54, 54, 54)">Kamis, 23 April 2022</h6>
                            <p>Pak Yasin - Toko Jaya Makmur</p>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                ... <a href="" style="color: rgb(255, 78, 78); font-weight: bold">Read More</a>
                            </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 span_8">
        <div class="activity_box activity_box1">
            <h3>KOMPLAIN</h3>
            <div class="scrollbar" id="style-3">
                <a href="#">
                    <div class="activity-row activity-row1">
                        <div class="col-xs-12 activity-desc" style="margin-top: 10px">
                            <h5>KOPI ROJOKU POUCH</h5>
                            <h6 style="color: rgb(54, 54, 54)">Kamis, 23 April 2022</h6>
                            <p>Pak Yasin - Toko Jaya Makmur</p>
                        </div>
                        <div class="col-xs-12 activity-desc">
                            <h5>KOMPLAIN</h5>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                ... <a href="" style="color: rgb(255, 78, 78); font-weight: bold">Read More</a>
                            </span>
                        </div>
                        <div class="col-xs-12 activity-desc">
                            <h5>PENEYELESAIAN</h5>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                ... <a href="" style="color: rgb(255, 78, 78); font-weight: bold">Read More</a>
                            </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </a>
                <a href="#">
                    <div class="activity-row activity-row1">
                        <div class="col-xs-12 activity-desc" style="margin-top: 10px">
                            <h5>KOPI ROJOKU POUCH</h5>
                            <h6 style="color: rgb(54, 54, 54)">Kamis, 23 April 2022</h6>
                            <p>Pak Yasin - Toko Jaya Makmur</p>
                        </div>
                        <div class="col-xs-12 activity-desc">
                            <h5>KOMPLAIN</h5>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                ... <a href="" style="color: rgb(255, 78, 78); font-weight: bold">Read More</a>
                            </span>
                        </div>
                        <div class="col-xs-12 activity-desc">
                            <h5>PENEYELESAIAN</h5>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                ... <a href="" style="color: rgb(255, 78, 78); font-weight: bold">Read More</a>
                            </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </a>
                <a href="#">
                    <div class="activity-row activity-row1">
                        <div class="col-xs-12 activity-desc" style="margin-top: 10px">
                            <h5>KOPI ROJOKU POUCH</h5>
                            <h6 style="color: rgb(54, 54, 54)">Kamis, 23 April 2022</h6>
                            <p>Pak Yasin - Toko Jaya Makmur</p>
                        </div>
                        <div class="col-xs-12 activity-desc">
                            <h5>KOMPLAIN</h5>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                ... <a href="" style="color: rgb(255, 78, 78); font-weight: bold">Read More</a>
                            </span>
                        </div>
                        <div class="col-xs-12 activity-desc">
                            <h5>PENEYELESAIAN</h5>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                ... <a href="" style="color: rgb(255, 78, 78); font-weight: bold">Read More</a>
                            </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 span_8">
        <div class="activity_box activity_box2">
            <h3>JADWAL PENGIRIMAN</h3>
            <div class="scrollbar" id="style-2">
                <div class=" activity-row1">
                    <div class="col-xs-12 activity-desc" style="background-color: rgb(231, 231, 231)">
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            <h5 style="color: #00a78e">KAMIS, 23 APRIL 2022</h5>
                            <h6>Jadwal Pengiriman</h6>
                        </div>
                    </div>
                    <div class="col-xs-12 activity-desc" style="margin-top:10px;background-color: rgb(253, 252, 196)">
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            <table style="width: 100%;font-size: 10pt;">
                                <thead>
                                    <th>Pak Yasin - Toko Jaya Makmur</th>
                                    <th style="text-align: right">DO.231234.98</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">Jl.A Yani no.23 Komplek ruko-Kedung-Bogel-Jepara</td>
                                    </tr>
                                    <tr>
                                        <td>Rojoku MIneral 330</td>
                                        <td>20 DUS</td>
                                    </tr>
                                    <tr>
                                        <td>Rojoku Kopi Pouch</td>
                                        <td>5 DUS</td>
                                    </tr>
                                    <tr>
                                        <td>Minyak Goreng Resto</td>
                                        <td>100 DUS</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="margin-top: 5px;">
                                <div style="font-size: 10pt; font-weight: bold">
                                    Petugas - Arga
                                </div>
                                <div style="font-size: 11pt; font-weight: bold;color: red">
                                    BELUM TERKIRIM
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 activity-desc" style="margin-top:10px;background-color: rgb(211, 255, 211)">
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            <table style="width: 100%;font-size: 10pt">
                                <thead>
                                    <th>Pak Jhony - Toko Mandiri</th>
                                    <th style="text-align: right">DO.231234.99</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">Jl.A Yani no.23 Komplek ruko-Kedung-Bogel-Jepara</td>
                                    </tr>
                                    <tr>
                                        <td>Rojoku MIneral 330</td>
                                        <td>20 DUS</td>
                                    </tr>
                                    <tr>
                                        <td>Rojoku Kopi Pouch</td>
                                        <td>5 DUS</td>
                                    </tr>
                                    <tr>
                                        <td>Minyak Goreng Resto</td>
                                        <td>100 DUS</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="margin-top: 5px;">
                                <div style="font-size: 10pt; font-weight: bold">
                                    Petugas - Arga
                                </div>
                                <div style="font-size: 11pt; font-weight: bold;color: #00a78e">
                                    TERKIRIM
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>

@endsection
