@extends('layout.main')

@section('content')
      
    <div class="col-md-10 p-5 pt-2 mt-3"> 
        <h4><i class="fas fa-paste mr-2"></i><b> {{ $complaint->user->name }} </b></h4><hr>
        <p>{{ \Carbon\Carbon::parse($complaint->created_at)->format('D, d M Y') }}</p>
        <div class="text-center mb-3">
            <img src="{{ asset('img/report/'.$complaint->picture) }}" alt="{{ $complaint->picture }}">   
        </div>
        <p>{{ $complaint->report }}</p>
        <a href="{{ route('veriy.pengaduan', $complaint->id) }}" class="btn btn-info px-5">Verifikasi</a>
        <a href="{{ route('delete.complaint', $complaint->id) }}" class="btn btn-danger px-5">Hapus</a>
    </div>  
@endsection