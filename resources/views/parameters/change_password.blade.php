<form method="POST" action="{{ url('/parameters/change_password') }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="input-group">
        <label for="old_password">Old password :</label><input type="password" name="old_password" id="old_password" class="form-control" required />
    </div>
    <div class="input-group">
        <label for="new_password">new password :</label><input type="password" name="new_password" id="new_password" class="form-control" required />
    </div>
    <div class="input-group">
        <label for="new_password_conf">new password (confirmation):</label><input type="password" name="new_password_conf" id="new_password_conf" class="form-control" required />
    </div>
    <div class="input-group">
        <input type="submit" class="btn btn-primary" />
    </div>
</form>
