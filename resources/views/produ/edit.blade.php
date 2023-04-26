// Editar regristros de productos 

<form action = "{{ url('/produ'. $produ->id) }}"method="POST">
    @csrf
    {{ method_field ('PUT')}}
    @include ('produ.form')

</form>