@extends('templatenya.master')
@push('css')
    <link href="{{asset('css/mainMenu.css')}}" rel="stylesheet">
    <?php use \App\ModelPertanyaan;?>
@endpush
@section('content')
    <div class="container-bg" >
        <div class="row">
            <div class="col-lg-12">
                <div class="isi my-2">
                    <h1>Diskusi<sup>2</sup></h1>
                    <h3>Tempat kamu diskusiin bingung mu</h3>
                    <hr>
                    <a href="/pertanyaan/create"><button type="button" class="btn btn-primary">Mulai bertanya</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-populer">
        <div class="row">
            <div class="col-12">
                <div class="isi-tanya my-2">
                    <h1>Pertanyaan Terbaru</h1>
                    <?php 
                        $populer = ModelPertanyaan::orderBy('created_at', 'desc')
                                            ->limit(3)
                                            ->get();
                    ?>
                    @forelse($populer as $key => $value)
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><a href="/pertanyaan/{{$value->id}}">{{$value->judul}}</a></h6>
                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-11">
                                        <?php echo strip_tags($value->isi,'<p>');?>
                                    </div>
                                    <div class="col-1">
                                        <i class="fas fa-sort-up fa-5x"></i>
                                        Angka
                                        <i class="fas fa-sort-up fa-5x fa-rotate-180"></i>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            By, {{$value->author->name}} at {{$value->created_at}}
                            <span class="float-right">
                                <form action="/pertanyaan/{{$value->id}}" method="post" class="my-2">
                                <a href="/pertanyaan/{{$value->id}}" class="btn btn-info btn-sm">Show</a>
                                <?php $penulis = $value->author->name;  ?>
                                @auth
                                    @if($penulis == Auth::user()->name)
                                        <a href="/pertanyaan/{{$value->id}}/edit" class="btn btn-primary btn-sm ">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="delete" class="btn btn-danger btn-lg btn-sm">
                                        </form>
                                    @else
                                        </form>
                                    @endif
                                @endauth   
                            </span>
                        </div>
                    </div>
                    @empty
                        <h1>Belum ada pertanyaan yuk buat</h1>
                        <a href="/pertanyaan/create" class="btn btn-primary">Mulai bertanya</a>
                    @endforelse
                    <div class="lainnya" style = "text-align:center;">
                        <a href="/pertanyaan"class="btn btn-primary">Lihat pertanyaan lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection