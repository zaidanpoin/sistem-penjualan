@extends('template')

@section('konten')
    <a href="/addProduk" class="btn btn-primary mb-3">Add Produk</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataProduk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id produk</th>
                            <th>nama produk</th>
                            <th>satuan</th>
                            <th>harga</th>
                            <th>stock</th>
                            <th>aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($p as $data)
                            <tr>
                                <td>{{ $data['id_produk'] }}</td>
                                <td>{{ $data['nm_produk'] }}</td>
                                <td>{{ $data['satuan'] }}</td>
                                <td>{{ $data['harga'] }}</td>
                                <td>{{ $data['stock'] }}</td>
                                <td>
                                    <a href="/editProduk/{{ $data['id_produk'] }}" class="btn btn-warning">edit</a>
                                    <a href="/hpsProduk/{{ $data['id_produk'] }}" class="btn btn-danger">hapus</a>
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
