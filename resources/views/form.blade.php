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
      <form action="{{ route('form') }}" method="POST"  class="form">
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
              @foreach ($program as $prog )
                  <option value="{{ $prog -> program}}">{{ ucfirst($prog -> program) }}</option>
              @endforeach
              
              
            </select>
          </div>

          {{-- <div class="input-box">
            <label for="lokasi">Pilih Lokasi</label>
            <select id="lokasi" name="lokasi">
              @foreach ($lokasi as $lok)
                  <option value="{{ $lok }}">{{ ucfirst($lok) }}</option>
              @endforeach
              
            </select>
          </div>

          <div class="input-box">
            <label for="bayar">Pilih Metode Pembayaran</label>
            <select id="bayar" name="metode_pembayaran">
              @foreach ($pembayaran as $metode)
                  <option value="{{ $metode }}">{{ ucfirst($metode) }}</option>
              @endforeach
              
            </select>
          </div>
        </div> --}}
        <!--akhir kanan-->
        <div class="kirim">
            <input type="submit" value="KIRIM">
        </div>
      </form>
    </section>
  </body>
</html>
