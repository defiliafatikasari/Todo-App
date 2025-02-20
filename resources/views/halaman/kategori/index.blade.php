@extends('halaman-utama')

@section('content')
<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-10"><h3 class="mb-0">Data Kategori</h3></div>
              <div class="col-sm-2">
                <a href="{{route('kategori.tambah')}}" class="btn btn-sm btn-primary">Tambah Data</a>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Data</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Nama Kategori</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- {{-- Data dummmy --}}
                        <tr>
                          <td>1</td>
                          <td>Tugas Utama</td>
                          <td>
                            <div class="btn-group">
                              <a href="" class="btn btn-sm btn-danger">Hapus</a>
                            </div>
                          </td>
                        </tr> -->

                        <!-- Data Dinamis -->
                        <?php 
                          $number = 1;
                        ?>
                        @if (count($data) > 0)
                          @foreach ($data as $item)
                          <tr>
                              <td>{{$number++}}</td>
                              <td>{{$item->nama}}</td>
                              <td>
                                  <div class="btn-group">
                                    <a href="{{route('kategori.edit', ['id' => $item->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{route('kategori.destroy', ['id' => $item->id])}}" class="btn btn-sm btn-danger">Hapus</a>
                                  </div>
                              </td>
                          </tr>
                                                      
                          @endforeach
                        @else
                          <tr>
                              <td colspan="3" class="text-center"> Data Kosong</td>
                          </tr>
                                                
                        @endif
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
@endsection