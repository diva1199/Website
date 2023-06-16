@extends ('layouts.main')
@section('title','eMaha - form edit')
@section('content')
    <div class="card mt-4">
        <div class="card-header"><strong> Form Edit Mahasiswa </strong></div>
        <div class="card-body">
            @php
                $minat = explode(',', $mhs->minat);
            @endphp
            <form action="/student/update/{{$mhs->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group w-25">
                    <label>Nim</label>
                    <input type="number" name="nim" class="form-control" value="{{ $mhs->nim }}" readonly>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}">
                </div>
                <label>Gender</label>
                <div class="form-check">
                    <input type="radio" id="Laki-laki" name="gender" class="form-check-input" value="Laki-laki" {{( $mhs->gender=='Laki-laki')?'checked':''}}>
                    <label for="Laki-laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="Perempuan" name="gender" class="form-check-input" value="Perempuan" {{( $mhs->gender=='Perempuan')?'checked':''}}>
                    <label for="Perempuan">Perempuan</label>
                </div>

                <label>Program Studi</label>
                <div class="form-group">
                    <select name="prodi" class="form-control">
                        <option value="0"> --- Pilih Program Studi --- </option>
                        <option value="Sistem Informasi"{{( $mhs->prodi=='Sistem Informasi')?'selected':''}}>Sistem Informasi</option>
                        <option value="Kedokteran" {{( $mhs->prodi=='Kedokteran')?'selected':''}}>Kedokteran</option>
                        <option value="Arsitektur" {{( $mhs->prodi=='Arsitektur')?'selected':''}}>Arsitektur</option>
                        <option value="Manajemen" {{( $mhs->prodi=='Manajemen')?'selected':''}}>Manajemen</option>
                        <option value="Akuntansi" {{( $mhs->prodi=='Akuntansi')?'selected':''}}>Akuntansi</option>
                    </select>    
                </div>
                <label>Minat</label>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="Menyanyi" {{ in_array('Menyanyi',$minat) ? 'checked':''}}>
                    <label>Menyanyi</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="Melukis" {{ in_array('Melukis',$minat) ? 'checked':''}}>
                    <label>Melukis</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="Olahraga" {{ in_array('Olahraga',$minat) ? 'checked':''}}>
                    <label>Olahraga</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="Menari" {{ in_array('Menari',$minat) ? 'checked':''}}>
                    <label>Menari</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="Memasak" {{ in_array('Memasak',$minat) ? 'checked':''}}>
                    <label>Memasak</label>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" role="button" class="btn btn-dark">  Submit  </button>
                </div>
            </form>
        </div>
    </div>
@endsection