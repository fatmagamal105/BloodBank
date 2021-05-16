@extends('backend.admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Tables</a></li>
</ul>


<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Donor ID</th>
                        <th>Donor Name</th>
                        <th>email</th>
                        <th>Phone</th>
                        <th>Governor</th>
                        <th>Address</th>
                        <th>Contact By</th>
                        <th>Blood Type</th>
                        <th>Contact time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach($data as $item)
                <tbody>
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->username }}</td>
                        <td >{{  $item->email }}</td>
                        <td class="center">{{ $item->phone}}</td>
                        <td class="center">{{ $item->governor}}</td>
                        <td class="center">{{ $item->address}}</td>
                        <td class="center">{{ $item->contact_type}}</td>
                        <td class="center">{{ $item->type}}</td>
                        <td class="center">{{ $item->contact_time}}</td>
                        <td class="center">
                            <a class="btn btn-danger" href="{{URL::to('/delete-donor/' . $item->id)}}">
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div><!--/span-->
</div><!--/row-->
@endsection
