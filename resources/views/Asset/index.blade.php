@extends ('layout.main')

@section('title', 'Data Karyawan')

@section('container')

    <div class="container">
      <div class="row">
        <div class="col-10"> 
                <h1>Data Reservasi Gedung</h1>
                
                <table class="table">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah Tamu</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
    @foreach($reservasi as $rsv)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$rsv->nama}}</td>
            <td>{{$rsv->tamu}}</td>
            <td>{{$rsv->lokasi}}</td>
          
            <td>
                <a href="" class="badge badge-success">edit</a>
                <a href="" class="badge badge-danger">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
                </table>
                            

            </div>
        </div>
    </div>
@endsection