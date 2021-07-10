@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Special pages</a></li>
    <li class="breadcrumb-item active" aria-current="page">Invoice</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="container-fluid d-flex justify-content-between">
          <div class="col-lg-3 pl-0">
            <a href="#" class="noble-ui-logo d-block mt-3">Noble<span>UI</span></a>                 
            <p class="mt-1 mb-1"><b>NobleUI Themes</b></p>
            <p>108,<br> Great Russell St,<br>London, WC1B 3NA.</p>
            <h5 class="mt-5 mb-2 text-muted">Invoice to :</h5>
            <p>Joseph E Carr,<br> 102, 102  Crown Street,<br> London, W3 3PR.</p>
          </div>
          <div class="col-lg-3 pr-0">
            <h4 class="font-weight-medium text-uppercase text-right mt-4 mb-2">invoice</h4>
            <h6 class="text-right mb-5 pb-4"># INV-002308</h6>
            <p class="text-right mb-1">Balance Due</p>
            <h4 class="text-right font-weight-normal">$ 72,420.00</h4>
            <h6 class="mb-0 mt-3 text-right font-weight-normal mb-2"><span class="text-muted">Invoice Date :</span> 25rd Jan 2020</h6>
            <h6 class="text-right font-weight-normal"><span class="text-muted">Due Date :</span> 12th Jul 2020</h6>
          </div>
        </div>
        <div class="container-fluid mt-5 d-flex justify-content-center w-100">
          <div class="table-responsive w-100">
              <table class="table table-bordered">
                <thead>
                  <tr>
                      <th>#</th>
                      <th>Description</th>
                      <th class="text-right">Quantity</th>
                      <th class="text-right">Unit cost</th>
                      <th class="text-right">Total</th>
                    </tr>
                </thead>
                <tbody>
                  <tr class="text-right">
                    <td class="text-left">1</td>
                    <td class="text-left">PSD to html conversion</td>
                    <td>02</td>
                    <td>$55</td>
                    <td>$110</td>
                  </tr>
                  <tr class="text-right">
                    <td class="text-left">2</td>
                    <td class="text-left">Package design</td>
                    <td>08</td>
                    <td>$34</td>
                    <td>$272</td>
                  </tr>
                  <tr class="text-right">
                    <td class="text-left">3</td>
                    <td class="text-left">Html template development</td>
                    <td>03</td>
                    <td>$500</td>
                    <td>$1500</td>
                  </tr>
                  <tr class="text-right">
                    <td class="text-left">4</td>
                    <td class="text-left">Redesign</td>
                    <td>01</td>
                    <td>$30</td>
                    <td>$30</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="container-fluid mt-5 w-100">
          <div class="row">
            <div class="col-md-6 ml-auto">
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
                          <td class="text-danger text-right">(-) $ 4,688.00</td>
                        </tr>
                        <tr class="bg-light">
                          <td class="text-bold-800">Balance Due</td>
                          <td class="text-bold-800 text-right">$ 12,000.00</td>
                        </tr>
                      </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
        <div class="container-fluid w-100">
          <a href="#" class="btn btn-primary float-right mt-4 ml-2"><i data-feather="send" class="mr-3 icon-md"></i>Send Invoice</a>
          <a href="#" class="btn btn-outline-primary float-right mt-4"><i data-feather="printer" class="mr-2 icon-md"></i>Print</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection