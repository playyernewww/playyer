@extends('layout.main')
@section('konten')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Buku</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('buku.update', $buku->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}" required>
                            </div>
                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $buku->penulis }}" required>
                            </div>
                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tahunterbit">Tahun Terbit</label>
                                <input type="number" class="form-control" id="tahunterbit" name="tahunterbit" value="{{ $buku->tahunterbit }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
</div>
@endsection
