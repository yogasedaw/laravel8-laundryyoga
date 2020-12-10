@extends('layout.v_template')

@section('title','Detail Pengusaha')

@section('content')
    
<tr>
    <a href="/pengusaha" class="btn btn-success btn-lg">Kembali</a>
</tr>

<table class="table">

        <tr>
            <th width="200px">Nama Pengusaha</th>
            <th width="30px">:</th>
            <th>{{$pengusaha->nama_pengusaha}}</th>
        </tr>
        <tr>
            <th width="200px">Alamat Pengusaha</th>
            <th width="30px">:</th>
            <th>{{$pengusaha->alamat_pengusaha}}</th>
        </tr>
        <tr>
            <th width="200px">Foto Pengusaha</th>
            <th width="30px">:</th>
            <th><img src="{{ url('foto_pengusaha/'.$pengusaha->foto_pengusaha)}}" width="200px" alt=""></th>
        </tr>

</table>

<h1>Laporan Keuangan</h1>
<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod, tenetur aperiam obcaecati veniam ab quo eius commodi cum nulla corporis nemo ratione pariatur quibusdam? Odio facilis nesciunt accusantium in.</h4>


@endsection