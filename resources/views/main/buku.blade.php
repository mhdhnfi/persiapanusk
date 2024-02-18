@extends('utama.main')
@section('content')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-2 text-gray-800">Tables</h1>
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
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Pengarang</th>
                                    <th class="text-center">Penerbit</th>
                                    <th class="text-center">Stock</th>
                                    <th class="text-center">Tanggal Pembuatan</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                @foreach ($data as $buku)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $buku->judul }}</td>
                                        <td>{{ $buku->pengarang }}</td>
                                        <td>{{ $buku->penerbit }}</td>
                                        <td>{{ $buku->stock }}</td>
                                        <td>{{ $buku->created_at->format('d M Y') }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-icon-split">
                                                <span class="text"><i class="fas fa-info-circle"></i></span>
                                            </a>
                                            {{-- tombol edit --}}
                                            <a class="btn btn-warning btn-icon-split" type="button" data-toggle="modal"
                                                data-target="#editbuku{{ $buku->id }}">
                                                <span class="text"><i class="fas fa-edit"></i></span>
                                            </a>
                                            {{-- tombol hapus/delete --}}
                                            <a href="" class="btn btn-warning btn-icon-split">
                                                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
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
                                    <div class="modal fade" id="editbuku{{ $buku->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <form action="{{ route('buku.update', $buku) }}" method="POST">
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
                                                                <label>Judul</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Example: NapiSuka?"
                                                                        autocomplete="off" name="judul"
                                                                        value="{{ $buku->judul }}">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label>Pengarang</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Example: Hanafi" autocomplete="off"
                                                                        name="pengarang"
                                                                        value="{{ $buku->pengarang }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label>Penerbit</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Example: Gramedia"
                                                                        autocomplete="off" name="penerbit"
                                                                        value="{{ $buku->penerbit }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label>Stock</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="number" min="1" max="100"
                                                                        class="form-control" autocomplete="off"
                                                                        name="stock" value="{{ $buku->stock }}">
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
                    <form action="{{ route('buku.store') }}" method="POST">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row g-3">
                                    <div class="col">
                                        <label>Judul</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control"
                                                placeholder="Example: NapiSuka?" autocomplete="off" name="judul">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label>Pengarang</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Example: Hanafi"
                                                autocomplete="off" name="pengarang">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Penerbit</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control"
                                                placeholder="Example: Gramedia" autocomplete="off" name="penerbit">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Stock</label>
                                        <div class="input-group mb-3">
                                            <input type="number" min="1" max="100" class="form-control"
                                                autocomplete="off" name="stock" value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Stock</button>
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
