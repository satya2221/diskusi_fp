@extends ('pertanyaan.tampil')

@section ('jawaban')
                @if($jawaban)
                <h1 class="h3 mb-4 text-gray-800"></h1>
                
                
                

                
                <div class="card shadow mb-4">
                <p class="ml-4 mt-2">Author : {{$jawaban->author->name}}</p>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <?php echo strip_tags($jawaban->isi,'<p>'); ?></h6>

                    </div>
                
                </div>
                @else
                <?php redirect('/');?>
                
                @endif
                @yield('komentar');


@endsection            