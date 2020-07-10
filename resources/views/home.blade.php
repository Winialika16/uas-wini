@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-info">
            <div class="card">
                <div class="card-header bg-success">Studio Musik Sistem Informasi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat Menikmati Musiknya
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
