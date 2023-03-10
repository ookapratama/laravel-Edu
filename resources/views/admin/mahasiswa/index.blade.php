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

                            <?php
                            $i = $datas->firstItem();
                            ?>

                            <div class="card-body">

                                <div class="d-flex justify-content-between">

                                    <div class="">

                                        <a href="{{ route('add.mahasiswa') }} " class="btn btn-primary float-left mb-3">+
                                            Tambah Data
                                        </a>
                                    </div>

                                    <form action="{{ route('cari.mahasiswa') }}" method="GET">
                                        <div class="form-group">
                                            <div class="d-flex">

                                                <input type="text" class="form-control"
                                                    placeholder="Masukkan Pencarian..." name="cari">

                                                <button type="submit" class="btn btn-warning">Cari</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                                <div class="table-responsive">

                                    <table class="table table-striped table-md">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Stambuk</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->stb }}</td>
                                                <td class="d-flex">
                                                    <a href="{{ route('edit.mahasiswa', $data->id) }} "
                                                        class="btn editBtn btn-icon btn-warning">
                                                        <i class="far fa-edit"></i>
                                                    </a>
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
                                    <div class="card-footer">
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
@endsection
