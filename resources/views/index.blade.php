<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Biodata & Portofolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-blue-600 text-white py-4">
        <h1 class="text-2xl text-center mb-4">Biodata & Portofolio</h1>
        <nav>
            <ul class="flex justify-center space-x-6">
                <li><a href="#home" class="hover:underline">Home</a></li>
                <li><a href="#tentang-saya" class="hover:underline">Tentang Saya</a></li>
                <li><a href="#portofolio" class="hover:underline">Portofolio</a></li>
                <li><a href="#galeri" class="hover:underline">Galeri</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="bg-white p-6 m-6 rounded-lg shadow">
        <h2 class="text-xl mb-4">Selamat Datang</h2>
        <p>Halo! Selamat datang di halaman biodata dan portofolio saya. Perkenalkan Saya Muhammad Jordan Wibisono Soebroto, saya merupakan seorang siswa SMK Telkom Purwokerto. Saya mengambil jurusan RPL. saat ini saya berada di kelas 11.</p>
    </section>

    <section id="tentang-saya" class="bg-white p-6 m-6 rounded-lg shadow">
        <h2 class="text-xl mb-4">Tentang Saya</h2>
        <p>Nama: Muhammad Jordan Wibisono Soebroto</p>
        <p>Jurusan: Rekayasa Perangkat Lunak</p>
        <p>Sekolah: SMK Telkom Purwokerto</p>
        <p>Email: soebrotojordan@gmail.com</p>
        <p>Telepon: 082313777234</p>
    </section>

    <section id="portofolio" class="bg-white p-6 m-6 rounded-lg shadow">
        <h2 class="text-xl mb-4">Portofolio</h2>
        <div class="mb-4">
            <h3 class="text-lg font-semibold">Proyek 1</h3>
            <p>Saya Mengerjakan semua tugas coding dari html, css, c# guru dengan baik.</p>
        </div>
        <div class="mb-4">
            <h3 class="text-lg font-semibold">Proyek 2</h3>
            <p>Saya join Tim Konten SMK Telkom Purwokerto, TIM KONTEN GAYA BEBAS NDER.</p>
        </div>
    </section>

    <section id="galeri" class="bg-white p-6 m-6 rounded-lg shadow">
        <h2 class="text-xl mb-4">Galeri</h2>
        <div class="mb-4">
            <img src="assets/images/orang susah.jpg" alt="Gambar 1" class="rounded-lg shadow w-1/3 mb-4">
            <p>FERRARI NUMBER ONE BRADER</p>
        </div>
        <div class="mb-4">
            <img src="assets/images/IMUTT.jpg" alt="Gambar 2" class="rounded-lg shadow w-1/3 mb-4">
            <p>TEMEN TER IMUTT AAAAA MAS FARREL</p>
        </div>
    </section>

    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; 2024 Muhammad Jordan Wibisono Soebroto. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
