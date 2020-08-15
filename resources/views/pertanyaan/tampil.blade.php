@extends ('templatenya.master')
@section ('content')

                <h5>Author : {{$pertanyaan->author->name}}</h5>
                <h1 class="h3 mb-4 text-gray-800">{{$pertanyaan->judul}}</h1>
                <h1></h1>
                
                <h2>
                    <?php echo strip_tags($pertanyaan->isi,'<p>'); ?>
                </h2>
                <a href="/pertanyaan" class="btn btn-info btn-sm">Kembali</a>
                <a href="/jawaban/{{$pertanyaan->id}}/jawab" class="btn btn-primary btn-sm">Jawab</a>
                <a href="/jawaban/{{$pertanyaan->id}}" class="btn btn-primary btn-sm">Tampilkan jawaban</a>
                @if($pertanyaan->best_answer != 0)
                <a href="/jawaban/{{$pertanyaan->best_answer}}/{{$pertanyaan->id}}/jawabtop" class="btn btn-primary btn-sm">Tampilkan jawaban top</a>
                @else
                <a href="/jawaban/0/jawabtop" class="btn btn-primary btn-sm">Tampilkan jawaban top</a>
                @endif
                <h4>Jawaban</h4>

                @yield('jawaban')
                


@endsection