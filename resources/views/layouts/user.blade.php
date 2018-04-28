@extends('layouts.master');

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
            <div class="list-group">
                <a class="list-group-item list-group-item-action">Home</a>
                <a class="list-group-item list-group-item-action">My Leaves <span class="badge badge-pill badge-success float-right"> 1 </span></a>
                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseRequests" aria-expanded="true" aria-controls="collapseRequests">Requests to me <i class="fas fa-caret-down"></i><span class="badge badge-pill badge-success float-right"> 3 </span></a>
                <div id="collapseRequests" class="collapse">
                    <a class="list-group-item list-group-item-action bg-light">Request for leaves</a>
                    <a class="list-group-item list-group-item-action bg-light">Request for substituting</a>
                </div>
                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseSub" aria-expanded="true" aria-controls="collapseSub">My subordinates <i class="fas fa-caret-down"></i></a>
                <div id="collapseSub" class="collapse">
                    <a class="list-group-item list-group-item-action bg-light">Show All My Subordinates</a>
                    <a class="list-group-item list-group-item-action bg-light">Assign Tasks</a>
                </div>
                <a class="list-group-item list-group-item-action">Calendar</a>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
            @yield('main')
        </div>
    </div>
@endsection