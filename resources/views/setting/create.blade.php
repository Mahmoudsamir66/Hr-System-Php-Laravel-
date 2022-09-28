@extends('Hr.Layout.master')
@section('content')
<div class="container-fluid">
    <section id="horizontal-form-layouts">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title" id="horz-layout-basic">General Settings Form </h4>
                        </div>
                        <p class="mb-0">This is the basic horizontal form with labels on left and cost estimation form is the default position.</p>
                    </div>
                    <div class="card-body">
                        <div class="px-3">
                            <form class="form form-horizontal " action="{{route('setting.store')}}"  method="post" role="form">
                                @csrf
                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="icon-user"></i>General information</h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">The extra: </label>
                                        <div class="col-md-9">
                                            <input type="text" id="projectinput1" class="form-control" name="extra">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">The Discount: </label>
                                        <div class="col-md-9">
                                            <input type="text"  id="projectinput1" class="form-control" name="discount">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-md-3 label-control"  for="projectinput7">Weekly Holidays: </label>
                                        <div class="col-md-9">

                                                <input type="checkbox" id="vehicle1" name="holidays" value="1" >
                                                <label for="sat"> Satrday</label><br>
                                                <input type="checkbox" id="vehicle2" name="holidays"  value="2" >
                                                <label for="sun"> Sunday</label><br>
                                                <input type="checkbox" id="vehicle3" name="holidays" value="3">
                                                <label for="mon"> Monday</label><br>
                                                <input type="checkbox" id="vehicle2" name="holidays" value="4">
                                                <label for="sun"> Tuesday</label><br>
                                                <input type="checkbox" id="Tue" name="holidays"value="5" >
                                                <label for="sun"> Turthday</label><br>
                                            <input type="checkbox" id="Tue" name="holidays" value="6">
                                            <label for="Fri">wensday</label><br>
                                                <input type="checkbox" id="Tue" name="holidays" value="7">
                                                <label for="Fri">Friday</label><br>



                                        </div>
                                    </div>



                                    <div class="#">
                                        <button type="submit"  class="btn btn-danger mr-1">
                                            <i class="icon-trash"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-success">
                                            <i class="icon-note"></i> Save
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div></section>
    <!-- // Basic form layout section end -->
</div>
@endsection
