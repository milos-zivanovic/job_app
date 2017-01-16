@extends('layouts.main')

@section('content')


<!--Show errors-->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!--Show success-->
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


<section class="style-default-bright">
    <div class="section-header">
        <h2 class="text-primary">
            <span class="pull-left">Job Posts</span>
        </h2>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="datatable1" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Added by</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $job)
                            <tr class="gradeX">
                                <td>{{ $job->id }}</td>
                                <td>{{ $job->title }}</td>
                                <td>{{ $job->description }}</td>
                                <td>{{ $job->user->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr class="ruler-xxl"/>
    </div>
</section>
@endsection
