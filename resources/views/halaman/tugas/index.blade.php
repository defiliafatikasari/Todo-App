@extends('halaman-utama')

@section('content')
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10">
                    <h3 class="mb-0">Data Tugas</h3>
                </div>
                <div class="col-sm-2 text-end">
                    <a href="{{ route('tugas.tambah') }}" class="btn btn-sm btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Tugas</h3>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Tugas</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($tugas as $key => $tugasItem)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $tugasItem->nama }}</td>
                                        <td>{{ $tugasItem->kategori->nama ?? '-' }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('tugas.edit', $tugasItem->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('tugas.hapus', $tugasItem->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Tidak ada data tugas.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            {{ $tugas->links() }} <!-- Tambahkan pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
