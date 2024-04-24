@extends('admin.app')

@section('contents')

<!-- Info boxes -->
<div class="col-12">
    <div class="card">
        <div class="card-body">
            Selamat Datang {{ auth()->user()->name }}!
        </div>
    </div>
</div>
<hr>
        @include('project.index')
@endsection

