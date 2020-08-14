@extends ('templatenya.master')
@section ('content')

            <form role="form" action="/pertanyaan" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputPertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Enter pertanyaan">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi Pertanyaan</label>
                    <input type="text" class="form-control" name="isi" id="isi" placeholder="Enter isi pertanyaan">
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">User Id</label>
                    <input type="hidden" class="form-control" name="user_id" id="user_id" placeholder={{Auth::user()->id}} value={{Auth::user()->id}}>
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div> 

                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


@endsection