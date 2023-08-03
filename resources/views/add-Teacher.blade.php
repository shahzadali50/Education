@extends('layouts.pannel') @section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <h3 class="box-title text-info pl-4 mt-3">Add Teacher</h3>
            <div class="card-body">
                <form class="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Father Name</label>
                                <input type="text" class="form-control" placeholder="Enter Father Name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Enter CIN</label>
                                <input type="number" class="form-control" placeholder="Enter Father Name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Qualification</label>
                                <input type="text" class="form-control" placeholder="Enter Qualification " />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" placeholder="Enter Address " />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email " />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control" placeholder="Enter Email " />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">WhatsApp Number</label>
                                <input type="number" class="form-control" placeholder="WhatsApp" />
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="reset" class="btn btn-warning me-1">
                            <i class="ti-trash"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="ti-save-alt"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection