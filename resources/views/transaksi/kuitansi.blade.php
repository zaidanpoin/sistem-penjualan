@extends('template')

@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form isi kuitansi</h6>
        </div>
        <div class="card-body">



            <form action="/storeKuitansi" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">id kuitansi</label>
                    <input type="text" name="id_kuitansi" class="form-control" style="width: 50%">
                </div>


                <div class="form-group">
                    <label for="">id faktur</label>

                    <select style="width: 50%" name="id_faktur" class="form-control" id="">
                        <option value="">pilih id faktur</option>
                        @foreach ($p as $data)
                            <option value="{{ $data['id_faktur'] }}">{{ $data['id_faktur'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">tanggal kuitansi</label>
                    <input type="date" class="form-control" style="width: 50%" name="tgl_kuitansi">
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
                            <th>id kuitansi</th>
                            <th>id faktur</th>
                            <th>tanggal kuitansi</th>



                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($k as $data)
                            <tr>
                                <td>{{ $data['id_kuitansi'] }}</td>
                                <td>
                                    {{ $data->id_faktur }}

                                </td>
                                <td>
                                    {{ $data->tgl_kuitansi }}
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
