<form method="POST" action="{{ url('/parameters/change_email') }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="input-group">
        <label for="old_email">Old email :</label><input type="email" name="old_email" id="old_email" class="form-control" required />
    </div>
    <div class="input-group">
        <label for="new_email">new email :</label><input type="email" name="new_email" id="new_email" class="form-control" required />
    </div>
    <div class="input-group">
        <label for="new_email_conf">new email (confirmation):</label><input type="email" name="new_email_conf" id="new_email_conf" class="form-control" required />
    </div>
    <div class="input-group">
        <input type="submit" class="btn btn-primary" />
    </div>
</form>
