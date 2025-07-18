@extends('layouts.app')
@section('head')
    <title>{{__('Example formBuilder')}}</title>
@endsection

@section('content')
    <div class="card contactpointHeader">
        <div class="card-body">
            <label for="name">{{__('Name')}}<span style="color:#ff0000">*</span></label>
            <input type="text" id="name" name="name" class="form-control" required /><span id="nameErr" style="display:none;color:red">Name is required</span>
            <div id="fb-editor" style="margin-top: 30px;"></div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="{{ URL::asset('assets/form-builder/form-builder.min.js') }}"></script>
    <script>
        jQuery(function($) {
            $(document.getElementById('fb-editor')).formBuilder({
                onSave: function(evt, formData) {
                    console.log(formData);
                    saveForm(formData);
                },
            });
        });

        function saveForm(form) {
            var name = $('#name').val();
            if (name.length < 1) {
                $("#nameErr").css('display', 'block').fadeOut(5000);
                $("#name").focus();
                return false;
            }
            $.ajax({
                type: 'post',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                url: '{{ URL('save-form-builder') }}',
                data: {
                    'form': form,
                    'name': $("#name").val(),
                    "_token": "{{ csrf_token() }}",
                },
                success: function(data) {
                    location.href = "/form-builder";
                    console.log(data);
                }
            });
        }
    </script>
@endsection
