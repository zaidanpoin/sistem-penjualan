@extends('template')

@section('konten')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form isi data pelanggan</h6>
        </div>
        <div class="card-body">
            @foreach ($p as $d)
                <form action="/updatePelanggan/{{ $d['id_pelanggan'] }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">id pelanggan</label>
                        <input type="text" class="form-control" disabled value="{{ $d['id_pelanggan'] }}"
                            style="width: 50%" name="id_pelanggan">
                    </div>

                    <div class="form-group">
                        <label for="">nama pelanggan</label>
                        <input type="text" class="form-control" value="{{ $d['nm_pelanggan'] }}" style="width: 50%"
                            name="nm_pelanggan">
                    </div>

                    <div class="form-group">
                        <label for="">alamat</label>
                        <textarea name="alamat" id=""style="width: 50%" class="form-control" cols="10" rows="5">{{ $d['alamat'] }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">telepon</label>
                        <input type="number" value="{{ $d['telepon'] }}" class="form-control" style="width: 50%"
                            name="telepon">
                    </div>

                    <div class="form-group">
                        <label for="">email</label>
                        <input type="email" value="{{ $d['email'] }}" class="form-control" style="width: 50%"
                            name="email">
                    </div>

                    <button type="submit" class="btn btn-primary">submit</button>
                    <button type="reset" class="btn btn-danger">reset</button>
                    <a href="/pelanggan" class="btn btn-warning">kembali </a>
                </form>
            @endforeach


        </div>
    </div>
@endsection
