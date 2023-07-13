@extends('template')

@section('konten')
    <a href="/addPelanggan" class="btn btn-primary mb-3">Add Pelanggan</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataPelanggan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id pelanggan</th>
                            <th>nama pelanggan</th>
                            <th>alamat</th>
                            <th>telepon</th>
                            <th>email</th>
                            <th>aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($p as $data)
                            <tr>
                                <td>{{ $data['id_pelanggan'] }}</td>
                                <td>{{ $data['nm_pelanggan'] }}</td>
                                <td>{{ $data['alamat'] }}</td>
                                <td>{{ $data['telepon'] }}</td>
                                <td>{{ $data['email'] }}</td>
                                <td>
                                    <a href="/editPelanggan/{{ $data['id_pelanggan'] }}" class="btn btn-warning">edit</a>
                                    <a href="/hpsPelanggan/{{ $data['id_pelanggan'] }}" class="btn btn-danger">hapus</a>
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
