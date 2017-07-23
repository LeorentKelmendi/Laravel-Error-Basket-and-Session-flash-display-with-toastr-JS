@if(count($errors)>0)
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
 <script>
    @foreach($errors->all() as $error)
    
                toastr.options = {
                      "debug": false,
                      "positionClass": "toast-bottom-right",
                      "onclick": null,
                      "fadeIn": 300,
                      "fadeOut": 1000,
                      "timeOut": 5000,
                      "extendedTimeOut": 1000
                    }
                toastr.warning("{{$error}}")

    @endforeach
</script>
@endif

@if(session('success'))
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
 <script>
            @if(Session::has('success'))
               toastr.options = {
                      "debug": false,
                      "positionClass": "toast-bottom-right",
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
