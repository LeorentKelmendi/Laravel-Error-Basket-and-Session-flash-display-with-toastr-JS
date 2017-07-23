@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class="alert alert-danger">
    {{$error}}
</div>


@endforeach
@endif


@if(session('success'))


   <script>
            @if(Session::has('success'))
               toastr.options = {
                      "debug": false,
//                      "positionClass": "toast-bottom-right",
                      "onclick": null,
                      "fadeIn": 300,
                      "fadeOut": 1000,
                      "timeOut": 5000,
                      "extendedTimeOut": 1000
                    }
                toastr.success("{{Session::get('success')}}")

        @endif



        </script>

@endif
