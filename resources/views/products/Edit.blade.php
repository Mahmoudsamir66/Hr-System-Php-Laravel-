
@extends('Hr.Layout.master')
@section('content')
    <div class="card-body">
        <div class="px-3">
            <form class="form form-horizontal" action="{{route('product.update',$id->id)}}" method="post">
                @csrf
                <div class="form-body">

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput7">Product Name : </label>
                        <div class="col-md-9">
                            <input type="text" id="timesheetinput5" value="{{$id->name}}" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput7">price : </label>
                        <div class="col-md-9">
                            <input type="number" value="{{$id->price}}" id="timesheetinput5" class="form-control" name="price">
                        </div>
                    </div>



                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Date: </label>
                        <div class="col-md-9">
                            <div class="position-relative has-icon-left">
                                <input type="date" value="{{$id->date}}" id="timesheetinput3" class="form-control" name="date">
                                <div class="form-control-position">
                                    <i class="ft-message-square"></i>
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
