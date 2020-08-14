@extends ('templatenya.master')
@section ('content')

                <h5>Author : {{$pertanyaan->author->name}}</h5>
                <h1 class="h3 mb-4 text-gray-800">{{$pertanyaan->judul}}</h1>
                <h1></h1>
                
                <h2>{{$pertanyaan->isi}}</h2>
                <a href="/pertanyaan" class="btn btn-info btn-sm">Kembali</a>

                


@endsection