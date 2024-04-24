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
        <div class="card card-outline card-primary">
            <div class="card-body">
                <form action="" id="manage-project">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Name</label>
                                <input type="text" class="form-control form-control-sm" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="status" class="custom-select custom-select-sm">
                                    <option value="0">Pending</option>
                                    <option value="3">On-Hold</option>
                                    <option value="5">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Start Date</label>
                                <input type="date" class="form-control form-control-sm" autocomplete="off" name="start_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">End Date</label>
                                <input type="date" class="form-control form-control-sm" autocomplete="off" name="end_date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Project Manager</label>
                                <select class="form-control form-control-sm select2" name="manager_id">
                                    <option></option>
                                    <!-- Option values here -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Project Team Members</label>
                                <select class="form-control form-control-sm select2" multiple="multiple" name="user_ids[]">
                                    <option></option>
                                    <!-- Option values here -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="" class="control-label">Description</label>
                                <textarea name="description" id="" cols="30" rows="10" class="summernote form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer border-top border-info">
                <div class="d-flex w-100 justify-content-center align-items-center">
                    <button class="btn btn-flat bg-gradient-primary mx-2" form="manage-project">Save</button>
                    <button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=project_list'">Cancel</button>
                </div>
            </div>
        </div>
    </div>
	<br>
	<br>
</body>
@endsection
