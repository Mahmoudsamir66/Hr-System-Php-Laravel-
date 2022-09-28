@extends('Hr.Layout.master')
@section('content')


    <section id="configuration">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title">Attendance and departure request</h4>
                        </div>
                    </div>
                    <div class="card-body collapse show">
                        <div class="card-block card-dashboard">
                            <p class="card-text">DataTables has most features enabled by default,
                                so all you need to do to use it with your own ables is to call the construction</p>

                            <div class="row"><div class="col-sm-12 col-md-3"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show Date
                                            <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                                <option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">
                                                    100</option></select> </label></div></div>
                                <div class="col-lg-1"></div>
                                <div class="col-sm-12 col-md-5"><div id="DataTables_Table_0_filter"
                                                                     class="dataTables_filter"><label>Employee Name :<input type="search"
                                                                                                                            class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div>


                            </div>
                            <table class="table table-striped table-bordered zero-configuration mt-40">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>start time</th>
                                    <th>end time</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Atts as $key=> $item)
                                    <tr>
                                        <td>{{$key+1}}</td>



                                        <td>{{$item->name}}</td>

                                        <td>{{$item->start_time}}</td>

                                        <td>{{$item->end_time}}</td>
                                        <th></th>

                                        <th><a type="submit" href="{{route('companyAtts.delete',$item->id)}}" class="btn btn-danger mr-1">
                                                <i class="icon-trash"></i> Delete
                                            </a></th>

                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
                        </div>
                        <div class="card-body">
                            <div class="px-3">
                                <form class="form form-horizontal" action="{{route('companyAtts.store')}}" method="post">
                                    @csrf
                                    <div class="form-body">

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput7">Days Name : </label>
                                            <div class="col-md-9">

                                                <select id="" name="name" class="form-control" required>
                                                    <option value="">choose day</option>
                                                        <option value="Saturday">Saturday</option>
                                                        <option value="Sunday">Sunday</option>
                                                        <option value="Monday">Monday</option>
                                                        <option value="Tuesday">Tuesday</option>
                                                        <option value="Wednesday">Wednesday</option>
                                                        <option value="Thursday">Thursday</option>
                                                        <option value="Friday">Friday</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>


                                    <div class=" row">
                                        <div class="col-md-12">
                                            <div class=" row form-group">
                                                <label class="col-md-3 label-control">Start time: </label>
                                                <div class="position-relative has-icon-left col-lg-9">
                                                    <input type="time" id="timesheetinput5" class="form-control" name="start_time">
                                                    <div class="form-control-position">
                                                        <i class="ft-clock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class=" row form-group">
                                                <label class="col-md-3 label-control">End time: </label>
                                                <div class="position-relative has-icon-left col-lg-9">
                                                    <input type="time" id="timesheetinput6" class="form-control" name="end_time">
                                                    <div class="form-control-position">
                                                        <i class="ft-clock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="" >
                                        <button type="reset" class="btn btn-danger mr-1">
                                            <i class="icon-trash"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-success">
                                            <i class="icon-note"></i> Save
                                        </button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    @endsection
