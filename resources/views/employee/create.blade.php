@extends('Hr.Layout.master');
@section('content')

<section id="horizontal-form-layouts">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="content-header">Add Employees Form</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title" id="horz-layout-basic">Employee Information</h4>
                    </div>
                    <p class="mb-0">This is the basic horizontal form with labels on left and cost estimation form is the default position.</p>
                </div>
                <div class="card-body">
                    <div class="px-3">

                            <form class="form-horizontal" action="{{ route('emp.store') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                            <div class="form-body">
                                <h4 class="form-section">
                                    <i class="icon-user"></i> Personal Details</h4>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput1">Name: </label>
                                    <div class="col-md-9">
                                        <input name="name" type="text" id="projectinput1" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput2">Phone: </label>
                                    <div class="col-md-9">
                                        <input type="text" name="phone" id="projectinput2" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput2">Email: </label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" id="projectinput2" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput2">Date: </label>
                                    <div class="col-md-9">
                                        <input type="date" name="date" id="projectinput2" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput2">Address: </label>
                                    <div class="col-md-9">
                                        <input type="text" name="address" id="projectinput2" class="form-control" >
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput4">Type: </label>
                                    <div class="col-md-9">
                                        <input type="text" name="type" id="projectinput4" class="form-control"  >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput4">Start time: </label>
                                    <div class="col-md-9">
                                        <input type="time" name="startTime" id="projectinput4" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput4">Salary: </label>
                                    <div class="col-md-9">
                                        <input type="text" name="salary" id="projectinput4" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput4">End time: </label>
                                    <div class="col-md-9">
                                        <input type="time" name="endTime" id="projectinput4" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput4">date of contract: </label>
                                    <div class="col-md-9">
                                        <input type="date" name="dateOfContract" id="projectinput4" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput4">Nationality: </label>
                                    <div class="col-md-9">
                                        <input type="text" name="nationality" id="projectinput4" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput4">FileName: </label>
                                    <div class="col-md-9">
                                        <input type="file" name="file"  id="projectinput4" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput4">National ID: </label>
                                    <div class="col-md-9">
                                        <input type="text" name="nationalId" id="projectinput4" class="form-control" name="NationalId">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <button type="submit" class="btn btn-primary">Create</button>

                                </div>
                            </div>


                        </form>
                        <div>
                            <a href="{{route('emp.index')}}" class="btn btn-danger" >Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</section>
@endsection
