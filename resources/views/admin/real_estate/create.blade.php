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
        <form action="{{route('real_estate.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">

                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="address">

                </div>

                <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" name="thumbnail" class="form-control-file" id="thumbnail">
                </div>

                <div class="form-group">
                    <label for="pdf_file">PDF</label>
                    <input type="file" name="pdf_file" class="form-control-file" id="pdf_file">
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
