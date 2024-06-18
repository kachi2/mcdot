@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action='{{ route('admin.about.store') }}' method='post', enctype='multipart/form-data'>
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="card-title">Company About</span>
                                    <div class="form-group">
                                        <textarea id="about" class="@error('about') is-invalid @enderror" name="about">{{ old('about', $about->about) }}</textarea>
                                        <small id="emailHelp" class="form-text text-muted">Enter information about the company
                                        </small>
                                        @error('about')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <span class="card-title">Mission and Vission</span>
                                    <div class="form-group">
                                        <textarea id="mission" class="@error('aims_objective') is-invalid @enderror" name="aims_objective">{{ old('aims_objective', $about->aims_objective) }}</textarea>
                                        <small id="emailHelp" class="form-text text-muted">Enter Company Vision and Mission Statement
                                        </small>
                                        @error('aims_objective')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <span class="card-title">Company Core Values</span>
                                    <div class="form-group">
                                        <textarea id="values" class="@error('core_values') is-invalid @enderror" name="core_values">{{ old('core_values', $about->core_values) }}</textarea>
                                        <small id="emailHelp" class="form-text text-muted">Enter Company core values
                                        </small>
                                        @error('core_values')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                    <div class="p-5">
                                        <button type="submit" class="btn btn-primary p-3">Post Job</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    CKEDITOR.replace( 'about' );
</script>
<script>
    CKEDITOR.replace( 'values' );
</script>
<script>
    CKEDITOR.replace( 'mission' );
</script>
    <script src="{{ asset('/backend/vendors/datepicker/daterangepicker.js') }}"></script>
    <script>
        $('input[name="daterangepicker"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });


        $('.clockpicker-example').clockpicker({
            autoclose: true
        });

        $('input[name="date"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });

        let message = {!! json_encode(Session::get('message')) !!};
        let msg = {!! json_encode(Session::get('alert')) !!};
        //alert(msg);
        toastr.options = {
            timeOut: 8000,
            progressBar: true,
            showMethod: "slideDown",
            hideMethod: "slideUp",
            showDuration: 200,
            hideDuration: 200
        };
        if (message != null && msg == 'success') {
            toastr.success(message);
        } else if (message != null && msg == 'error') {
            toastr.error(message);
        }
    </script>
@endsection
