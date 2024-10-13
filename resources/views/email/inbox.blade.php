@extends('layout.master')
@section('parentPageTitle', 'Email')
@section('title', 'Inbox')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <ul class="nav nav-tabs3 table-nav">
                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Invoice">Contratos</a></li>        
            </ul>
            <div class="tab-content mt-0">
                <div class="tab-pane show active" id="Invoice">
                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing8">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Docente</th>
                                    <th>Contrato</th>
                                    <th>Salario</th>
                                    <th>Estado</th>
                                    <th class="w60">Amount</th>
                                    <th class="w60">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#LA-5218</td>
                                    <td>vPro tec LLC.</td>
                                    <td>07 March, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>$4,205</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#LA-1212</td>
                                    <td>BT Technology</td>
                                    <td>25 Jun, 2018</td>
                                    <td><img src="../assets/images/mastercard.png" class="rounded w40" alt="mastercard"></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>$5,205</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#LA-0222</td>
                                    <td>More Infoweb Pvt.</td>
                                    <td>12 July, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>$2,000</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#LA-0312</td>
                                    <td>RETO Tech LLC.</td>
                                    <td>13 July, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>$10,000</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#LA-5656</td>
                                    <td>SDRAPP Pvt.</td>
                                    <td>27 July, 2018</td>
                                    <td><img src="../assets/images/visa-card.png" class="rounded w40" alt="visa card"></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>$1,205</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#LA-4515</td>
                                    <td>Kdash Infoweb LLC.</td>
                                    <td>07 March, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>$4,205</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#LA-7845</td>
                                    <td>BT infoweb</td>
                                    <td>25 Jun, 2018</td>
                                    <td><img src="../assets/images/mastercard.png" class="rounded w40" alt="mastercard"></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>$5,205</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
@stop

@section('page-styles')

@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script>
    $('.toggle-email-nav').on('click', function() {
		$('.mail-left').toggleClass('open');
	});
</script>
@stop