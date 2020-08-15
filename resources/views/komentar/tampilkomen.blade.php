@extends ('jawaban.tampildatajwb')

@section ('komentar')

<h1 class="h3 mb-4 text-gray-800"></h1>
                
                
                <div class="card shadow mb-4">
                <p class="ml-4 mt-2">Author : </p>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            
                            

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Jawaban Top</label>
                            </div>

                            
                                    <a></a>

                            

                            

                            <a href="/komen_jawab" class="btn btn-info btn-sm">Komentar</a>
                            <a href="/jawaban//edit" class="btn btn-info btn-sm">Edit</a>
                            <form action="/jawaban/" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                                
                                    <a></a>
                            
                    </div>
                
                </div>
                
                <p>Belum ada jawaban</p>
                



@endsection            