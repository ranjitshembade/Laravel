@php
    $user= "Ranjit";
@endphp

<script>
var data = @json($user);
console.log(data);
</script> 