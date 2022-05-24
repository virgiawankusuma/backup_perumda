@extends('layout.general_layout')
@section('title', 'MITRA BIDANG PERDAGANGAN')
@section('content')

<nav class="nav-mitra" style="margin-top: -15px">
    <ul>
        <li disabled>
            <a href="#">
                <img src="{{asset('assets/images/mitra/Product-putih.png')}}" alt="">
                Mitra Produksi &nbsp; <span style="font-weight: bold">v</span>
            </a>
            <ul>
                <li><a href="#">Mitra Supplier Produk</a></li>
                <li><a href="#">Mitra Maklon Produk</a></li>
                <li><a href="#">Mitra Produsen Produk</a></li>
                <li><a href="#">Mitra Supplier Bahan</a></li>
            </ul>
        </li>
        <li disabled>
            <a href="#">
                <img src="{{asset('assets/images/mitra/penjualan-putih.png')}}" alt="">
                Mitra Penjualan &nbsp; <span style="font-weight: bold">v</span>
            </a>
            <ul>
                <li><a href="#">Mitra Reseller</a></li>
                <li><a href="#">Mitra Corporate</a></li>
                <li><a href="#">Kategori Affiliasi</a></li>
            </ul>
        </li>
        <li disabled>
            <a href="#">
                <img src="{{asset('assets/images/mitra/mitra supply putih.png')}}" alt="">
                Mitra Suply &nbsp; <span style="font-weight: bold">v</span>
            </a>
            <ul>
                <li><a href="#">Anggota</a></li>
                <li><a href="#">Buku</a></li>
                <li><a href="#">Kategori Buku</a></li>
            </ul>
        </li>
        <li disabled>
            <a href="#">
                <img src="{{asset('assets/images/mitra/TOKO-putih.png')}}" alt="">
                Mitra Mart &nbsp; <span style="font-weight: bold">v</span>
            </a>
            <ul>
                <li><a href="#">Anggota</a></li>
                <li><a href="#">Buku</a></li>
                <li><a href="#">Kategori Buku</a></li>
            </ul>
        </li>
        <li disabled>
            <a href="#">
                <img src="{{asset('assets/images/mitra/fUNDING-putih.png')}}" alt="">
                Mitra Funding &nbsp; <span style="font-weight: bold">v</span>
            </a>
            <ul>
                <li><a href="#">Anggota</a></li>
                <li><a href="#">Buku</a></li>
                <li><a href="#">Kategori Buku</a></li>
            </ul>
        </li>
        <a href="#" class="home">
            <img src="{{asset('assets/images/mitra/home5-putih.png')}}" alt="">
        </a>
    </ul>
</nav>

<div class="title-menu">
    <div class="title-desc">
        <h3>Mitra Supllier Produk</h3>
        <a href="">Data Supllier Produk</a>
    </div>
</div>
<div class="table-mitra">
    <div class="header">
        <div class="title-header">
            <h3>Data Mitra Supllier Produk</h3>
        </div>
        <div class="icon-header">
            <div class="position__right">
                <form action="">
                    <input type="search" placeholder=" &nbsp; Cari Supplier" class="search">
                </form>
                <div class="icon-header-right">
                    <a href="">
                        <img class="upload__" src="{{asset('assets/images/mitra/upload_bg_red.png')}}" alt="">

                    </a>
                    <a href="">
                        <img class="download__" src="{{asset('assets/images/mitra/download_bg_green.png')}}" alt="">

                    </a>
                    <a href="">
                        <img class="filter__" src="{{asset('assets/images/mitra/filter_bg_yellow.png')}}" alt="">
                    </a>
                    <div class="desc__">
                        <span class="desc__upload">Upload</span>
                        <span class="desc__download">Download</span>
                        <span class="desc__filter">Filter</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container table-scroll">
        <table class="table table-custom" style="width: 96%; margin: auto; border-bottom: none">
            <thead>
                <tr>
                    <th class="border-side-1">
                        <div class="th-no">
                            <span>No</span>
                        </div>
                    </th>
                    <th>
                        <div class="th">
                            <span>ID Mitra</span>
                        </div>
                    </th>
                    <th>
                        <div class="th">
                            <span>Nama Mitra</span>
                        </div>
                    </th>
                    <th>
                        <div class="th">
                            <span>Kategori Mitra</span>
                        </div>
                    </th>
                    <th>
                        <div class="th">
                            <span>Status Mitra</span>
                        </div>
                    </th>
                    <th class="border-side-2">
                        <div class="th-action">
                            <span>Action</span>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="no">1</th>
                    <td>PRD.123456789</td>
                    <td>PT.Aston Printer</td>
                    <td>Supllier Produk</td>
                    <td>Perusahaan</td>
                    <td class="td-action">
                        <a href="{{url('/mitra/detail')}}" class="btn">View</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="no">2</th>
                    <td>PRD.123456789</td>
                    <td>CV.Karya Manunggal</td>
                    <td>Supllier Produk</td>
                    <td>Perusahaan</td>
                    <td class="td-action">
                        <a href="" class="btn">View</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="no">3</th>
                    <td>PRD.123456789</td>
                    <td>CV.Najih</td>
                    <td>Supllier Produk</td>
                    <td>Perusahaan</td>
                    <td class="td-action">
                        <a href="" class="btn">View</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="no">4</th>
                    <td>PRD.123456789</td>
                    <td>Luna Maya</td>
                    <td>Supllier Produk</td>
                    <td>Perusahaan</td>
                    <td class="td-action">
                        <a href="" class="btn">View</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="no">5</th>
                    <td>PRD.123456789</td>
                    <td>Anwar</td>
                    <td>Supllier Produk</td>
                    <td>Perusahaan</td>
                    <td class="td-action">
                        <a href="" class="btn">View</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="no">6</th>
                    <td>PRD.123456789</td>
                    <td>PT.Aston Printer</td>
                    <td>Supllier Produk</td>
                    <td>Perusahaan</td>
                    <td class="td-action">
                        <a href="{{url('/mitra/detail')}}" class="btn">View</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="no">7</th>
                    <td>PRD.123456789</td>
                    <td>CV.Karya Manunggal</td>
                    <td>Supllier Produk</td>
                    <td>Perusahaan</td>
                    <td class="td-action">
                        <a href="" class="btn">View</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="no">8</th>
                    <td>PRD.123456789</td>
                    <td>CV.Najih</td>
                    <td>Supllier Produk</td>
                    <td>Perusahaan</td>
                    <td class="td-action">
                        <a href="" class="btn">View</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="no">9</th>
                    <td>PRD.123456789</td>
                    <td>Luna Maya</td>
                    <td>Supllier Produk</td>
                    <td>Perusahaan</td>
                    <td class="td-action">
                        <a href="" class="btn">View</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="no">10</th>
                    <td>PRD.123456789</td>
                    <td>Anwar</td>
                    <td>Supllier Produk</td>
                    <td>Perusahaan</td>
                    <td class="td-action">
                        <a href="" class="btn">View</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection