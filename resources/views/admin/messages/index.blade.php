@extends('layouts.admin')
@section('title', 'Pesan Masuk')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">
        <i class="bi bi-envelope-fill text-success me-2"></i>Pesan Masuk
    </h4>
    <span class="badge bg-success">{{ $messages->count() }} pesan</span>
</div>
@if($messages->isEmpty())
<div class="card border-0 shadow-sm">
    <div class="card-body text-center py-5 text-muted">
        <i class="bi bi-inbox fs-1"></i>
        <p class="mt-2">Belum ada pesan masuk.</p>
    </div>
</div>
@else
<div class="row g-3">
    @foreach($messages as $msg)
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h6 class="fw-bold mb-1">{{ $msg->subject }}</h6>
                        <div class="text-muted small mb-2">
                            <i class="bi bi-person-fill me-1"></i>{{ $msg->user->name }}
                            &nbsp;·&nbsp;

                            <i class="bi bi-envelope me-1"></i>{{ $msg->user->email }}
                        </div>
                    </div>

                    <small class="text-muted">{{ $msg->created_at->diffForHumans() }}</small>
                </div>

                <p class="text-muted mb-0 border-top pt-2 mt-1">{{ $msg->body }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection