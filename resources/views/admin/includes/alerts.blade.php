@if ($message = Session::get('error'))
<script>
    Swal.fire({
        icon: "error",
        title: "{{ $message }}",
    });
</script>
@endif
@if ($message = Session::get('success'))
<script>
    Swal.fire({
        icon: "success",
        title: "{{ $message }}",
    });
</script>
@endif