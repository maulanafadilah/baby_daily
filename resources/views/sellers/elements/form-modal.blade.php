<!-- Modal Form -->
<div class="modal fade modalbox" id="ModalForm" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Photo Produk</h5>
                <a href="#" data-bs-dismiss="modal">Close</a>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <div class="section mt-4 mb-5">
                        <form action="{{ route('images.update',1) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <h1 id="id_photo">test</h1>
                            <!-- <input type="hidden" name="id" id="id_photo"> -->
                            <label class="form-label" for="fileUpload1">Upload Gambar</label>
                            <div class="custom-file-upload" id="fileUpload1">
                                <input type="file" id="fileuploadInput" accept=".png, .jpg, .jpeg" name="gambar[]" multiple>
                                <label for="fileuploadInput">
                                    <span>
                                        <strong>
                                            <ion-icon name="cloud-upload-outline"></ion-icon>
                                            <i>Klik Disini Untuk Upload</i>
                                        </strong>
                                    </span>
                                </label>
                                @error('gambar')
                                <span class="text-danger">{{ $message }}</span>
                                @endif
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Modal Form -->