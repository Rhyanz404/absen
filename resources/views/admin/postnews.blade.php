@extends('layouts.admin')
@section('title', 'Buat Pengumuman')
@section('konten')
		<div class="col-md-9">
            <form>
            	<label for="Judul">Judul</label>
            	<input type="text" class="form-control" placeholder="Judul" name="Judul">
				<label for="isi">Isi</label>
				<textarea class="form-control" rows="3" name="isi"></textarea>
				<input type="submit" value="POST">
            </form>
        </div>
@endsection