@extends('Hr.Layout.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title">Salary report</h4>
                    </div>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                        <p class="card-text">DataTables has most features enabled by default,
                            so all you need to do to use it with your own ables is to call the construction</p>

                        <div class="row"><div class="col-sm-12 col-md-3"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Year
                                        <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                            <option value="10">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="2000">
                                                2000</option></select> </label></div></div>


                            <div class="col-lg-3"><button id="addRow" class="btn btn-primary mb-2"> <i class="ft-search"></i>&nbsp;
                                    <a>  Search Employee</a></button></div>
                        </div>

                        <table class="table table-striped table-bordered zero-configuration mt-40">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Employee Name</th>
                                <th>Phone</th>
                                <th>Salary</th>

                                <th>attendance Day</th>
                                <th>absence Day</th>
                                <th>invoice</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($attends as $key=> $attend )
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$attend->employes->name}}</td>
                                    <td>{{$attend->employes->phone}}</td>
                                    <td>{{$attend->employes->salary}}</td>
                                    <td>{{\App\Models\Attendances::where('employee_id',$attend->employee_id)->whereYear('created_at', $year)->whereMonth('created_at', $month)->count()}}</td>
                                    <td>{{ \Carbon\Carbon::now()->month($month)->daysInMonth - \App\Models\Attendances::where('employee_id',$attend->employee_id)->whereYear('created_at', $year)->whereMonth('created_at', $month)->count()}}</td>

                                    <td><a href="{{route('salary.invoice',['employee_id'=>$attend->employee_id,'year'=>$year,'month'=>$month])}}">invoice</a></td>




                                </tr>

                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
