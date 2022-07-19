<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Sekolah di Provinsi Jakarta</title>
  </head>
  <body>
    <h1>Daftar Sekolah di Provinsi Jakarta</h1>

<div class="container">

  <form action="{{ route('post.sekolah') }}" method="post">
    @csrf
    <div class="row">

      <div class="col-md-4">
        <div class="form-group">
          <label>Kecamatan atau Kabupaten</label>
          <select name="kabupaten" id="" class="form-control" required>
            <option value="">Pilih</option>
            <option value="cilandak">Cilandak</option>
            <option value="kepulauan_seribu">Kepulauan Seribu</option>
            <option value="jagakarsa">Jagakarsa</option>
            <option value="kebayoran_baru">Kebayoran Baru</option>
            <option value="kebayoran_lama">Kebayoran Lama</option>
            <option value="pasar_minggu">Pasar Minggu</option>
            <option value="pesanggrahan">Pesanggrahan</option>
            <option value="setia_budi">Setia Budi</option>
            <option value="tebet">Tebet</option>
            <option value="jakarta_pusat">Jakarta Pusat</option>
            <option value="pulo_gadung">Pulo Gadung</option>
            <option value="cipayung">Cipayung</option>
          </select>
        </div>
      </div>

      <div class="col-md-4">
        <label style="color: white" for="">.</label><br>
        <button type="submit" name="submit" class="btn btn-primary btn-block">Lihat Data</button>
      </div>

    </div>

  </form><br><br>

  @if(isset($_POST['submit']))

  <h3>List Sekolah</h3>

  <table class="table table-bordered table-striped table-info">
    <thead>
      <th>No</th>
      <th>NPSN</th>
      <th>Nama Sekolah</th>
      <th>Alamat</th>
      <th>Desa</th>
      <th>Kec</th>
      <th>Kab</th>
      <th>Jenjang</th>
    </thead>
      <tbody>
        @foreach ($sekolah as $s)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{$s['npsn'] }}</td>
          <td>{{$s['nama'] }}</td>
          <td>{{$s['alamat'] }}</td>
          <td>{{$s['desa'] }}</td>
          <td>{{$s['kecamatan'] }}</td>
          <td>{{$s['kabupaten'] }}</td>
          <td>{{$s['jenjang'] }}</td>
        </tr>
        @endforeach
      </tbody>
  </table>

  @endif


</div>

   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>