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
                        <div class="card-body">
                            <div class="px-3">
                                <form class="form form-horizontal" action="{{route('salary.create')}}" method="get">

                                    <div class="form-body">






                                    <div class=" row">
                                        <div class="col-md-12">
                                            <div class=" row form-group">
                                                <label class="col-md-3 label-control">Enter Month: </label>
                                                <div class="position-relative has-icon-left col-lg-9">
                                                    <input type="month" id="timesheetinput5" class="form-control" name="month">
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
                                            <i class="icon-note"></i> report
                                        </button>
                                    </div>


                                </form>
                            </div>
                        </div>
@endsection
