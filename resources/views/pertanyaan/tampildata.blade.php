@extends ('templatenya.master')
@section ('content')
<h1>Daftar pertanyaan lengkap</h1>
<a class="btn btn-primary " href="/pertanyaan/create">Buat pertanyaan baru</a>
                
                @forelse($pertanyaan as $key => $tanya)
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{{$tanya->judul}}</h6>
                </div>
                <div class="card-body">
                    <?php echo strip_tags($tanya->isi,'<p>'); ?>
                </div>
                <div class="card-footer">
                    {{$tanya->author->name}}
                </div>
              </div>
                <!-- <h1 class="h3 mb-4 text-gray-800">Judul : {{$tanya->judul}}</h1>
                <h1></h1>
                <h2>{{$tanya->isi}}</h2>
                <h2>{{$tanya->author->name}}</h2> -->
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