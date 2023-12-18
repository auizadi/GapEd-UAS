<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="{{asset('CSS/style-reg.css')}}" />
  </head>
  <body>
    <section class="container">
      <!--kiri-->
      <header>Formulir Pendaftaran</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>Nama Lengkap</label>
          <input type="text" placeholder="Masukkan Nama Lengkap" required />
        </div>

        <div class="input-box">
          <label>Alamat</label>
          <input type="text" placeholder="Masukkan Alamat" required />
        </div>

        <div class="input-box">
          <label>No.Handphone (aktif Whatsapp)</label>
          <input type="number" placeholder="Masukkan Nomor" required />
        </div>

        <!--akhir  kiri-->

        <!--kanan-->
        <div class="column">
          <div class="input-box">
            <label for="program">Pilih Program</label>
            <select id="program">
              <option value="program">Pilih Program</option>
              <option value="reguler">Reguler</option>
              <option value="intensif">Intensif</option>
              <option value="super">Super</option>
            </select>
          </div>

          <div class="input-box">
            <label for="lokasi">Pilih Lokasi</label>
            <select id="lokasi">
              <option value="lokasi">Pilih Lokasi</option>
              <option value="ketintang">LBB GapEd Ketintang</option>
              <option value="bubutan">LBB GapEd Bubutan</option>
              <option value="semampir">LBB GapEd Semampir</option>
            </select>
          </div>

          <div class="input-box">
            <label for="bayar">Pilih Lokasi</label>
            <select id="bayar">
              <option value="bayar">Pilih Metode Pembayaran</option>
              <option value="cash">Di Tempat</option>
              <option value="dana">DANA e-wallet</option>
              <option value="mobile">M-Banking BCA</option>
            </select>
          </div>
        </div>
        <!--akhir kanan-->
        <div class="kirim">
            <input type="submit" value="KIRIM">
        </div>
      </form>
    </section>
  </body>
</html>
