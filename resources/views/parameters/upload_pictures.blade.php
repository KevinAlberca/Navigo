<h2 class="text-center">{{ ucfirst(trans('parameters.upload_picture')) }}</h2>
<form method="POST" action="{{ url('/parameters/upload_picture') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="picture_to_upload"><h3>{{ ucfirst(trans('parameters.picture_to_upload')) }}</h3></label>
        <input type="file" name="picture_to_upload" id="picture_to_upload"/>
    </div>
    <input type="submit" value="{{ ucfirst(trans('parameters.submit'))}}" class="btn btn-primary" />
</form>
