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
                    <th scope="col">Name</th>
                    <th scope="col">Code</th>
                    <th scope="col">Vendor</th>
                    
                    <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
    @foreach($asset as $ast)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$ast->name}}</td>
            <td>{{$ast->code}}</td>
            <td>{{$ast->vendor}}</td>
          
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