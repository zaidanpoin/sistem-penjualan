@extends('template')

@section('konten')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form isi data pelanggan</h6>
        </div>
        <div class="card-body">
            <form action="/storeProduk" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">id produk</label>
                    <input type="text" class="form-control" style="width: 50%" name="id_produk">
                </div>

                <div class="form-group">
                    <label for="">nama produk</label>
                    <input type="text" class="form-control" style="width: 50%" name="nm_produk">
                </div>

                <div class="form-group">
                    <label for="">satuan</label>
                    <input type="text" class="form-control" style="width: 50%" name="satuan">
                </div>

                <div class="form-group">
                    <label for="">harga</label>
                    <input type="number" class="form-control" style="width: 50%" name="harga">
                </div>

                <div class="form-group">
                    <label for="">stock</label>
                    <input type="number" class="form-control" style="width: 50%" name="stock">
                </div>

                <button type="submit" class="btn btn-primary">submit</button>
                <button type="reset" class="btn btn-danger">reset</button>
                <a href="/pelanggan" class="btn btn-warning">kembali </a>
            </form>



        </div>
    </div>
@endsection
