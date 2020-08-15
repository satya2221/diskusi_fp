@extends ('templatenya.master')
@section ('content')            

    <form role="form" action="/jawaban/{{$jawaban->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="inputjawaban">Edit Jawaban Anda</label>
        <input type="text" class="form-control" id="inputjawaban" name="isi">
        <input type="text" class="form-control" id="inputjawaban" name="user_id" placeholder="{{$jawaban->user_id}} " value="{{$jawaban->user_id}}">
        <input type="text" class="form-control" id="inputjawaban" name="id_pertanyaan" placeholder="{{$jawaban->id_pertanyaan}}" value="{{$jawaban->id_pertanyaan}}">
    </div>
    <a href="/jawaban/{{$jawaban->id}}" class="btn btn-primary">Kembali</a>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    


@endsection
          