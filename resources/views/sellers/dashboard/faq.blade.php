{{-- Extends layout --}}
@extends('sellers.layout.default')

{{-- Content --}}
@section('content')
<div class="section full mt-2 mb-2">
    <div class="section-title">FAQ (Frequently Asked Questions)</div>

    <div class="accordion" id="accordionExample3">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion001">
                    Apa saja syarat untuk mendaftar menjadi seller di aplikasi Baby Daily?
                </button>
            </h2>
            <div id="accordion001" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                <div class="accordion-body">
                    - Produk yang kamu jual harus berkaitan dengan bayi dan balita (Contoh : diapers, MPASI, mainan anak, dll)<br>
                    - Kamu dapat menghubungi Customer Service Baby Daily untuk informasi lebih lanjut (+6282215288085)
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion002">
                    Bagaimana cara menambahkan produk ke dalam aplikasi Baby Daily?
                </button>
            </h2>
            <div id="accordion002" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                <div class="accordion-body">
                    Kamu dapat menambahkan foto dan informasi produk di menu Produk > Klik tombol Tambah Produk. Setelah itu, isi data produk dengan lengkap.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion003">
                    Bagaimana cara mengubah foto atau deskripsi produk?
                </button>
            </h2>
            <div id="accordion003" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                <div class="accordion-body">
                    Kamu dapat mengedit foto dan informasi produk di menu "Produk", lalu pilih produk yang akan diubah, klik Lainnya > Edit
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion004">
                    Bagaimana cara mengubah harga produk?
                </button>
            </h2>
            <div id="accordion004" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                <div class="accordion-body">
                    Kamu dapat mengedit foto dan informasi produk di menu "Produk", lalu pilih produk yang akan diubah, klik Lainnya > Edit
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion005">
                    Bagaimana cara menghapus produk?
                </button>
            </h2>
            <div id="accordion005" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                <div class="accordion-body">
                    Kamu dapat mengedit foto dan informasi produk di menu "Produk", lalu pilih produk yang akan diubah, klik Lainnya > Hapus
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion006">
                    Bagaimana cara menambahkan nomor WhatsApp?
                </button>
            </h2>
            <div id="accordion006" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                <div class="accordion-body">
                    Kamu dapat menambahkan nomor WhatsApp di menu "Profile", lalu klik "Nomor WhatsApp"
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion007">
                    Bagaimana cara menambahkan link E-Commerce?
                </button>
            </h2>
            <div id="accordion007" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                <div class="accordion-body">
                    Kamu dapat menambahkan link E-Commerce di menu "Profile", lalu klik "link E-Commerce"
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion008">
                    Bagaimana cara mengubah nomor WhatsApp?
                </button>
            </h2>
            <div id="accordion008" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                <div class="accordion-body">
                    Kamu dapat mengubah nomor WhatsApp di menu "Profile", lalu klik "Nomor WhatsApp"
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion009">
                    Bagaimana cara mengubah link E-Commerce?
                </button>
            </h2>
            <div id="accordion009" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                <div class="accordion-body">
                    Kamu dapat mengubah link E-Commerce di menu "Profile", lalu klik "link E-Commerce"
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion0010">
                    Bagaimana cara menambahkan catatan toko?
                </button>
            </h2>
            <div id="accordion0010" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                <div class="accordion-body">
                    Kamu dapat mengubah harga produk di menu Profile
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion0011">
                    Metode pembayaran apa saja yang digunakan untuk transaksi dengan pembeli?
                </button>
            </h2>
            <div id="accordion0011" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                <div class="accordion-body">
                    Kamu dapat menggunakan metode pembayaran apa saja yang tersedia.
                </div>
            </div>
        </div>
    </div>

</div>
@endsection