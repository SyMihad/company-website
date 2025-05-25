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

                {{-- <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" class="form-control-file" id="photo">
                </div> --}}

                <div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" name="photo" class="form-control-file" id="photoInput" accept="image/*">
</div>

<!-- Crop Modal -->
<div class="modal fade" id="cropperModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div>
            <img id="imageToCrop" style="max-width: 100%;" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="cropButton" class="btn btn-success">Crop & Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
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

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let cropper;
        const photoInput = document.getElementById('photoInput');
        const imageToCrop = document.getElementById('imageToCrop');
        const cropperModalEl = document.getElementById('cropperModal');
        const cropperModal = new bootstrap.Modal(cropperModalEl);
        const form = document.querySelector('form');

        // Create hidden input to store cropped image
        let hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'cropped_photo';
        form.appendChild(hiddenInput);

        // Handle file input change
        photoInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (!file || !file.type.startsWith('image/')) {
                alert('Please select a valid image file.');
                return;
            }

            const reader = new FileReader();
            reader.onload = function (event) {
                imageToCrop.src = event.target.result;
                cropperModal.show();
            };
            reader.readAsDataURL(file);
        });

        // When modal is shown, initialize cropper
        cropperModalEl.addEventListener('shown.bs.modal', function () {
            cropper = new Cropper(imageToCrop, {
                aspectRatio: 1,
                viewMode: 1,
                autoCropArea: 1,
                responsive: true,
                minContainerWidth: 300,
                minContainerHeight: 300,
                preview: '',
            });
        });

        // Destroy cropper when modal is hidden
        cropperModalEl.addEventListener('hidden.bs.modal', function () {
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
        });

        // Handle crop button
        document.getElementById('cropButton').addEventListener('click', function () {
            if (cropper) {
                const canvas = cropper.getCroppedCanvas({
                    width: 300,
                    height: 300,
                    imageSmoothingQuality: 'high',
                });

                // Convert canvas to Base64 image
                canvas.toBlob(function (blob) {
                    const reader = new FileReader();
                    reader.onloadend = function () {
                        hiddenInput.value = reader.result; // base64 image string
                        cropperModal.hide();
                    };
                    reader.readAsDataURL(blob);
                }, 'image/jpeg', 0.9);
            }
        });
    });
</script>
@endsection

