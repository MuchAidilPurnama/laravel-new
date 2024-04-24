@extends('admin.app')
@section('contents')
<head>
    <!-- Other meta tags and CSS links -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Your content here -->
    <br>
    <br>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-md-12">
				<div class="callout callout-info">
					<div class="col-md-12">
						<div class="row">
							<div class="col-sm-6">
								<dl>
									<dt><b class="border-bottom border-primary">Project Name</b></dt>
									<dd>Project Name</dd>
									<dt><b class="border-bottom border-primary">Description</b></dt>
									<dd>Description</dd>
								</dl>
							</div>
							<div class="col-md-6">
								<dl>
									<dt><b class="border-bottom border-primary">Start Date</b></dt>
									<dd>Start Date</dd>
								</dl>
								<dl>
									<dt><b class="border-bottom border-primary">End Date</b></dt>
									<dd>End Date</dd>
								</dl>
								<dl>
									<dt><b class="border-bottom border-primary">Status</b></dt>
									<dd>
										<span class='badge badge-secondary'>Pending</span>
									</dd>
								</dl>
								<dl>
									<dt><b class="border-bottom border-primary">Project Manager</b></dt>
									<dd>
										<div class="d-flex align-items-center mt-1">
											<img class="img-circle img-thumbnail p-0 shadow-sm border-info img-sm mr-3" src="assets/uploads/avatar.jpg" alt="Avatar">
											<b>Project Manager</b>
										</div>
									</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card card-outline card-primary">
					<div class="card-header">
						<span><b>Team Member/s:</b></span>
						<div class="card-tools">
							<!-- <button class="btn btn-primary bg-gradient-primary btn-sm" type="button" id="manage_team">Manage</button> -->
						</div>
					</div>
					<div class="card-body">
						<ul class="users-list clearfix">
							<li>
								<img src="assets/uploads/avatar.jpg" alt="User Image">
								<a class="users-list-name" href="javascript:void(0)">Team Member 1</a>
							</li>
							<li>
								<img src="assets/uploads/avatar.jpg" alt="User Image">
								<a class="users-list-name" href="javascript:void(0)">Team Member 2</a>
							</li>
							<!-- Add more members as needed -->
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card card-outline card-primary">
					<div class="card-header">
						<span><b>Task List:</b></span>
						<div class="card-tools">
							<button class="btn btn-primary bg-gradient-primary btn-sm" type="button" id="new_task"><i class="fa fa-plus"></i> New Task</button>
						</div>
					</div>
					<div class="card-body p-0">
						<div class="table-responsive">
							<table class="table table-condensed m-0 table-hover">
								<!-- Table header and body content -->
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Members Progress/Activity</b>
						<div class="card-tools">
							<button class="btn btn-primary bg-gradient-primary btn-sm" type="button" id="new_productivity"><i class="fa fa-plus"></i> New Productivity</button>
						</div>
					</div>
					<div class="card-body">
						<!-- Progress/activity content -->
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
@endsection