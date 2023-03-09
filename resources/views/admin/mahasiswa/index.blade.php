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
                                <a href="{{ route('add.mahasiswa') }} " class="btn btn-primary float-left mb-3" >+
                                    Tambah Data</a>
                                <div class="table-responsive">

                                    <table class="table table-striped table-md">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Stambuk</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($datas as $i => $data)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->stb }}</td>
                                                <td class="d-flex">
                                                    <a href="{{ route('edit.mahasiswa', $data->id ) }} " class="btn editBtn btn-icon btn-warning">
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
                                
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

@endsection


