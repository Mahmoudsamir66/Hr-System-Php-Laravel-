@extends('Hr.Layout.master')
@section('content')
<form action="{{route('product.save')}}" method="get">

    <div class="form-group row">
        <label class="col-md-3 label-control" for="projectinput9">Date from: </label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left">
                <input type="date" value="<?php echo date('Y-m-d'); ?>" id="timesheetinput3" class="form-control" name="datefrom">
                <div class="form-control-position">
                    <i class="ft-message-square"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-3 label-control" for="projectinput9">Date to: </label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left">
                <input type="date" value="<?php echo date('Y-m-d'); ?>" id="timesheetinput3" class="form-control" name="dateto">
                <div class="form-control-position">
                    <i class="ft-message-square"></i>
                </div>
            </div>
        </div>
    </div>

    <button  type="submit" style="margin-left: 90%;" class="btn btn-success">
        <i class="icon-note"></i> Search
    </button>
</form>
@isset($Products)
    <table class="table table-striped table-bordered zero-configuration mt-40">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Date </th>
            <th>price </th>
            <th>Edit </th>
            <th>delete </th>
        </tr>
        </thead>
        <tbody>
        @foreach($Products as $key=> $Product)
            <tr>
                <td>{{$key+1}}</td>

                <td>{{$Product->name}}</td>
                <td>{{$Product->date}}</td>
                <td>{{$Product->price}}</td>
                <td><a class="btn btn-primary" href="{{route('product.Edit',$Product->id)}}">Edit</a></td>

                <td><a class="btn btn-danger" href="{{route('product.delete',$Product->id)}}">Delete</a></td>



            </tr>
        @endforeach

        </tbody>

    </table>
@endisset

@endsection
