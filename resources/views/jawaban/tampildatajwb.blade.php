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

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Jawaban Top</label>
                            </div>

                            @else
                                    <a></a>

                            @endif

                            @if($jawab->author->id === Auth::user()->id)

                            <a href="/komen_jawab" class="btn btn-info btn-sm">Komentar</a>
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


@endsection            