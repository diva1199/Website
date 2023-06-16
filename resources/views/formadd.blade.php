@extends ('layouts.main')
@section('title','eMaha - form add')
@section('content')
    <div class="card mt-4">
        <div class="card-header"><strong> Form Mahasiswa </strong></div>
        <div class="card-body">
            <form action="/student/save" method="POST">
                @csrf
                <div class="form-group w-25">
                    <label>Nim</label>
                    <input type="number" name="nim" class="form-control" placeholder="Masukkan Nim">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
                <label>Gender</label>
                <div class="form-check">
                    <input type="radio" id="laki-laki" name="gender" class="form-check-input" value="Laki-laki">
                    <label for="laki-laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="perempuan" name="gender" class="form-check-input" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </div>

                <label>Program Studi</label>
                <div class="form-group">
                    <select name="prodi" class="form-control">
                        <option value="0"> --- Pilih Program Studi --- </option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Kedokteran">Kedokteran</option>
                        <option value="Arsitektur">Arsitektur</option>
                        <option value="Manajemen">Manajemen</option>
                        <option value="Akuntansi">Akuntansi</option>
                    </select>    
                </div>
                <label>Minat</label>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="Menyanyi">
                    <label>Menyanyi</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="Melukis">
                    <label>Melukis</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="Olahraga">
                    <label>Olahraga</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="Menari">
                    <label>Menari</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="Memasak">
                    <label>Memasak</label>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" role="button" class="btn btn-dark">  Submit  </button>
                </div>
            </form>
        </div>
    </div>
@endsection