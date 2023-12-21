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
      <form action="/form/post"  method="POST" class="form">
        @csrf
      
        <div class="input-box">
          <label>Nama Lengkap</label>
          <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required />
        </div>

        <div class="input-box">
          <label>Alamat</label>
          <input type="text" name="alamat" placeholder="Masukkan Alamat" required />
        </div>

        <div class="input-box">
          <label>No.Handphone (aktif Whatsapp)</label>
          <input type="number" name="nohp" placeholder="Masukkan Nomor" required />
        </div>

        <!--akhir  kiri-->

        <!--kanan-->
        <div class="column">
          <div class="input-box">
            <label for="program">Pilih Program</label>
            <select id="program" name="program">
              <option value="reguler">Reguler</option>
              <option value="intensif">Intensif</option>
              <option value="super">Super</option>
              
              
            </select>
          </div>

          <div class="input-box">
            <label for="lokasi">Pilih Lokasi</label>
            <select id="lokasi" name="lokasi">
              <option value="ketintang">LBB Gaped Ketintang</option>
              <option value="bubutan">LBB Gaped Bubutan</option>
              <option value="ketintang">LBB Gaped Semampir</option>
              
            </select>
          </div>

          <div class="input-box">
            <label for="bayar">Pilih Metode Pembayaran</label>
            <select id="bayar" name="metode_pembayaran">
             <option value="ditempat">Ditempat</option>
             <option value="dana">e-wallet DANA</option>
             <option value="bca">M-Banking BCA</option>
              
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
