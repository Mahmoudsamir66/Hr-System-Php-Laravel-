@extends('Hr.Layout.master')
@section('content')

                    <section class="invoice-template">
                        <div class="card">
                            <div class="card-body p-3">
                                <div id="invoice-template" class="card-block">
                                    <!-- Invoice Company Details -->
                                    <div id="invoice-company-details" class="row">
                                        <div class="col-6 text-left">
                                            <img src="{{asset('public/app-assets/img/logo.png')}}" alt="company logo" class="mb-2"
                                                 width="70">
                                            <ul class="px-0 list-unstyled">
                                                <li class="text-bold-800">Pioneer Solutions Company</li>
                                                <li>Cairo,</li>
                                                <li>Naser City ,</li>
                                                <li>102 Makrim Ebid,</li>

                                            </ul>
                                        </div>
                                        <div class="col-6 text-right">
                                            <h2>INVOICE</h2>
                                            <p class="pb-3"># INV-001001</p>
                                            <ul class="px-0 list-unstyled">
                                                <li>Balance Due</li>
                                                <li class="lead text-bold-800">{{$employee->salary}} $</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--/ Invoice Customer Details -->
                                    <!-- Invoice Items Details -->
                                    <div id="invoice-items-details" class="pt-2">
                                        <div class="row">
                                            <table class="table table-striped table-bordered zero-configuration mt-40">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Employee Name</th>
                                                    <th>Phone</th>
                                                    <th>Salary</th>
                                                    <th>Attendance days</th>
                                                    <th>Absent days</th>
                                                    <th>Overtime hours</th>
                                                    <th> Discount hours</th>
                                                    <th>Extra</th>
                                                    <th>
                                                        discount
                                                    </th>
                                                    <th>Total</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>2</td>
                                                    <td>{{$employee->name}}</td>
                                                    <td>{{$employee->phone}}</td>
                                                    <td>{{$employee->salary}}</td>
                                                    <td>{{$attendDays}}</td>
                                                    <td>{{$absenceDays}}</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>
                                                    <td>55$</td>
                                                    <td>21$</td>
                                                    <td>502$</td>


                                                </tr>


                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-left">
                                                <p class="lead">Payment Methods:</p>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <table class="table table-borderless table-sm">
                                                            <tbody>
                                                            <tr>
                                                                <td>Bank name:</td>
                                                                <td class="text-right">ABC Bank, USA</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Acc name:</td>
                                                                <td class="text-right">Amanda Orton</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IBAN:</td>
                                                                <td class="text-right">FGS165461646546AA</td>
                                                            </tr>
                                                            <tr>
                                                                <td>SWIFT code:</td>
                                                                <td class="text-right">BTNPP34</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <p class="lead">Total due</p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <td>Sub Total</td>
                                                            <td class="text-right">$ 14,900.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>TAX (12%)</td>
                                                            <td class="text-right">$ 1,788.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-800">Total</td>
                                                            <td class="text-bold-800 text-right"> $ 16,688.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Payment Made</td>
                                                            <td class="pink text-right">(-) $ 4,688.00</td>
                                                        </tr>
                                                        <tr class="bg-grey bg-lighten-4">
                                                            <td class="text-bold-800">Balance Due</td>
                                                            <td class="text-bold-800 text-right">$ 12,000.00</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="text-center">
                                                    <p>Authorized person</p>
                                                    <img src="../app-assets/img/pages/signature-scan.png"
                                                         alt="signature" class="width-250">
                                                    <h6>Amanda Orton</h6>
                                                    <p class="text-muted">Managing Director</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Invoice Footer -->
                                    <div id="invoice-footer">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-12">
                                                <h6>Terms &amp; Condition</h6>
                                                <p>You know, being a test pilot isn't always the healthiest business in
                                                    the world. We predict too
                                                    much for the next year and yet far too little for the next 10.</p>
                                            </div>
                                            <div class="col-md-3 col-sm-12 text-center">
                                                <button type="button" class="btn btn-primary my-1"><i
                                                        class="fa fa-paper-plane-o"></i> Send Invoice
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Invoice Footer -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Invoice template ends-->

@endsection
