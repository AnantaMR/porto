@extends('dashboard.layout')

@section('konten')
    <div class="div pb-3">
        <a href="{{route('halaman.index')}}" class="btn btn-secondary">back</a>
    </div>

    <form action="{{route('halaman.store')}}" method="POST" >
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input
                type="text"
                class="form-control"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="judul" value="{{Session ::get ('judul')}}"
            >
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" rows="5" name ="isi">{{ Session:: get('isi')}} </textarea>
        </div>
        <button class="btn btn-primary " name="simpan" type="submit">SIMPAN</button>

    </form>


@endsection