@extends('template')

@section('konten')
    @extends('template')

@section('konten')
    <h1>laporan per tanggal</h1>
    <form action="/tanggal" method="POST">
        @csrf

        <input type="date" name="tanggalawal"> &
        <input type="date" name="tanggalakhir">

        <button type="submit" class="btn btn-primary">submit</button>

    </form>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataPelanggan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id pesan</th>
                            <th>tgl_pesan</th>
                            <th>pelanggan</th>
                            <th>harga</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($p as $data)
                            @foreach ($data->detil_pesan as $item)
                                <tr>
                                    <td>{{ $item->id_pesan }}</td>
                                    <td>{{ $item->pesan->tgl_pesan }}</td>
                                    <td>{{ $data->pelanggan->nm_pelanggan }}</td>
                                    <td>{{ $item->harga }}</td>
                                </tr>
                            @endforeach
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection




@endsection
