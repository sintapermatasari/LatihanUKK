@extends('siswas.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Peserta Didik Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('siswas.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('siswas.store') }}" method="POST">
    @csrf
  
     <div class="row">

            <div class="form-group">
                <strong>NIS:</strong>
                <input type="text" name="nis" class="form-control" placeholder="NIS">
            </div>
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group">
                <strong>Jenis Kelamin :</strong>
                <div class="wrap-input100 validate-input" data-validate = "Pilih Jenis Kelamin">
                    <select class="input100"style="width: 100%;" name="jk" id="jk">
                            <option value=""disable selected > Pilih jurusan  </option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                     </select>
            </div>
            <br>
            <div class="form-group">
                <strong>Tempat Lahir:</strong>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
            </div>

            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
            </div>
        
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="alamat" placeholder=Alamat></textarea>
            </div>
       
            <div class="form-group">
                <strong>Asal Sekolah:</strong>
                <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
            </div>
       
            <div class="form-group">
                <strong>Kelas:</strong>
                <input type="text" name="kelas" class="form-control" placeholder="Kelas">
            </div>
        
            <div class="form-group"> 
                <strong>Jurusan :</strong>
                <div class="wrap-input100 validate-input" data-validate = "Pilih Jurusan">
                    <select class="input100"style="width: 100%;" name="jurusan" id="jurusan">
                            <option value=""disable selected > Pilih jurusan  </option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Otomatisasi Tata Kelola Perkantoran">Otomatisasi Tata kelola Perkantoran</option>
                            <option value="Perhotelan">Perhotelan</option>
                            <option value="Tataboga">Tataboga</option>
                            <option value="Bisnis Daring Pemasaran">Bisnis Daring Pemasaran</option>
                     </select>
            </div>
            </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button class="btn btn-primary" type="reset">Reset</button>
        </div>
    </div>
   
</form>
@endsection