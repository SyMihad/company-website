@extends('admin.admin_master')


@section('admin')


<div class="content-wrapper">

<div class="content">
<div class="col-lg-12">

    <div class="card card-default">
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="card-header card-header-border-bottom">
            <h2>Create Member</h2>
        </div>
        <div class="card-body">
        <form action="{{route('about_us.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">

                </div>

                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation">

                </div>

                <div class="form-group">
                    <label for="priority">Priority</label>
                    <input type="text" class="form-control" name="priority" id="priority" placeholder="Priority">
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" class="form-control-file" id="photo">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
</div>
</div>




@endsection
