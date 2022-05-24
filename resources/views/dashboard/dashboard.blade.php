@extends('layout.general_layout')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="r3_counter_box shadow-custom">
                <i class="pull-left fa fa-dollar icon-rounded"></i>
                <div class="stats">
                    <h5><strong>$452</strong></h5>
                    <span>Total Revenue</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="r3_counter_box shadow-custom">
                <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                <div class="stats">
                    <h5><strong>$1019</strong></h5>
                    <span>Online Revenue</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="r3_counter_box shadow-custom">
                <i class="pull-left fa fa-money user2 icon-rounded"></i>
                <div class="stats">
                    <h5><strong>$1012</strong></h5>
                    <span>Expenses</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="r3_counter_box shadow-custom">
                <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                <div class="stats">
                    <h5><strong>$450</strong></h5>
                    <span>Expenditure</span>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

    <div class="row my-1">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <style>
                #map {
                    height: 420px;
                    width: 100%;
                    z-index: 0;
                }

                .leaflet-popup-content-wrapper,
                .leaflet-popup-tip {
                    /* background: none; */
                    padding: 0;
                    color: #000;
                    border-radius: 0.25rem;
                }

                .leaflet-popup-content {
                    margin: 0 !important;
                    width: 250px;
                }

                .leaflet-popup-content p {
                    margin: 0;
                }

                .leaflet-container a.leaflet-popup-close-button {
                    display: none;
                }
            </style>
            <div class="card-custom shadow">
                <div class="card-custom-body">
                    <div id="map">
                        <div class="map-inner row">
                            <div class="col-md-5 col-lg-5 col-xl-5">
                                <form class="searchbox-wrapper" action="" method="post">
                                    <input class="searchbox-input" type="search" placeholder="Cari Toko"
                                        aria-label="Search">
                                    <button class="btn searchbox-button" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </form>

                                <div class="card-custom" style="margin: 10px;">
                                    <div class="card-custom-body">
                                        <h5 class="card-custom-title"><b>ROJOKU STORE</b></h5>
                                        <div class="_d-flex">
                                            <p>Total rojoku store</p>
                                            <p style="margin-left:auto">87 Toko</p>
                                        </div>
                                        <div class="_d-flex">
                                            <p>Kecamatan Kedung</p>
                                            <p style="margin-left:auto">30 Toko</p>
                                        </div>
                                        <div class="_d-flex">
                                            <p>Kecamatan Welahan</p>
                                            <p style="margin-left:auto">37 Toko</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-3 col-xl-3 btn-rojoku-store-wrapper">
                                <a href="" class="btn-rojoku-store">
                                    <div class="btn-icon-rojoku-store">
                                        <img src="{{ asset('assets/images/shopping-store.png') }}" alt="">
                                    </div>
                                    <div class="btn-text-rojoku-store">
                                        Rojoku Store
                                    </div>
                                </a>
                                <a href="" class="btn-rojoku-store" style="display: block; text-align:left">
                                    <p><b>Kecamatan</b></p>
                                    <p>Kedung</p>
                                </a>
                                <a href="" class="btn-rojoku-store" style="display: block; text-align:left">
                                    <p><b>Desa / Kelurahan</b></p>
                                    <p>Bugel</p>
                                </a>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3 btn-rojoku-store-wrapper">
                                <a href="" class="btn-rojoku-mart">
                                    <div class="btn-icon-rojoku-mart">
                                        <img src="{{ asset('assets/images/location.png') }}" alt="">
                                    </div>
                                    <div class="btn-text-rojoku-mart">
                                        Rojoku Store
                                    </div>
                                </a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                let map = L.map('map').setView([-6.580282433016075, 110.67910468451456], 13);
                map.zoomControl.setPosition('bottomright');
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
                    iconSize: [38, ],
                    iconAnchor: [22, ]
                });

                L.marker([-6.583858098282382, 110.66215780395581], {
                        icon: storeMarker
                    })
                    .addTo(map)
                    .bindPopup(`
                        <div class="card-custom">
                            <img src="https://lh5.googleusercontent.com/p/AF1QipMob9uBIWUTo7pUe5VBslaySHK4ncMUDZPoDcBa=w426-h240-k-no" class="card-custom-img-top" style="max-height:100px" alt="Perumda Aneka Usaha Kabupaten Jepara">
                            <div class="card-custom-body row">
                            <div class="col-md-8" style="margin-bottom:1rem">
                                <h5 class="card-custom-title">Perumda Aneka Usaha Kabupaten Jepara</h5>
                                <a href="#" class="text-muted small">City district office</a>
                                <p class="text-muted small">
                                <span>Closed</span>
                                &bull;
                                <span>Opens 7:30AM Thu</span>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <a class="button-maps">
                                <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                                </a>
                                <a class="button-maps">
                                <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
                                </a>
                            </div>
                            </div>
                        </div>
                    `);
            </script>
        </div>
    </div>

    <div class="row-one widgettable">
        <div class="col-md-8 content-top-2 card">
            <div class="agileinfo-cdr">
                <div class="card-header">
                    <h3>Weekly Sales</h3>
                </div>

                <div id="Linegraph" style="width: 98%; height: 350px">
                </div>

            </div>
        </div>
        <div class="col-md-4 stat">
            <div class="content-top-1">
                <div class="col-md-6 top-content">
                    <h5>Sales</h5>
                    <label>1283+</label>
                </div>
                <div class="col-md-6 top-content1">
                    <div id="demo-pie-1" class="pie-title-center" data-percent="45"> <span class="pie-value"></span>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="content-top-1">
                <div class="col-md-6 top-content">
                    <h5>Reviews</h5>
                    <label>2262+</label>
                </div>
                <div class="col-md-6 top-content1">
                    <div id="demo-pie-2" class="pie-title-center" data-percent="75"> <span class="pie-value"></span>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="content-top-1">
                <div class="col-md-6 top-content">
                    <h5>Visitors</h5>
                    <label>12589+</label>
                </div>
                <div class="col-md-6 top-content1">
                    <div id="demo-pie-3" class="pie-title-center" data-percent="90"> <span class="pie-value"></span>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

    <div class="col_1">
        <div class="col-md-4 span_8">
            <div class="activity_box">
                <h2>Inbox</h2>
                <div class="scrollbar" id="style-1">
                    <div class="activity-row">
                        <div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt="" /></div>
                        <div class="col-xs-7 activity-desc">
                            <h5><a href="#">Michael Chris</a></h5>
                            <p>Hey ! There I'm available.</p>
                        </div>
                        <div class="col-xs-2 activity-desc1">
                            <h6>12:05 PM</h6>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row">
                        <div class="col-xs-3 activity-img"><img src='images/4.jpg' class="img-responsive" alt="" /></div>
                        <div class="col-xs-7 activity-desc">
                            <h5><a href="#">Alexander</a></h5>
                            <p>Hey ! There I'm available.</p>
                        </div>
                        <div class="col-xs-2 activity-desc1">
                            <h6>12:06 PM</h6>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row">
                        <div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt="" /></div>
                        <div class="col-xs-7 activity-desc">
                            <h5><a href="#">Daniel Lucas</a></h5>
                            <p>Hey ! There I'm available.</p>
                        </div>
                        <div class="col-xs-2 activity-desc1">
                            <h6>01:30 PM</h6>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row">
                        <div class="col-xs-3 activity-img"><img src='images/2.jpg' class="img-responsive" alt="" /></div>
                        <div class="col-xs-7 activity-desc">
                            <h5><a href="#">Jackson Jacob</a></h5>
                            <p>Hey ! There I'm available.</p>
                        </div>
                        <div class="col-xs-2 activity-desc1">
                            <h6>01:50 PM</h6>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row">
                        <div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt="" /></div>
                        <div class="col-xs-7 activity-desc">
                            <h5><a href="#">David Samuel</a></h5>
                            <p>Hey ! There I'm available.</p>
                        </div>
                        <div class="col-xs-2 activity-desc1">
                            <h6>12:20 PM</h6>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="activity-row">
                        <div class="col-xs-3 activity-img"><img src='images/4.jpg' class="img-responsive" alt="" /></div>
                        <div class="col-xs-7 activity-desc">
                            <h5><a href="#">laura Smith</a></h5>
                            <p>Hey ! There I'm available.</p>
                        </div>
                        <div class="col-xs-2 activity-desc1">
                            <h6>12:50 PM</h6>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <form action="#" method="post">
                    <input type="text" value="Enter your text" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </div>
        <div class="col-md-4 span_8">
            <div class="activity_box activity_box1">
                <h3>chat</h3>
                <div class="scrollbar" id="style-3">
                    <div class="activity-row activity-row1">
                        <div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive"
                                alt="" /><span>06:01 AM</span></div>
                        <div class="col-xs-5 activity-img1">
                            <div class="activity-desc-sub">
                                <h5>Michael Chris</h5>
                                <p>Hello ! this is Michael chris</p>
                            </div>
                        </div>
                        <div class="col-xs-4 activity-desc1"></div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row activity-row1">
                        <div class="col-xs-2 activity-desc1"></div>
                        <div class="col-xs-7 activity-img2">
                            <div class="activity-desc-sub1">
                                <h5>Alexander</h5>
                                <p>Hi,How are you ? What about our next meeting?</p>
                            </div>
                        </div>
                        <div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive"
                                alt="" /><span>06:02 AM</span></div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row activity-row1">
                        <div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive"
                                alt="" /><span>06:05 AM</span></div>
                        <div class="col-xs-5 activity-img1">
                            <div class="activity-desc-sub">
                                <h5>Michael Chris</h5>
                                <p>Yeah fine, Hope you the same</p>
                            </div>
                        </div>
                        <div class="col-xs-4 activity-desc1"></div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row activity-row1">
                        <div class="col-xs-2 activity-desc1"></div>
                        <div class="col-xs-7 activity-img2">
                            <div class="activity-desc-sub1">
                                <h5>Alexander</h5>
                                <p>Wow that's great</p>
                            </div>
                        </div>
                        <div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive"
                                alt="" /><span>06:20 PM</span></div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <form action="#" method="post">
                    <input type="text" value="Enter your text" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
                    <input type="submit" value="Send" />
                </form>
            </div>
        </div>
        <div class="col-md-4 span_8">
            <div class="activity_box activity_box2">
                <h3>todo</h3>
                <div class="scrollbar" id="style-2">
                    <div class="activity-row activity-row1">
                        <div class="single-bottom">
                            <ul>
                                <li>
                                    <input type="checkbox" id="brand" value="">
                                    <label for="brand"><span></span> Integer sollicitudin lacinia condimentum.</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="brand1" value="">
                                    <label for="brand1"><span></span> ligula sit amet hendrerit init lorem.</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="brand2" value="">
                                    <label for="brand2"><span></span> Donec aliquam dolor eu augue condimentum.</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="brand9" value="">
                                    <label for="brand9"><span></span> at tristique Pain that produces no resultant.</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="brand8" value="">
                                    <label for="brand8"><span></span> Nulla finibus rhoncus turpis quis tristique.</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="brand7" value="">
                                    <label for="brand7"><span></span> Cupidatat non proident Praising pain.</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="brand3" value="">
                                    <label for="brand3"><span></span> libero vel elementum euismod, mauris tellus</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="brand4" value="">
                                    <label for="brand4"><span></span> Donec aliquam dolor eu augue condimentum.</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="brand5" value="">
                                    <label for="brand5"><span></span> Orci varius natoque penatibus et magnis dis.</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="brand6" value="">
                                    <label for="brand6"><span></span> parturient Dolorem ipsum quia.</label>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <form action="#" method="post">
                    <input type="text" value="Enter your text" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
                    <input type="submit" value="Submit" />
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>

    </div>
@endsection
