@extends('layouts.master')
@section('content')
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
  		{{session('sukses')}}
	</div>
	@endif
	<div class="waveWrapper waveAnimation" style="z-index:0;">
	<div class="waveWrapperInner bgTop">
		<div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
	</div>
	<div class="waveWrapperInner bgMiddle">
		<div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
	</div>
	<div class="waveWrapperInner bgBottom">
		<div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
	</div>
	</div>
	<div class="container" style="z-index=1">
	<br>
		<div class="row" style="color:#fff;">
			<div class="col-6">
				<h1>Data Siswa</h1>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
				Tambah Data Siswa
				</button>

			</div>	
			<div class="table-responsive" style="z-index:2;">
			<table class="table table-hover table-light">
				<thead class="thead-dark">
				<tr>
					<th class="">Nama Depan</th>
					<th class="">Nama Belakang</th>
					<th class="">Jenis Kelamin</th>
					<th class="">Agama</th>
					<th class="">Alamat</th>
					<th class="">Aksi</th>
				</tr>
				</thead>
				<tbody class="table-striped">
				@foreach($data_siswa as $siswa)
				<tr>
					<td>{{ $siswa->nama_depan }}</td>
					<td>{{ $siswa->nama_belakang }}</td>
					<td>{{ $siswa->jenis_kelamin }}</td>
					<td>{{ $siswa->agama }}</td>
					<td>{{ $siswa->alamat }}</td>
					<td>
						<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">edit</a>
						<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm">delete</a>
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
			</div>		
		
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
			        <form action="/siswa/create" method="POST">
			      	{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Depan</label>
					    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Belakang</label>
					    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					    	<option value="L">L</option>
					    	<option value="P">P</option>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Alamat</label>
					    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
					  </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary" role="progressbar">Submit</button>
			      </div>
					</form>
			    </div>
			  </div>
			</div>

	@endsection()
