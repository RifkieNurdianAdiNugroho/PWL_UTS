@extends('barang.layout')
@section('content')
<div class="containermt-5">
<div class="row justify-content-center align-items-center">
<div class="card"style="width:24rem;">
<div class="card-header">Edit barang</div>
<div class="card-body">
@if($errors->any())
<div class="alert alert-danger">
<strong>Whoops!
</strong>Thereweresomeproblemswithyourinput.<br><br>
<ul>@foreach($errors->all() as $error)
	<li>{{$error}}</li>
@endforeach
</ul></div>
@endif
<form method="post"action="{{route('barang.update',['barang'=>$barang->id_barang])}}"id="myForm">
@csrf
@method('PUT')
<div class="form-group">
	<label for="kode barang">Kode barang</label>
<input type="text"name="kode_barang"class="form-control"id="kode_barnag"value="{{$barang->kode_barang}}"aria-describedby="kode_barang"></div>
<div class="form-group">
<label for="nama barang">Nama barang</label>
<input type="text"name="nama_barang"class="form-control"id="nama_barang"value="{{$barang->nama_barang}}"aria-describedby="nama_barang">
</div>
<div class="form-group">
<labelfor="kategori barang">kategori barang</label>
<input type="kategori_barang"name="kategori_barang"class="form-control"id="kategori_barang"value="{{$barang->kategori_barang}}"aria-describedby="kategori_barang"></div>
<div class="form-group">
	<labelfor="harga">harga</label>
<input type="harga"name="harga"class="form-control"id="harga"value="{{$barang->harga}}"aria-describedby="harga">
</div>
<div class="form-group">
	<label for="qty">qty</label>
<input type="qty"name="qty"class="form-control"id="qty"value="{{$barang->qty}}"aria-describedby="qty">
</div>

<button type="submit"class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection
