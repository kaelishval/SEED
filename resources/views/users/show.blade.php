@extends('layouts.user-profile')

@section('subtitle', trans('user.profile'))

@section('user-content')
    <div class="row">
        <div class="col-md-4">
            @include('users.partials.profile')
        </div>
        <div class="col-md-8">
            @include('users.partials.parent-spouse')
            @include('users.partials.childs')
            @include('users.partials.siblings')
        </div>
    </div>
@endsection

@section ('ext_css')
<link rel="stylesheet" href="{{ asset('css/plugins/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins/jquery.datetimepicker.css') }}">
@endsection

@section ('ext_js')
<script src="{{ asset('js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.datetimepicker.js') }}"></script>
@endsection

@section ('script')
<script>
(function () {
    $('select').select2();
    $('input[name=marriage_date]').datetimepicker({
        timepicker:false,
        format:'Y-m-d',
        closeOnDateSelect: true,
        scrollInput: false
    });
})();
</script>
@if(Session::has('setfather'))
    <script>
          swal({
                text:"Father set!",
                icon: "success",
});
    </script>
@endif
@if(Session::has('setparent'))
    <script>
          swal({
                text:"Parent set!",
                icon: "success",
});
    </script>
@endif
@if(Session::has('sethusband'))
    <script>
          swal({
                text:"Husband set!",
                icon: "success",
});
    </script>
@endif
@if(Session::has('setwife'))
    <script>
          swal({
                text:"wife set!",
                icon: "success",
});
    </script>
@endif
@if(Session::has('setchild'))
    <script>
          swal({
                text:"Child set!",
                icon: "success",
});
    </script>
@endif
@if(Session::has('setmother'))
    <script>
          swal({
                text:"Mother set!",
                icon: "success",
});
    </script>
@endif

@endsection
