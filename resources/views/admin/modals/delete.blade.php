@foreach ($datas as $data)
    <form action="{{ route('destroy.mahasiswa', $data->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <div class="modal fade" id="modalHapus{{ $data->id }}">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Hapus Data</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-between">

                           <h5>Yakin ingin hapus mahasiswa ?</h5>
                           <button class="btn btn-danger mb-3 float-right" type="submit">Hapus</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
