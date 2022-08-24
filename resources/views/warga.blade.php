@extends('layouts.app')

@section('content')
<section>
   
    <div class="container">
    <a class="btn btn-primary" href="/create">add warga</a><br>
    <table class="table" >
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>nik</th>
            <th>no kk</th>
            <th>jenis kelamin</th>
            <th>alamat</th>    
            <th>action</th>    
        </tr>
        @foreach ($warga as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->nik}}</td>
            <td>{{$data->no_kk}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->alamat}}</td>
            <td><a class="btn btn-warning" href="/{{$data->id}}">Edit</a>
            <br>
                <form action="/{{$data->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" name="submit" value="delete">
                </form>
                </td>
        </tr>
        @endforeach
    </table>
    </div>
    </section>
@endsection