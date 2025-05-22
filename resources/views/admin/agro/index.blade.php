@extends('admin.admin_master')


@section('admin')


    <div class="py-12">
        <div class="container">
            <div class="row">


            <div class="col-md-12">
                <div class="card">
                    @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                    @endif
                    <div class="card-header">Agro</div>
                    <div class="card-body">
                    <form action="{{route('agro.update', [$agro->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf

                            <div class="form-group">
                                <label for="description">Long Description</label>
                                <textarea id="description" name="description" class="form-control summernote">{!! old('description', $agro->description ?? '') !!}</textarea>
                            </div>


                            <button type="submit" class="btn btn-primary">Update</button>
                          </form>
                    </div>

                </div>
            </div>

            </div>
        </div>
    </div>
    @endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 300,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture']],
                ['view', ['codeview']]
            ]
        });
    });

    $('#description').summernote({
        height: 300,
        callbacks: {
            onImageUpload: function(files) {
                uploadImage(files[0]);
            }
        }
    });

    function uploadImage(file) {
        var data = new FormData();
        data.append("image", file);
        data.append("_token", "{{ csrf_token() }}");

        $.ajax({
            url: "{{ route('summernote.upload') }}",
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "POST",
            success: function(url) {
                $('#description').summernote('insertImage', url);
            },
            error: function(data) {
                console.log(data.responseText);
            }
        });
    }
</script>
@endpush
