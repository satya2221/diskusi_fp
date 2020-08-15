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
                <h4>Jawaban</h4>

                @yield('jawaban')
                


@endsection