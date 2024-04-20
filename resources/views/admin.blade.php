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

<div class="row">
    <div class="col-md-8">
        <div class="card card-outline card-success">
            <div class="card-header">
                <b>Project Progress</b>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table m-0 table-hover">
                        <colgroup>
                            <col width="5%">
                            <col width="30%">
                            <col width="35%">
                            <col width="15%">
                            <col width="15%">
                        </colgroup>
                        <thead>
                            <th>#</th>
                            <th>Project</th>
                            <th>Progress</th>
                            <th>Status</th>
                            <th></th>
                        </thead>
                        <tbody>
                          {{-- @foreach($projects as $project) --}}
                            <tr>
                                {{-- <td>{{ $project->id }}</td> --}}
                                <td>1</td>
                                <td>
                                    {{-- <a>{{ $project->name }}</a> --}}
                                    <a>name</a>
                                    <br>
                                    {{-- <small>Due: Due: {{ $project->due_date }}</small> --}}
                                    <small>Due: Due: 2024</small>
                                </td>
                                <td class="project_progress">
                                  <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuemin="0" aria-valuemax="100" >
                                      {{-- <div class="progress-bar bg-green" role="progressbar" aria-valuenow="{{ $project->progress }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $project->progress }}%"> --}}
                                      </div>
                                  </div>
                                  {{-- <small>{{ $project->progress }}% Complete</small> --}}
                                  <small>% Complete</small>
                                </td>
                                <td class="project-state">
                                    {{-- <span class="badge badge-info">{{ $project->status }}</span> --}}
                                </td>
                                <td>
                                    {{-- <a class="btn btn-primary btn-sm" href="{{ route('projects.show', $project->id) }}">
                                        <i class="fas fa-folder"></i> View
                                    </a> --}}
                                    <a class="btn btn-primary btn-sm" >
                                      <i class="fas fa-folder"></i> View
                                  </a>
                                </td>
                            </tr>
                            <!-- Tambahkan baris lain sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
      <div class="row">
          <div class="col-12 col-sm-6 col-md-12">
              <div class="card mb-3">
                  <div class="card-body">
                      <p class="card-text">5</p>
                      <h5 class="card-title">Total Projects</h5>
                      <i class="fas fa-layer-group fa-2x text-primary"></i>
                  </div>
              </div> 
          </div>
          <div class="col-12 col-sm-6 col-md-12">
              <div class="card mb-3">
                  <div class="card-body">
                      <h5 class="card-title">Total Tasks</h5>
                      <p class="card-text">10</p>
                      <i class="fas fa-tasks fa-2x text-primary flex flex-end"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
</div>
@endsection
