
@extends('template.master-mid')

@section('judul','DATA mid')

@section('isi')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">DATA MIDSEMESTER SEMESTER UNIVERSITAS BUMIGORA </h3>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-success mb-3" href="{{ url('add')}}" role="button"><i class="fas fa-add"></i> Tambah Data</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-info text-center">
                                        <th>No</th>
                                        <th>id</th>
                                        <th>Judul </th>
                                        <th>Isi</th>
                                        <th>Penulis</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->kolom_judul }}</td>
                                        <td>{{ $row->kolom_isi }}</td>
                                        <td>{{ $row->kolom_penulis }}</td>
                                        <td>{{ $row->kolom_keterangan }}</td>
                                        <td>
                                            <a class="btn btn-success btn-sm" href="{{ url('edit-mid')}}/{{ $row->id }}/edit" role="button"><i class="fas fa-add"></i> Update </a>
                                            <form action=" {{ route('delete.mid', $row->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection