@extends('template')

@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form isi detail pesanan</h6>
        </div>
        <div class="card-body">



            <form action="/storeDetilPesan/{{ $id }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">id pesan</label>
                    <input type="text" name="id_pesan" style="width: 50%" class="form-control" disabled
                        value="{{ $id }}">
                </div>
                <input type="hidden" name="id_pesan" style="width: 50%" class="form-control" value="{{ $id }}">

                <div class="form-group">
                    <label for="">nama produk</label>

                    <select style="width: 50%" name="id_produk" class="form-control" id="">
                        <option value="">pilih produk</option>
                        @foreach ($produk as $data)
                            <option value="{{ $data['id_produk'] }}">{{ $data['nm_produk'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">jumlah</label>
                    <input type="number" class="form-control" style="width: 50%" name="jumlah">
                </div>

                <div class="form-group">
                    <label for="">harga jual</label>
                    <input type="number" class="form-control" style="width: 50%" name="harga">
                </div>


                <button type="submit" class="btn btn-primary">submit</button>
                <button type="reset" class="btn btn-danger">reset</button>

            </form>



        </div>
    </div>

    {{-- tabel --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data pesanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id pesan</th>
                            <th>nama produk</th>
                            <th>jumlah</th>
                            <th>harga</th>


                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($detil as $data)
                            <tr>
                                <td>{{ $data['id_pesan'] }}</td>
                                <td>
                                    {{ $data->produk->nm_produk }}

                                </td>
                                <td>
                                    {{ $data->jumlah }}
                                </td>
                                <td>
                                    {{ $data->harga }}
                                </td>


                            </tr>
                        @empty
                        @endforelse




                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
