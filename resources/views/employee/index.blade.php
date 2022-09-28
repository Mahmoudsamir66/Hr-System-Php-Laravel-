@extends('Hr.Layout.master')
@section('content')
<section id="configuration">
    <div class="row" style="width:100%">
        <div class="col-12"style="width:100%">
            <div class="card"style="width:100%">
                <div class="card-header"style="width:100%">
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title">Employees Information</h4>
                    </div>
                </div>
                <div class="card-body collapse show"style="width:100%">
                    <div class="card-block card-dashboard"style="width:100%">
{{--                        <p class="card-text">DataTables has most features enabled by default,--}}
{{--                            so all you need to do to use it with your own ables is to call the construction</p>--}}
{{--                        <p>--}}
{{--                            When customizing DataTables for your own usage, you might find that the default position of the feature elements (filter input etc) is not quite to your liking. To address this issue DataTables takes inspiration from the CSS 3 Advanced Layout Module and provides the dom initialization parameter which can be set to indicate where you wish particular features to appear in the DOM--}}
{{--                        </p>--}}
{{--                        <div class="row"><div class="col-sm-12 col-md-3"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show--}}
{{--                                        <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">--}}
{{--                                            <option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">--}}
{{--                                                100</option></select> </label></div></div>--}}
{{--                            <<div class="col-lg-1"></div>--}}
{{--                            <form method="get" class=" dataTables_filter " action="#">--}}
{{--                                <div class="col-sm-12 col-md-3"><div id="DataTables_Table_0_filter"--}}
{{--                                                                     class="dataTables_filter"><label>Search:<input type="search"  name="#"--}}
{{--                                                                                                                    class="form-control form-control-sm" placeholder="Enter Employee Name" aria-controls="DataTables_Table_0" style="width:300px;">  <input type="submit" value="Search" style="width:100px;" /> <span><a class="btn btn-primary">Back To List</a></span>  </label></div></div>--}}
{{--                            </form>--}}
                            <div class="col-lg-1"></div>
                            <div class="col-lg-3"><button id="addRow" class="btn btn-primary mb-2"> <i class="ft-plus"></i>&nbsp;
                                    <a  href="{{route('emp.create')}}">  Add new Employee</a></button></div>
                        </div>
                        <table class="table table-striped table-bordered " style="margin-right:80%;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>SalaryHour</th>
                                <th>End Date</th>
                                <th>check-out date</th>
                                <th>Nationality</th>
                               {{--<th>File</th>--}}
                                <th>NationalId</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $key=> $item)

                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->date}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>{{$item->startTime}} </td>
                                    <td>{{$item->salary}}</td>
                                    <td>{{$item->salaryHour}}</td>
                                    <th>{{$item->endTime}}</th>
                                    <th>{{$item->dateOfContract}}</th>
                                    <th>{{$item->nationality}}</th>
                                     {{--<th>{{$item->file}}</th>--}}
                                    <th>{{$item->nationalId}}</th>
                                </tr>
                                @endforeach
                            <div class="container">
{{--                            {{ $items->render("pagination::default") }}--}}
                            </div>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
