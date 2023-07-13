@extends('template')

@section('konten')
    <h1>laporan per pelanggan</h1>
    <form action="/filterProduk" method="POST">
        @csrf


        <select style="width: 30%" name="id_produk" id="">
            <option value="">pilih produk</option>
            @foreach ($pl as $data)
                <option value="{{ $data['id_produk'] }}">{{ $data['nm_produk'] }}</option>
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
                            <tr>
                                <td>{{ $data->id_pesan }}</td>
                                <td>{{ $data->pesan->tgl_pesan }}</td>
                                <td>{{ $data->pesan->pelanggan->nm_pelanggan }}</td>
                                <td>{{ $data->jumlah }}</td>
                                <td>{{ $data->harga }}</td>


                                {{-- <td>{{ $data->Detil_pesan->jumlah }}</td> --}}




                            </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
