@extends('utama.main')
@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="button"
                            data-toggle="modal" data-target="#buku">
                            <i class="fas fa-plus fa-sm text-white-50"></i>
                            Tambah
                        </a>
                    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Kategori</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="text-center">
                                    @foreach ($data as $kategori)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kategori->nama }}</td>
                                            <td>
                                                {{-- tombol edit --}}
                                                <a class="btn btn-warning btn-icon-split" type="button" data-toggle="modal"
                                                    data-target="#editKategori{{ $kategori->id }}">
                                                    <span class="text"><i class="fas fa-edit"></i></span>
                                                </a>
                                                {{-- tombol hapus/delete --}}
                                                <a href="" class="btn btn-warning btn-icon-split">
                                                    <form action="{{ route('kategori.destroy', $kategori->id) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-icon-split">
                                                            <span class="text"><i class="fas fa-trash-alt"></i></span>
                                                        </button>
                                                    </form>
                                                </a>
                                            </td>
                                        </tr>

                                        {{-- Modal Edit --}}
                                        <div class="modal fade" id="editKategori{{ $kategori->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <form action="{{ route('kategori.update', $kategori) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Buku</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row g-3">
                                                                <div class="col">
                                                                    <label>nama</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Example: KontolBerduri"
                                                                            autocomplete="off" name="nama"
                                                                            value="{{ $kategori->nama }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>

                {{-- Modal Tambah --}}
                <div class="modal fade" id="buku" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <form action="{{ route('kategori.store') }}" method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Buku</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label>nama</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Example: KontolBerduri" autocomplete="off" name="nama">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
@endsection
