@foreach ($datas as $data)
    <form action="{{ route('update.mahasiswa', $data->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="modal fade" id="modalEdit{{ $data->id }}">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Edit Mahasiswa</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Stambuk</label>
                                    <input type="number" required name="stb" class="form-control"
                                        value="{{ $data->stb }}">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" required name="nama" class="form-control"
                                        value="{{ $data->nama }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary mb-3" type="submit">Ubah</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
