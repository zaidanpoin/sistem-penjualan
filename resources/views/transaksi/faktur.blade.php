@extends('template')

@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form isi faktur</h6>
        </div>
        <div class="card-body">



            <form action="/storeFaktur" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">id faktur</label>
                    <input type="text" name="id_faktur" style="width: 50%" class="form-control">
                </div>


                <div class="form-group">
                    <label for="">id pesan</label>

                    <select style="width: 50%" name="id_pesan" class="form-control" id="">
                        <option value="">pilih id pesan</option>
                        @foreach ($p as $data)
                            <option value="{{ $data['id_pesan'] }}">{{ $data['id_pesan'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">tanggal faktur</label>
                    <input type="date" class="form-control" style="width: 50%" name="tgl_faktur">
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
                            <th>id faktur</th>
                            <th>id pesan</th>
                            <th>tanggal faktur</th>
                            <th>aksi</th>


                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($f as $data)
                            <tr>
                                <td>{{ $data['id_faktur'] }}</td>
                                <td>
                                    {{ $data->id_pesan }}

                                </td>
                                <td>
                                    {{ $data->tgl_faktur }}
                                </td>
                                <td>
                                    <a href="/detilPesan/{{ $data->id_pesan }}" class="btn btn-success">detail</a>
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
