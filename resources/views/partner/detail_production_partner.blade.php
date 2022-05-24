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

<div class="title-menu">
    <div class="title-desc display">
        <h4 style="font-weight: bold"><a href="{{url('/mitra')}}" style="color: green; text-decoration: underline">Data Mitra Supllier Produk</a> >> View PT.Aston Printer</h4>
        <div class="icon-header-right">
            <a href="">
                <img class="download__" src="{{asset('assets/images/mitra/download_bg_green.png')}}" alt="">
            </a>
            <div class="">
                <span class="desc__download">Download</span>
            </div>
        </div>
    </div>
</div>

<div class="title-menu header">
    <div class="table-mitra">
        <div class="header">
            <div class="title-header">
                <h4 style="font-weight: bold;margin-top: -20px;">Personal Data Supllier</h4>
            </div>
            <hr style="border: 1px solid rgb(153, 153, 153); width: 100%;">
        </div>


        <table class="table1 detail">
            <tr>
                <td>
                    Nama Perusahaan <br>
                    <input type="text" disabled style="width: 100%" value="PT.Aston Printer">
                </td>
                <td>
                    ID Mitra <br>
                    <input type="text" disabled style="width: 100%" value="135.12128976">
                </td>
                <td>
                    Tanggal Registrasi <br>
                    <input type="text" disabled style="width: 100%" value="01 Mei 2022">
                </td>
            </tr>
            <tr>
                <td>
                    Email <br>
                    <input type="text" disabled style="width: 100%" value="astonprinter@gmail.com">
                </td>
                <td>
                    Website <br>
                    <input type="text" disabled style="width: 100%" value=" www.astonprinter.com">
                </td>
                <td>
                    Kontak Perusahaan <br>
                    <input type="text" disabled style="width: 100%" value="0333-12345678">
                </td>
            </tr>
            <tr>
                <td>
                    Alamat <br>
                    <input type="text" disabled style="width: 100%" value="Jl.A Yani, No 32, Semarang, Jawa Tengah, Indonesia">
                </td>
                <td>
                    PIC <br>
                    <input type="text" disabled style="width: 100%" value="Jhoni">
                </td>
                <td>
                    Kontak Person <br>
                    <input type="text" disabled style="width: 100%" value="081345678765">
                </td>
            </tr>
            <tr>
                <td>
                    Kategori Mitra <br>
                    <input type="text" disabled style="width: 100%" value="Mitra Supplier Produk">
                </td>
                <td>
                    Status Mitra <br>
                    <input type="text" disabled style="width: 100%" value="Perusahaan">
                </td>
                <td>
                    Status Keaktifan <br>
                    <input type="text" disabled style="width: 100%" value="Aktif">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Keterangan Tambahan <br>
                    <textarea name="" id="" disabled>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </textarea>
                </td>
            </tr>
        </table>
    </div>
    @endsection