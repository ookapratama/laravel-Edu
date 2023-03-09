@extends('admin.layouts.index', ['title' => 'Data Mahasiswa'])
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Mahasiswa</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="#">Mahasiswa</a></div>
                    <div class="breadcrumb-item">Data</div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tabel Mahasiswa</h4>
                            </div>

                            <div class="card-body">
                                <button class="btn btn-primary float-left mb-3" data-toggle="modal" data-target="#tambah">+
                                    Tambah Data</button>
                                <div class="table-responsive">

                                    <table class="table table-striped table-md">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Stambuk</th>
                                            {{-- <th>Created At</th> --}}
                                            <th>Action</th>
                                        </tr>
                                        <?php
                                        $i = $datas->firstItem();
                                        ?>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->stb }}</td>
                                                <td class="d-flex">
                                                    <button type="button" class="btn editBtn btn-icon btn-warning"
                                                        value="{{ $data->id }}">
                                                        <i class="far fa-edit"></i>
                                                    </button>
                                                    <form action="{{ route('destroy.mahasiswa', $data->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-icon btn-danger"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                @if ($datas->hasPages())
                                    <div class="card-footer float-right">
                                        {{ $datas->links() }}
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('store.mahasiswa') }} " method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Stambuk</label>
                            <input type="number" name="stb" class="form-control" placeholder="Masukkan Stambuk">
                            <label class="mt-3">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('update.mahasiswa') }} " id="editForm" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">
                        <div class="form-group">
                            <label>Stambuk</label>
                            <input type="number" name="stb" id="old_stb" class="form-control"
                                placeholder="Masukkan Stambuk">
                            <label class="mt-3">Nama</label>
                            <input type="text" name="nama" id="old_nama" class="form-control"
                                placeholder="Masukkan Nama Lengkap">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.editBtn', function() {
                var id = $(this).val();
                // alert(id);
                $('#editModal').modal('show');
                $.ajax({
                    type: "GET",
                    url: "/admin/mahasiswa/edit/" + id,
                    success: function(response) {
                        console.log(response.data.picture_url);
                        $('#old_stb').val(response.data.name);
                        $('#old_nama').val(response.data.price);
                        $('#id').val(id);
                    }
                });
            });
        });
    </script>
@endsection
