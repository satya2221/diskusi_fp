@extends ('templatenya.master')
@section ('content')

<form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputPertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="{{old('judul',$pertanyaan->judul)}}">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi Pertanyaan</label>
                    <textarea class="form-control" id="tanya" name="isi" rows="3" placeholder="Enter ..." required>
                        {{old('isi',$pertanyaan->isi)}}
                    </textarea>
                    <!-- <input type="text" class="form-control" name="isi" id="isi" value="{{old('isi',$pertanyaan->isi)}}"> -->
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
              </form>
            </div>
@endsection
@push('scriptnya')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'isi' );
    </script>
@endpush