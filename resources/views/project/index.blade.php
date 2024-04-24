@extends('admin.app')

@section('contents')
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary text-white h-100">
            <div class="card-body d-flex flex-column justify-content-center">
                <div class="mb-4">
                    <div class="float-left mini-stat-img mr-4">
                        <span class="ti-id-badge" style="font-size: 30px"></span>
                    </div>
                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Total <br> Employees</h5> 
                </div>
                <!-- Log on to codeastro.com for more projects! -->
                {{-- <h1 class="font-500 float-right">{{$data[0]}} </h1> --}}
                <h1 class="font-500 float-right"> 10 </h1>
                <span class="ti-user float-left" style="font-size: 71px"></span>
                <!-- <div class="pt-2">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>
                    <p class="text-white-50 mb-0">More info</p>
                </div> -->
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary text-white h-100">
            <div class="card-body d-flex flex-column justify-content-center">
                <div class="mb-4">
                    <div class="float-left mini-stat-img mr-4">
                        <i class=" ti-check-box " style="font-size: 30px"></i>
                    </div>
                    <h5 class="font-16 text-uppercase mt-0 text-white-50">On Time <br> Today</h5>
                    
                     
                </div>
                <!-- Log on to codeastro.com for more projects! -->
                {{-- <h1 class="font-500 float-right">{{$data[1]}} <i class=" text-success ml-2"></i></h1> --}}
                <h1 class="font-500 float-right"> 2<i class=" text-success ml-2"></i></h1>
                    {{-- <span class="peity-donut float-left" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">{{$data[1]}}/{{count($data)}}</span> --}}
                    <span class="peity-donut float-left" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72"></span>
                <!-- <div class="pt-2">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>

                    <p class="text-white-50 mb-0">More info</p>
                </div> -->
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary text-white h-100">
            <div class="card-body d-flex flex-column justify-content-center">
                <div class="mb-4">
                    <div class="float-left mini-stat-img mr-4">
                        <i class="ti-alert" style="font-size: 30px"></i>
                    </div>
                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Late <br> Today</h5>
                    
                     
                </div>
                <!-- Log on to codeastro.com for more projects! -->
                {{-- <h1 class="font-500 float-right">{{$data[2]}}<i class=" text-success ml-2"></i></h1> --}}
                <h1 class="font-500 float-right">5<i class=" text-success ml-2"></i></h1>
                    <span class="peity-donut float-left" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72"></span>
                <!-- <div class="pt-2">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>

                    <p class="text-white-50 mb-0">More info</p>
                </div> -->
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary text-white h-100">
            <div class="card-body d-flex flex-column justify-content-center">
                <div class="mb-4">
                    <div class="float-left mini-stat-img mr-4">
                        <i class="ti-alarm-clock" style="font-size: 30px"></i>
                    </div>
                    <h6  class="font-16 text-uppercase mt-0 text-white-50" >On Time <br> Percentage</h6>
                    
                               
                </div>
                {{-- <h2 class="font-500 float-right">{{$data[3]}}%<i class="text-danger ml-2"></i></h2> --}}
                <h2 class="font-500 float-right">50%<i class="text-danger ml-2"></i></h2>
                {{-- <span class="peity-donut float-left" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">{{$data[3]}}/{{count($data)}}</span> --}}
                <span class="peity-donut float-left" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72"></span>
                <!-- <div class="pt-2">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>

                    <p class="text-white-50 mb-0">More info</p>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<!-- Log on to codeastro.com for more projects! -->


<div class="row">
    <div class="col-xl-9">
        <div class="card">
            <!-- <div class="card-body">
                <h4 class="mt-0 header-title mb-5">Monthly Report</h4>
                
            </div> -->
        </div>
        <!-- end card -->
    </div>

    <div class="col-xl-3">
        <div class="card">
            <!-- <div class="card-body">
                <div>
                    <h4 class="mt-0 header-title mb-4">Sales Analytics</h4>
                </div>
               
              
               </div> -->
        </div>
    </div>
</div>
<!-- end row -->
<br>
<br>
<div class="row">
    <div class="col-md-8">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="card-title"><b>Project List</b></h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th style="width: 30%">Project Name</th>
                                <th style="width: 15%">Due Date</th>
                                <th style="width: 20%">Progress</th>
                                <th style="width: 15%">Status</th>
                                <th style="width: 15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Project ABC</td>
                                <td><small>Due: 2024-04-30</small></td>
                                <td class="project_progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                        </div>
                                    </div>
                                    <small>57% Complete</small>
                                </td>
                                <td><span class="badge badge-secondary">Pending</span></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="">
                                        <i class="fas fa-folder"></i> View
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-layer-group fa-2x text-primary"></i>
                                <span class="ml-2">Total Projects</span>
                            </div>
                            <h3 class="m-0">10</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-tasks fa-2x text-success"></i>
                                <span class="ml-2">Total Tasks</span>
                            </div>
                            <h3 class="m-0">20</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


@endsection