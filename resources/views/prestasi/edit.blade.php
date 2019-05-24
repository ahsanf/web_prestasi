@extends('layout.master')
@section('content')
            @if(session('sukses'))
            <script>
                swal("Sukses", "", "success");
            </script>
            @endif
            <div class="class row">
                <div class="class col-12">
                <h1>Edit prestasi</h1>
                <div class="col-12">
                <form action="/prestasi/{{$prestasi->id}}/update" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mahasiswa</label>
                                    <input name="mahasiswa" class="form-control" type="text" placeholder="Masukkan nama mahasiswa" value={{$prestasi->mahasiswa}}>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Predikat</label>
                                    <select name="predikat" class="form-control" id="exampleFormControlSelect1">
                                    <option @if($prestasi->predikat == 'Juara I') selected @endif>Juara I</option>
                                    <option @if($prestasi->predikat == 'Juara II') selected @endif>Juara II</option>
                                    <option @if($prestasi->predikat == 'Juara III') selected @endif>Juara III</option>
                                    <option @if($prestasi->predikat == 'Juara Favorit') selected @endif>Juara Favorit</option>
                                    <option @if($prestasi->predikat == 'Juara Harapan') selected @endif>Juara Harapan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tingkat</label>
                                    <select name="tingkat" class="form-control" id="exampleFormControlSelect1">
                                    <option @if($prestasi->tingkat == 'Internasional') selected @endif>Internasional</option>
                                    <option @if($prestasi->tingkat == 'Nasional') selected @endif>Nasional</option>
                                    <option @if($prestasi->tingkat == 'Provinsi') selected @endif>Provinsi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tahun</label>
                                    <input name="tahun" class="form-control" type="text" placeholder="Masukkan tahun" value={{$prestasi->tahun}}>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Kegiatan</label>
                                    <textarea name="kegiatan" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan nama kegiatan">{{$prestasi->kegiatan}}</textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-warning">Update</button>
                                </form>         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
</body>
</html>
<script>
   
  </script>
@endsection

