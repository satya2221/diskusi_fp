@extends('templatenya.master')
@push('css')
    <link href="{{asset('css/mainMenu.css')}}" rel="stylesheet">
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
                    <h1>Pertanyaan populer</h1>
                </div>
            </div>
        </div>
    </div>
@endsection