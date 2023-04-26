// nuevo registro de producto

<form action = "{{ url('/produ')}}"method="POST">
    @csrf
    @include ('produ.form')

</form>