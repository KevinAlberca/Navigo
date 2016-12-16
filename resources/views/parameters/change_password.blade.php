<form method="POST" action="{{ url('/parameters/change_password') }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="input-group">
        <label for="old_password">{{ ucwords(trans('parameters.old_password')) }} :</label><input type="password" name="old_password" id="old_password" class="form-control" required />
    </div>
    <div class="input-group">
        <label for="new_password">{{ ucwords(trans('parameters.new_password')) }} :</label><input type="password" name="new_password" id="new_password" class="form-control" required />
    </div>
    <div class="input-group">
        <label for="new_password_conf">{{ ucwords(trans('parameters.new_password_conf')) }}:</label><input type="password" name="new_password_conf" id="new_password_conf" class="form-control" required />
    </div>
    <div class="input-group">
        <button type="submit" class="btn btn-primary">{{ ucfirst(trans('parameters.submit'))}}</button>
    </div>
</form>
