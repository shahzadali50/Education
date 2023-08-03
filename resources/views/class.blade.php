@extends('layouts.pannel')
@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="box">
            <form class="form">
                <div class="box-body">
                    <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Class Management</h4>
                    <hr class="my-15">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Class Name</label>
                                <input type="text" class="form-control" placeholder="Class Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select class="form-select form-control">

                                    <option>Active</option>
                                    <option>InActive</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="button" class="btn btn-warning me-1">
                        <i class="ti-trash"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ti-save-alt"></i> Save
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="box">
            <table class="table table-hover">
                <div class="box-body">
                    <h4 class="box-title text-info mb-0">Table</h4>
                   
                    <thead>
                        <tr>
    
                            <th scope="col">Class Name</th>
                            <th scope="col">Action</th>
    
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
    
                            <td>ICS</td>
                            <td><a href="#" class="mr-3"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a> <a href=""><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a></td>
    
                        </tr>
    
                    </tbody>

                </div>
            </table>
        </div>
    </div>

</div>

@endsection
