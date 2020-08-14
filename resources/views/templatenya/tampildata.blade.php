@extends ('templatenya.master')
@section ('content')

<a class="btn btn-primary " href="/pertanyaan/create">Create New </a>
                
                @forelse($pertanyaan as $key => $tanya)
                
                <h1 class="h3 mb-4 text-gray-800">Judul : {{$tanya->judul}}</h1>
                <h1></h1>
                <h2>{{$tanya->isi}}</h2>
                <a href="/pertanyaan/{{$tanya->id}}" class="btn btn-info btn-sm">Show</a>
                <a href="/pertanyaan/{{$tanya->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                <form action="/pertanyaan/{{$tanya->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-lg">
                        </form>

                @empty
                <p>empty</p>
                @endforelse


@endsection