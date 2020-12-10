@extends('layout.v_template')

@section('title','Pengusaha')
@section('content')
    
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengusaha</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($pengusaha as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $data->nama_pengusaha}}</td>
                    <td>{{ $data->alamat_pengusaha}}</td>
                <td><img src="{{ url('foto_pengusaha/'.$data->foto_pengusaha)}}" width="150px"></td>
                    <td>
                    <a href="" class="btn btn-warning btn-md">Edit</a>
                    <a href="/pengusaha/detail/{{ $data->id_pengusaha}}" class="btn btn-primary btn-md">Detail</a>
                    <a href="" class="btn btn-danger btn-md">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection