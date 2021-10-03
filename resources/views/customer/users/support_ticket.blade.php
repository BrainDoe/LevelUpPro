@extends('layouts.dashboard.app')

@section('content')
<div class="row py-3">
  <div class="col-md-6">
      <h3 class="text-white">Support Tickets</h3>
  </div>
  <div class="col-md-6">
      <nav aria-label="breadcrumb" style="background-color:transparent">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/customer/users/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active text-white" aria-current="page">Support Ticket</li>
          </ol>
      </nav>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card bg-primary borderTop">
      <div class="card-header">
        <span class="text-white float-left">Support Tickets</span>
          <a href="#" class="btn btn-success btn-sm disabled float-right">New Support</a>
      </div>
      {{-- Card Header --}}

      {{-- Card Body --}}
      <div class="card-body table-responsive p-0">
        <table class="table text-white">
          <tbody>
            <tr>
              <th>Ticket No.</th>
              <th>Subject</th>
              <th>Category</th>
              <th class="right">Priority</th>
              <th class="right">Created</th>
              <th class="right">Status</th>
              <th class="right">Action</th>
            </tr>
            <tr>
              <td data-th="Step Up" colspan="4">No Record</td>
            </tr>
          </tbody>
        </table>
      </div>
     {{--End Card Body --}}
    </div>
  </div>
</div>
@endsection