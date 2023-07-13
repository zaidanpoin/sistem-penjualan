@extends('template')

@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form isi data pelanggan</h6>
        </div>
        <div class="card-body">



            <form action="/storeEntriPesan" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">id pesan</label>
                    <input type="text" class="form-control" style="width: 50%" name="id_pesan">
                </div>

                <div class="form-group">
                    <label for="">nama pelanggan</label>

                    <select style="width: 50%" name="id_pelanggan" class="form-control" id="">
                        <option value="">pilih pelanggan</option>
                        @foreach ($p as $data)
                            <option value="{{ $data['id_pelanggan'] }}">{{ $data['nm_pelanggan'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">tanggal pesan</label>
                    <input type="date" class="form-control" style="width: 50%" name="tgl_pesan">
                </div>



                <button type="submit" class="btn btn-primary">submit</button>
                <button type="reset" class="btn btn-danger">reset</button>

            </form>



        </div>
    </div>

    {{-- tabel --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataProduk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id pesan</th>
                            <th>id pelanggan</th>
                            <th>tanggal pesan</th>
                            <th>aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        {{-- {{ dd($ps) }} --}}
                        @forelse ($ps as $data)
                            <tr>
                                <td>{{ $data['id_pesan'] }}</td>
                                <td>
                                    {{ $data->pelanggan->nm_pelanggan }}

                                </td>
                                <td>
                                    {{ $data->tgl_pesan }}

                                </td>

                                <td>
                                    <a href="/detilPesan/{{ $data['id_pesan'] }}" class="btn btn-success">detail</a>

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
