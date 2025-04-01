<html>


<body>

<form action="{{ route('emp.insert') }}" method="post">
    @csrf
    <input type="text" placeholder="name">
    <input type="text" placeholder="age">
    <button>submit</button>


</form>



</body>

<html>