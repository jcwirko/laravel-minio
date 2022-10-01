<!-- Modal -->
<div class="modal animated zoomIn" id="createMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-inspinia text-primary" id="exampleModalLabel">Nuevo Auto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('cars.store')}}" role="form" method="POST" id="createFrm">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="first_name" class="form-fields">Modelo</label>
                                <label class="mandatory-field">*</label>
                                <input type="text"
                                       class="form-control {{$errors->has('first_name') ? 'is-invalid' : ''}}"
                                       name="first_name" id="first_name"
                                       value="{{old('first_name')}}" placeholder="-">
                                @if ($errors->has('first_name'))
                                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="image" class="form-fields">Imagen</label>
                                <label class="mandatory-field">*</label>
                                <div>
                                    <input type="file" name="image" id="image" />
                                </div>
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    @include('partials.buttons.btn-create-form')
                </form>
            </div>
        </div>
    </div>
</div>
