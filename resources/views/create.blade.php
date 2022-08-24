@extends('layouts.app')

@section('content')
<section class="container">
    <h1>ADD DATA</h1>
    <form action="/store" method="post" >
        @csrf
        <table class="table table-borderless">
            <tr>
                <td>
                    <label class="form-label" for="">nama</label>
                </td>
                <td>
                    <input class="form-control" type="text" name="nama"><br>    
                </td>
            </tr>
           <tr>
                <td>
                    <label class="form-label" for="">nik</label>
                </td>
                <td>
                    <input class="form-control" type="number" name="nik"><br>
                </td>
           </tr>
           <tr>
                <td>
                    <label class="form-label" for="">no kk</label>
                </td>
                <td>
                    <input class="form-control" type="number" name="no_kk"><br>
                </td>
           </tr>
           <tr>
                <td>
                    <label class="form-label" for="">jenis kelamin</label>
                </td>
                <td>
                    <select class="form-select" name="jenis_kelamin" id="">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select><br>
                </td>
           </tr>
           <tr>
                <td>
                    <label class="form-label" for="">alamat</label>
                </td>
                <td>
                    <input class="form-control" type="text" name="alamat"><br>
                </td>
           </tr>
           <tr>
            <td></td>
            <td>
                <input class="btn btn-primary" type="submit" name="submit" value="save">
            </td>
           </tr>
        </table>    
    </form>
</section>
@endsection