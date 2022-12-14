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
                                                <th>Date </th>
                                                <th>day </th>
                                                <th>Attendance date</th>
                                                <th>check-out date</th>
                                                <th>start Extra</th>
                                                <th>end Extra</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($items as $key=> $item)
                                            <tr>
                                                    <td>{{$key+1}}</td>

                                                    <td>{{$item->employes->name}}</td>
                                                    <td>{{$item->date}}</td>
                                                    <td>{{\Illuminate\Support\Carbon::parse($item->date)->format('l')}}</td>

                                                    <td>{{$item->attendance_date}}</td>
                                                    <td>{{$item->check_out_date}}</td>

                                                   <td>{{$item->startHour}}</td>
                                                   <td>{{$item->endHour}}</td>
                                                <th></th>

                                                <th><a type="submit" href="{{route('Attendance.delete',$item->id)}}" class="btn btn-danger mr-1">
                                                        <i class="icon-trash"></i> Delete
                                                    </a></th>

                                            </tr>
                                            @endforeach

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="card-title-wrap bar-success">
                                        <h4 class="card-title">Request A Form</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="px-3">
                                        <form class="form form-horizontal" action="{{route('Attendance.store')}}" method="post">
                                            @csrf
                                            <div class="form-body">

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput7">Employee Name : </label>
                                                    <div class="col-md-9">

                                                        <select id="" name="employee_id" class="form-control" required>
                                                            <option value="">choose Employees</option>
                                                            @foreach($Employees as $key=> $Employee)
                                                            <option value="{{$Employee->id}}"  >{{$Employee->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>




                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Date: </label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="date" value="<?php echo date('Y-m-d'); ?>" id="timesheetinput3" class="form-control" name="date">
                                                            <div class="form-control-position">
                                                                <i class="ft-message-square"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class=" row">
                                                <div class="col-md-12">
                                                    <div class=" row form-group">
                                                        <label class="col-md-3 label-control">Start time: </label>
                                                        <div class="position-relative has-icon-left col-lg-9">
                                                            <input type="time" id="timesheetinput5" class="form-control" name="attendance_date">
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
                                                            <input type="time" id="timesheetinput6" class="form-control" name="check_out_date">
                                                            <div class="form-control-position">
                                                                <i class="ft-clock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="" >
                                                <button type="submit" class="btn btn-danger mr-1">
                                                    <i class="icon-trash"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-success">
                                                    <i class="icon-note"></i> Save
                                                </button>
                                            </div>


                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>


@endsection
