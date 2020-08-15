@extends ('templatenya.master')
@section ('content')               
    <form role="form" action="/jawaban" method="POST">
    @csrf
    <div class="form-group">
        <label for="inputjawaban">Tulis Jawaban Anda</label>
        <input type="text" class="form-control" id="inputjawaban" name="isi">
        <input type="text" class="form-control" id="inputjawaban" name="user_id" placeholder="{{Auth::user()->id}} " value="{{Auth::user()->id}}">
        <input type="text" class="form-control" id="inputjawaban" name="id_pertanyaan" placeholder="{{$pertanyaan->id}}" value="{{$pertanyaan->id}}">
    </div>
    <a href="/pertanyaan/{{$pertanyaan->id}}" class="btn btn-primary">Kembali</a>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    


@endsection
          