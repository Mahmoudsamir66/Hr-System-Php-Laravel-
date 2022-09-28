
@extends('Hr.Layout.master')
@section('content')
<div class="card-body">
    <div class="px-3">
        <form class="form form-horizontal" action="{{route('product.store')}}" method="post">
            @csrf
            <div class="form-body">

                <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput7">Product Name : </label>
                    <div class="col-md-9">
                        <input type="text" id="timesheetinput5" class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput7">price : </label>
                    <div class="col-md-9">
                        <input type="number" id="timesheetinput5" class="form-control" name="price">
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

<table class="table table-striped table-bordered zero-configuration mt-40">
    <thead>
    <tr>
        <th>Id</th>
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
            <th></th>



        </tr>
    @endforeach

    </tbody>

</table>


@endsection
