@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    window.addEventListener('load', function() {
        Swal.fire(
            'Purchase Complete!',
            'Your transaction is successful!',
            'success'
        );
    });
</script>

@endsection

<!-- #{{ $viewData["order"]->getId() }} -->