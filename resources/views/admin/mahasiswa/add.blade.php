@extends('admin.layouts.index', ['title' => 'Tambah Data Mahasiswa'])

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Mahasiswa</a></div>
                    <div class="breadcrumb-item">Tambah Data</div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah Data</h4>
                            </div>
                            <div class="card-body">
                              
                                <form action="{{ route('store.mahasiswa') }} " method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Stambuk</label>
                                                <input type="number" required name="stb" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" required name="nama" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('index.mahasiswa') }}" class="btn btn-secondary mb-4 ">Kembali</a>
                                    <button type="submit" class="btn btn-success float-right">Tambah</button>
                                </form>

                            </div>
                        </div>
                    </div>
        </section>
    </div>
@endsection
