@extends ('pertanyaan.tampil')

@section ('jawaban')
                
                <h1 class="h3 mb-4 text-gray-800"></h1>
                

                

                @forelse($jawaban as $key => $jawab)
                <div class="card shadow mb-4">
                <p class="ml-4 mt-2">Author : {{$jawab->author->name}}</p>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <?php echo strip_tags($jawab->isi,'<p>'); ?></h6>
                            @if($pertanyaan->author->id === Auth::user()->id)
                            
                            <form role="form" action="/pertanyaan/{{$pertanyaan->id}}/best" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group form-check">
                                    <input type="submit" class="btn btn-info btn-sm" placeholder="o" id="exampleCheck1" value="{{$jawab->id}}" name="best_answer">
                                    <label class="form-check-label" for="exampleCheck1">Jawaban Top</label>
                                </div>
                            </form>

                            @else
                                    <a></a>

                            @endif

                            <a href="/komen_jawab/{{$jawab->id}}" class="btn btn-info btn-sm">Komentar</a>

                            @if($jawab->author->id === Auth::user()->id)

                            
                            <a href="/jawaban/{{$jawab->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                            <form action="/jawaban/{{$jawab->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                                @else
                                    <a></a>
                            @endif
                    </div>
                
                </div>
                @empty
                <p>Belum ada jawaban</p>
                @endforelse

                @yield('komentar');


@endsection            