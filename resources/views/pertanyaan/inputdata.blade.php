@extends ('templatenya.master')
@section ('content')

            <form role="form" action="/pertanyaan" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputPertanyaan">Judul Pertanyaan</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Enter pertanyaan">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi Pertanyaan</label>
                    <textarea class="form-control" id="tanya" name="isi" rows="3" placeholder="Enter ..." required>
                        {{old('isi','')}}
                    </textarea>
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                   <div class="form-group">
                    <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                    <!-- @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror -->
                  </div> 

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