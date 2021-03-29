@extends('siswas.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Peserta Didik Baru SMK WIKRAMA BOGOR</h2>
                <a class="btn btn-success" href="{{ route('siswas.create') }}">Tambah Siswa</a>

            <form action="{{route('siswas.cetak')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-success shadow">Print</button>
                </form>
            </div>
        </div>
    </div>
   <br>
   <br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th width="280px">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($siswas as $siswa)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->jk }}</td>
            <td>{{ $siswa->tempat_lahir }}</td>
            <td>{{ $siswa->tanggal_lahir }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->asal_sekolah }}</td>
            <td>{{ $siswa->kelas }}</td>
            <td>{{ $siswa->jurusan }}</td>
            <td>
                <form action="{{ route('siswas.destroy',$siswa->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('siswas.edit',$siswa->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>


                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
  
    {!! $siswas->links() !!}
      
@endsection