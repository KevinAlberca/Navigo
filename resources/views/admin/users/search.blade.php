<form method="POST" action="{{ url('/admin/users/search') }}">
    {{ csrf_field() }}
    <label for="look_for">Look for :</label> <input type="text" name="look_for" id="look_for" required/>
    <input type="submit">
</form>
