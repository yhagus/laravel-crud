@extends('layouts.master')
@section('content')

	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
  		{{session('sukses')}}
	</div>
	@endif
	<div class="container">
        <h1>Edit data siswa</h1>
      <div class="col-12">
		    <form action="/siswa/{{$siswa->id}}/update" method="POST">
        {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Nama Depan</label>
            <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $siswa->nama_depan }}">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Nama Belakang</label>
            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $siswa->nama_belakang }}" >
            </div>
            <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                <option value="L" @if($siswa->jenis_kelamin == "L") selected @endif>L</option>
                <option value="P" @if($siswa->jenis_kelamin == "P") selected @endif>P</option>
            </select>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Agama</label>
            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $siswa->agama }}" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $siswa->alamat }}" >
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
		
	</div>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        
			    </div>
			  </div>
			</div>

	@endsection
