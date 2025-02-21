@extends('halaman-utama')

@section('content')
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Edit Data Tugas</h3></div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-md-12">
                    <div class="card card-primary card-outline mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit Data</h3>
                        </div>
                        <form action="{{ route('tugas.update', $tugas->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="namaTugas" class="form-label">Nama Tugas</label>
                                    <input type="text" name="nama" class="form-control" id="namaTugas" value="{{ old('nama', $tugas->nama) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="id_kategoris" class="form-label">Kategori</label>
                                    <select name="id_kategoris" id="id_kategoris" class="form-control" required>
                                        @foreach ($kategori as $kat)
                                            <option value="{{ $kat->id }}" {{ $tugas->id_kategoris == $kat->id ? 'selected' : '' }}>
                                                {{ $kat->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ route('tugas') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
