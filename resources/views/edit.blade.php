@extends('layouts.app')

@section('content')
<section class="container">


    <h1>EDIT DATA</h1>
    <form action="/{{$warga->id}}" method="post" >
        @method('put')
        @csrf
        <table class="table table-borderless">
            <tr>
                <td>
                    <label class="form-label" for="">nama</label>
                </td>
                <td>
                    <input class="form-control" type="text" name="nama" value="{{$warga->nama}}">
                </td>
            </tr>
           <tr>
                <td>
                    <label class="form-label" for="">nik</label>
                </td>
                <td>
                    <input class="form-control" type="number" name="nik" value="{{$warga->nik}}">
                </td>
           </tr>
           <tr>
                <td>
                    <label class="form-label" for="">no kk</label>
                </td>
                <td>
                    <input class="form-control" type="number" name="no_kk" value="{{$warga->no_kk}}">
                </td>
           </tr>
           <tr>
                <td>
                    <label class="form-label" for="">jenis kelamin</label>
                </td>
                <td>
                    <select class="form-select" name="jenis_kelamin" id="">
                      
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L"  @if ($warga->jenis_kelamin == 'L') selected @endif >Laki-laki</option>
                        <option value="P" @if ($warga->jenis_kelamin == 'P') selected @endif >Perempuan</option>
                    </select>
                </td>
           </tr>
           <tr>
                <td>
                    <label class="form-label" for="">alamat</label>
                </td>
                <td>
                    <input class="form-control" type="text" name="alamat" value="{{$warga->alamat}}">
                </td>
           </tr>
           <tr>
            <td></td>
            <td>
                <input class="btn btn-warning" type="submit" name="submit" value="update">
            </td>
           </tr>
        </table>    
    </form>
    </section>
@endsection