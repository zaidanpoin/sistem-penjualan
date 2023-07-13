@extends('template')

@section('konten')
    @extends('template')

@section('konten')
    <h1>laporan per pelanggan</h1>
    <form action="/filterPelanggan" method="POST">
        @csrf


        <select style="width: 30%" name="id_pelanggan" id="">
            <option value="">pilih pelanggan</option>
            @foreach ($pl as $data)
                <option value="{{ $data['id_pelanggan'] }}">{{ $data['nm_pelanggan'] }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">submit</button>

    </form>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laporan per pelanggan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id pesan</th>
                            <th>tgl_pesan</th>
                            <th>pelanggan</th>
                            <th>jumlah</th>
                            <th>harga</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($p as $data)
                            @foreach ($data->detil_pesan as $item)
                                <tr>
                                    <td>{{ $data->id_pesan }}</td>
                                    <td>{{ $data->tgl_pesan }}</td>
                                    <td>{{ $data->pelanggan->nm_pelanggan }}</td>

                                    {{-- <td>{{ $data->Detil_pesan->jumlah }}</td> --}}

                                    <td>{{ $item->jumlah }}</td>
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
