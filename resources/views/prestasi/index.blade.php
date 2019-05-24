@extends('layout.master')
@section('content')
            @if(session('sukses'))
            <script>
                swal("Sukses", "", "success");
            </script>
            @endif
            <div class="class row">
                <div class="class col-6">
                <h1>Data Prestasi</h1>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah data prestasi
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah data prestasi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="/prestasi/create" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mahasiswa</label>
                                    <input name="mahasiswa" class="form-control" type="text" placeholder="Masukkan nama mahasiswa">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Predikat</label>
                                    <select name="predikat" class="form-control" id="exampleFormControlSelect1">
                                    <option>Juara I</option>
                                    <option>Juara II</option>
                                    <option>Juara III</option>
                                    <option>Juara Favorit</option>
                                    <option>Juara Harapan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tingkat</label>
                                    <select name="tingkat" class="form-control" id="exampleFormControlSelect1">
                                    <option>Internasional</option>
                                    <option>Nasional</option>
                                    <option>Provinsi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tahun</label>
                                    <input name="tahun" class="form-control" type="text" placeholder="Masukkan tahun">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Kegiatan</label>
                                    <textarea name="kegiatan" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan nama kegiatan"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                </div>
                <table id="order" class="table table-striped">
                <thead>
                <tr>
                        <th>Mahasiswa</th>
                        <th>Predikat</th>
                        <th>Tingkat</th>
                        <th>Tahun</th>
                        <th>Kegiatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                    
                    @foreach ($data_prestasi as $prestasi)
                    <tr>
                        <td>{{$prestasi->mahasiswa}}</td>
                        <td>{{$prestasi->predikat}}</td>
                        <td>{{$prestasi->tingkat}}</td>
                        <td>{{$prestasi->tahun}}</td>
                        <td>{{$prestasi->kegiatan}}</td>
                        <td>
                        <a href="/prestasi/{{$prestasi->id}}/edit" class="btn-warning btn-sm" style="text-decoration:none" >Edit</a>
                        <a href="/prestasi/{{$prestasi->id}}/delete" class="btn-danger btn-sm" style="text-decoration:none" onClick="return confirm('Data akan dihapus ?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
        </table>
            </div>
        </div>
        <script>
        </script>
</body>
<script>
    $(document).ready( function () {
    $('#order').DataTable();
    } );
  </script>
</html>
@endsection


