<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Deal - Simulasi Kredit</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          gold: '#5B8DC8',
          goldlight: '#DCEAF7',
          charcoal: '#1E2A3A'
        },
        fontFamily: {
          serif: ['"Playfair Display"', 'serif'],
          sans: ['Inter', 'sans-serif']
        }
      }
    }
  }
</script>
</head>
<body class="font-sans text-gray-800 bg-white">

  <!-- NAVBAR -->
  <header class="text-gray-600 body-font bg-white/95 backdrop-blur shadow-sm fixed top-0 left-0 w-full z-50">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a href="#beranda" class="flex title-font items-center text-charcoal mb-4 md:mb-0">
        <img src="image/lg.jpg" alt="Auto Prima Mobil" class="w-10 h-10 rounded-full object-cover border border-gold">
        <span class="ml-3 font-serif italic font-medium text-xl tracking-wide">Car Deal</span>
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-[15px] font-medium justify-center gap-1">
        <a href="#beranda" class="mr-7 text-black hover:text-gold active:text-gold transition-colors">Beranda</a>
        <a href="#tentang" class="mr-7 text-black hover:text-gold active:text-gold transition-colors">Tentang</a>
        <a href="#simulasi" class="mr-7 text-black hover:text-gold active:text-gold transition-colors">Simulasi</a>
        <a href="#kontak" class="text-black hover:text-gold active:text-gold transition-colors">Kontak</a>
      </nav>
      <a href="#simulasi" class="inline-flex items-center bg-goldlight text-charcoal py-1.5 px-4 hover:bg-gold hover:text-white rounded-full text-sm font-medium mt-4 md:mt-0 transition-colors">
        Simulasi
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </header>

  <!-- HERO -->
  <section id="beranda" class="relative min-h-screen flex flex-col items-center justify-center text-center text-white px-5 pt-20"
           style="background:linear-gradient(180deg, rgba(30,42,58,.55), rgba(30,42,58,.88)), url('image/bg.jpg') center/cover no-repeat;"> 
    <div class="flex flex-col items-center gap-5 md:gap-6 max-w-2xl">
      <span class="inline-block border border-goldlight/40 text-goldlight text-xs font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full">
        Dealer Terpercaya Sejak 2014
      </span>
      <h1 class="font-serif text-5xl md:text-6xl font-semibold leading-tight tracking-tight">Temukan Mobil, Wujudkan Perjalanan</h1>
      <p class="text-goldlight text-base md:text-lg leading-relaxed">Kredit mudah, bunga bersahabat, proses cepat</p>
    </div>
  </section>

  <!-- TENTANG -->
  <section id="tentang" class="max-w-5xl mx-auto px-5 py-24 scroll-mt-20">
    <div class="flex flex-wrap items-center gap-10 max-w-4xl mx-auto mb-20">
    <div class="flex-1 min-w-[260px] order-2 md:order-1">
      <h2 class="font-serif text-3xl font-semibold tracking-tight mb-4 text-charcoal">Tentang <span class="italic">Car Deal</span></h2>
      <p class="text-gray-500 leading-relaxed text-[15px] max-w-md mb-8">
        Car Deal adalah dealer mobil terpercaya yang telah melayani ribuan
        pelanggan dengan berbagai pilihan merek mobil baru dan bekas. Kami hadir untuk membantu
        Anda mendapatkan mobil impian dengan skema kredit yang transparan dan proses yang mudah,
        tanpa biaya tersembunyi.
      </p>
      <div class="flex divide-x divide-goldlight max-w-md">
        <div class="pr-6">
          <p class="font-serif text-3xl font-semibold text-gold">10+</p>
          <p class="text-xs text-gray-500 tracking-wide mt-1">Tahun Pengalaman</p>
        </div>
        <div class="px-6">
          <p class="font-serif text-3xl font-semibold text-gold">450+</p>
          <p class="text-xs text-gray-500 tracking-wide mt-1">Unit Terjual</p>
        </div>
        <div class="pl-6">
          <p class="font-serif text-3xl font-semibold text-gold">98%</p>
          <p class="text-xs text-gray-500 tracking-wide mt-1">Pelanggan Puas</p>
        </div>
      </div>
    </div>
    <img src="image/image.jpg" class="flex-1 min-w-[260px] max-w-sm w-full aspect-[4/5] rounded-xl object-cover order-1 md:order-2" alt="showroom">
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 text-center">
      <div class="flex flex-col items-center">
        <div class="w-14 h-14 rounded-full bg-goldlight flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <h3 class="font-serif text-lg font-semibold text-charcoal mb-1.5">Proses Cepat</h3>
        <p class="text-sm text-gray-500 leading-relaxed max-w-[220px]">Pengajuan kredit disetujui dalam hitungan hari, tanpa antre lama.</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-14 h-14 rounded-full bg-goldlight flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <h3 class="font-serif text-lg font-semibold text-charcoal mb-1.5">Bunga Bersahabat</h3>
        <p class="text-sm text-gray-500 leading-relaxed max-w-[220px]">Skema bunga transparan tanpa biaya tersembunyi di kemudian hari.</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-14 h-14 rounded-full bg-goldlight flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
          </svg>
        </div>
        <h3 class="font-serif text-lg font-semibold text-charcoal mb-1.5">Pilihan Terpercaya</h3>
        <p class="text-sm text-gray-500 leading-relaxed max-w-[220px]">Ribuan pelanggan puas dengan berbagai pilihan mobil baru dan bekas.</p>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- SIMULASI KREDIT — VERSI PHP NATIVE (form submit, tanpa AJAX)  -->
  <!-- ============================================================ -->
  <?php
    // 1) Variabel penampung, dikasih nilai default dulu.
    //    Ini penting supaya field form nggak error saat halaman
    //    pertama kali dibuka (belum ada data yang dikirim).
    $namaMobil  = '';
    $harga      = 0;
    $dpPersen   = '';
    $tenorTahun = 0;
    $hasilAda   = false;   // penanda: hasil sudah dihitung atau belum
    $pesanError = '';

    // 2) Cek apakah form baru saja disubmit.
    //    Tombol submit kita kasih name="hitung", jadi kalau tombol itu
    //    yang diklik, $_POST['hitung'] pasti ada isinya.
    if (isset($_POST['hitung'])) {

        // 3) Ambil data kiriman dari form (method="POST").
        //    Tanda "??" artinya: kalau key-nya nggak ada, pakai nilai default di kanan.
        $namaMobil = $_POST['mobilNama'] ?? '';
        $harga     = (float) ($_POST['harga'] ?? 0);

        // dp diambil apa adanya dulu (string), supaya bisa dibedakan
        // antara "belum dipilih" (kosong) vs "dipilih 0%".
        $dpPersen  = $_POST['dp'] ?? '';

        // 4) Ambil tenor — sekarang langsung angka tunggal (bukan array lagi,
        //    karena tenor udah jadi <select>, bukan checkbox).
        $tenorTahun = $_POST['tenor'] ?? '';

        // 5) Validasi sederhana sebelum menghitung.
        //    Ketiganya wajib diisi: harga (dari mobil), dp, dan tenor.
        if ($harga <= 0 || $dpPersen === '' || $tenorTahun === '') {
            $pesanError = "Pilih mobil, DP, dan tenor dulu ya!";
            $dpPersen   = $dpPersen === '' ? '' : (float) $dpPersen;
            $tenorTahun = $tenorTahun === '' ? '' : (float) $tenorTahun;
        } else {
            $dpPersen   = (float) $dpPersen;
            $tenorTahun = (float) $tenorTahun;

            // 6) Rumus perhitungan (persis sama seperti versi JavaScript sebelumnya)
            $bulanTenor = $tenorTahun * 12;
            $bunga      = $harga * 0.2;                     // bunga 20% dari harga mobil
            $nominalDp  = $harga * ($dpPersen / 100);
            $angsuran   = (($harga + $bunga) - $nominalDp) / $bulanTenor;

            $hasilAda = true; // tandai hasil siap ditampilkan
        }
    }

    // 7) Fungsi bantu: ubah angka jadi format "Rp 100.000.000"
    //    Ini versi PHP dari fungsi formatRupiah() yang dulunya di JavaScript.
    function formatRupiah($angka) {
        return "Rp " . number_format($angka, 0, ',', '.');
    }
  ?>

  <section id="simulasi" class="bg-gray-50 py-24 scroll-mt-20">
    <div class="max-w-md mx-auto bg-white shadow rounded-xl p-8 border border-goldlight">
      <h2 class="font-serif text-3xl font-semibold tracking-tight mb-8 text-center text-charcoal">Simulasi Kredit Mobil</h2>

      <?php if ($pesanError): ?>
        <!-- 8) Tampilkan pesan error kalau ada -->
        <p class="text-red-500 text-sm mb-4"><?= htmlspecialchars($pesanError) ?></p>
      <?php endif; ?>

      <!-- 9) Form dikirim ke halaman ini sendiri (action="") pakai method POST -->
      <form method="POST" action="#simulasi">

        <label class="block mb-1.5 font-medium text-[14px] text-gray-700">Pilih Mobil</label>
        <select id="mobil" onchange="pilihMobil()" class="w-full border rounded-lg p-2.5 mb-5 text-[15px]">
          <option value="0" data-nama="">-- Pilih Mobil --</option>
          <option value="100000000" data-nama="Toyota Agya" <?= $namaMobil === 'Toyota Agya' ? 'selected' : '' ?>>Toyota Agya</option>
          <option value="180000000" data-nama="Toyota Avanza" <?= $namaMobil === 'Toyota Avanza' ? 'selected' : '' ?>>Toyota Avanza</option>
          <option value="230000000" data-nama="Honda HR-V" <?= $namaMobil === 'Honda HR-V' ? 'selected' : '' ?>>Honda HR-V</option>
          <option value="300000000" data-nama="Honda CR-V" <?= $namaMobil === 'Honda CR-V' ? 'selected' : '' ?>>Honda CR-V</option>
          <option value="250000000" data-nama="Mitsubishi Xpander" <?= $namaMobil === 'Mitsubishi Xpander' ? 'selected' : '' ?>>Mitsubishi Xpander</option>
        </select>

        <!-- 10) Field tersembunyi: nama mobil, diisi otomatis lewat JS pas dropdown dipilih,
                 lalu ikut terkirim ke PHP saat submit -->
        <input type="hidden" id="mobilNama" name="mobilNama" value="<?= htmlspecialchars($namaMobil) ?>">

        <label class="block mb-1.5 font-medium text-[14px] text-gray-700">Harga Mobil (Rp)</label>
        <!-- 11) name="harga" supaya ikut terkirim ke PHP -->
        <input id="harga" name="harga" type="number" readonly
               class="w-full border rounded-lg p-2.5 mb-5 bg-gray-100 text-[15px]"
               placeholder="Pilih mobil dulu"
               value="<?= $harga > 0 ? $harga : '' ?>">

        <label class="block mb-1.5 font-medium text-[14px] text-gray-700">DP (%)</label>
        <select name="dp" class="w-full border rounded-lg p-2.5 mb-5 text-[15px]">
          <option value="" <?= $dpPersen === '' ? 'selected' : '' ?>>-- Pilih DP --</option>
          <?php
            // 12) Bikin opsi DP pakai perulangan foreach, biar nggak nulis <option> 6x manual.
            $pilihanDp = [10, 20, 30, 40, 50, 60];
            foreach ($pilihanDp as $opsi):
          ?>
            <option value="<?= $opsi ?>" <?= $dpPersen !== '' && $dpPersen == $opsi ? 'selected' : '' ?>><?= $opsi ?>%</option>
          <?php endforeach; ?>
        </select>

        <label class="block mb-1.5 font-medium text-[14px] text-gray-700">Tenor</label>
        <!-- 13) Sekarang jadi <select> juga (persis pola DP di atas), bukan checkbox lagi -->
        <select name="tenor" class="w-full border rounded-lg p-2.5 mb-5 text-[15px]">
          <option value="" <?= $tenorTahun === '' ? 'selected' : '' ?>>-- Pilih Tenor --</option>
          <?php
            $pilihanTenor = [1, 2, 3, 4, 5];
            foreach ($pilihanTenor as $th):
          ?>
            <option value="<?= $th ?>" <?= $tenorTahun !== '' && $tenorTahun == $th ? 'selected' : '' ?>><?= $th ?> Tahun</option>
          <?php endforeach; ?>
        </select>

        <!-- 14) name="hitung" ini kuncinya, dicek PHP di atas lewat isset($_POST['hitung']) -->
        <button type="submit" name="hitung"
                class="w-full bg-gold hover:opacity-90 text-white font-semibold py-3 rounded-full text-[15px] tracking-wide transition-opacity">
          Hitung
        </button>
      </form>

      <?php if ($hasilAda): ?>
        <!-- 15) Bagian ini cuma muncul kalau $hasilAda == true,
                 artinya form sudah disubmit DAN perhitungannya berhasil -->
        <div class="mt-6 bg-goldlight/30 rounded-lg p-5 text-[15px] leading-relaxed space-y-1.5">
          <p>Mobil : <?= htmlspecialchars($namaMobil) ?></p>
          <p>Harga Mobil : <?= formatRupiah($harga) ?></p>
          <p>DP : <?= $dpPersen ?>% (<?= formatRupiah($nominalDp) ?>)</p>
          <p>Tenor : <?= $tenorTahun ?> Tahun (<?= $bulanTenor ?> Bulan)</p>
          <p>Bunga (20%) : <?= formatRupiah($bunga) ?></p>
          <p class="font-semibold text-base text-charcoal pt-1">Angsuran / Bulan : <?= formatRupiah($angsuran) ?></p>
        </div>

        <!-- 16) Tombol "Hitung Ulang" — ini cuma link biasa (bukan submit form),
                 mengarah ke halaman ini sendiri TANPA data POST.
                 Karena nggak ada $_POST['hitung'] lagi, $hasilAda otomatis balik
                 jadi false dan form kembali ke kondisi awal/kosong. -->
        <a href="index.php#simulasi"
           class="mt-4 inline-flex w-full justify-center items-center border border-gold text-gold hover:bg-gold hover:text-white font-medium py-2.5 rounded-full text-sm transition-colors">
          Selesai
        </a>
      <?php endif; ?>

    </div>
  </section>

  <!-- FOOTER -->
  <footer id="kontak" class="bg-charcoal text-goldlight/90 scroll-mt-20">
    <div class="max-w-5xl mx-auto px-6 py-16 grid grid-cols-1 sm:grid-cols-3 gap-10">

      <div>
        <span class="font-serif italic font-medium text-xl tracking-wide text-white">Car Deal</span>
        <p class="text-sm text-goldlight/60 leading-relaxed mt-3 max-w-xs">
          Dealer mobil terpercaya dengan skema kredit transparan dan proses yang mudah untuk mobil impian Anda.
        </p>
      </div>

      <div>
        <h3 class="text-white text-sm font-semibold tracking-wide mb-4">Navigasi</h3>
        <ul class="space-y-2.5 text-sm text-goldlight/70">
          <li><a href="#beranda" class="hover:text-white transition-colors">Beranda</a></li>
          <li><a href="#tentang" class="hover:text-white transition-colors">Tentang</a></li>
          <li><a href="#simulasi" class="hover:text-white transition-colors">Simulasi Kredit</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-white text-sm font-semibold tracking-wide mb-4">Kontak</h3>
        <ul class="space-y-2.5 text-sm text-goldlight/70 leading-relaxed">
          <li>Jl. Mojosongo No. 25, Kab. Boyolali, Jawa Tengah</li>
          <li>0812-3456-7890</li>
          <li>info@cardeal.com</li>
        </ul>
      </div>
    </div>

    <div class="border-t border-white/10 py-5 text-center text-xs text-goldlight/50 tracking-wide">
      &copy; 2026 Car Deal - Junior Web Developer Teknologi Digital
    </div>
  </footer>

<script>
  // 16) JS yang tersisa cuma ini: mengisi harga & nama mobil otomatis
  //     saat dropdown dipilih (sebelum form disubmit ke PHP).
  //     Perhitungan kreditnya sendiri SUDAH PINDAH ke PHP di atas.
  function pilihMobil(){
    const select = document.getElementById('mobil');
    const opsiTerpilih = select.options[select.selectedIndex];
    document.getElementById('harga').value = select.value;
    document.getElementById('mobilNama').value = opsiTerpilih.getAttribute('data-nama') || '';
  }
</script>

</body>
</html>