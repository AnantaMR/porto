
@extends('dashboard.layout')

@section('konten')
  
    <form action="{{route('settings.update')}}" method="POST" >
        @csrf

        <div class="form-group row">
            <label class="col-sm-2"> About </label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_pageabout">
                    <option value="">--choose--</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}"{{get_meta_value('_pageabout') == $item->id?'selected':''}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2"> Award </label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_pageaward">
                    <option value="">--choose--</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}"{{get_meta_value('_pageaward') == $item->id?'selected':''}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2"> Interest </label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_pageinterest">
                    <option value="">--choose--</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}"{{get_meta_value('_pageinterest') == $item->id?'selected':''}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary " name="simpan" type="submit">SIMPAN</button>

    </form>


@endsection
