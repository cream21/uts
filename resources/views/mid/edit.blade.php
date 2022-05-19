<!-- tambah data blog by arikk -->
@extends('template.master-mid')

@section('judul','Edit Data Mid')

@section('isi')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary" style="float: right;">
                            <h3 class="card-title">EDIT DATA MID</h3>
                        </div>
                        <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>

                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach

                                </ul>
                            </div>
                            @endif
                            <form action="{{ url('edit-mid')}}/{{ $data->id }}" method="post">
                                @method('put')
                                @csrf
                                <!--  -->
                                <div class="form-group mb-3">
                                    <label for="id1">Id </label>
                                    <input type="number" id="id1" name="id" class="form-control" value="{{old('id', $data->id)}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nb">Judul</label>
                                    <input type="text" id="nb" name="kolom_judul" class="form-control" value="{{old('kolom_judul',$data->kolom_judul)}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="b">Isi</label><br>
                                    <textarea id="b" name="kolom_isi" cols="30" rows="2" autocomplete="off">{{old('kolom_isi',$data->kolom_isi)}}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="j">Penulis</label>
                                    <input type="text" id="j" name="kolom_penulis" class="form-control" value="{{old('kolom_penulis',$data->kolom_penulis)}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="bd">Keterangan</label><br>
                                    <textarea id="bd" name="kolom_keterangan" cols="30" rows="2" autocomplete="off">{{old('kolom_keterangan',$data->kolom_keterangan)}}</textarea>
                                </div>

                                <input type="submit" class="btn btn-success" name="submit" value="Simpan Data">
                                <a class="btn btn-primary" href="{{ url('mid/index') }}" role="button">Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection<!-- tambah data blog by arikk -->
@extends('template.master-mid')

@section('judul','Edit Data Mid')

@section('isi')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary" style="float: right;">
                            <h3 class="card-title">EDIT DATA MID</h3>
                        </div>
                        <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>

                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach

                                </ul>
                            </div>
                            @endif
                            <form action="{{ url('edit-mid')}}/{{ $data->id }}" method="post">
                                @method('put')
                                @csrf
                                <!--  -->
                                <div class="form-group mb-3">
                                    <label for="id1">Id </label>
                                    <input type="number" id="id1" name="id" class="form-control" value="{{old('id', $data->id)}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nb">Judul</label>
                                    <input type="text" id="nb" name="kolom_judul" class="form-control" value="{{old('kolom_judul',$data->kolom_judul)}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="b">Isi</label><br>
                                    <textarea id="b" name="kolom_isi" cols="30" rows="2" autocomplete="off">{{old('kolom_isi',$data->kolom_isi)}}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="j">Penulis</label>
                                    <input type="text" id="j" name="kolom_penulis" class="form-control" value="{{old('kolom_penulis',$data->kolom_penulis)}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="bd">Keterangan</label><br>
                                    <textarea id="bd" name="kolom_keterangan" cols="30" rows="2" autocomplete="off">{{old('kolom_keterangan',$data->kolom_keterangan)}}</textarea>
                                </div>

                                <input type="submit" class="btn btn-success" name="submit" value="Simpan Data">
                                <a class="btn btn-primary" href="{{ url('mid/index') }}" role="button">Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection