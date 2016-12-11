@extends('layouts.admin')

@section('body')
    <div id="verify_card">
        {{ csrf_field() }}
        <label for="card_id">Card number</label>
        <input type="text" name="card_id" id="card_id" placeholder="N3300" required />
        <button type="button" class="btn btn-primary">Submit</button>
    </div>
    <div class="result">
        <h2></h2>
        <ul style="display:none;">
            <li class="subscription_start"></li>
            <li class="subscription_end"></li>
            <li class="is_active"></li>
        </ul>
    </div>
@endsection

@section('js')
    <script src="/js/admin.js" type="text/javascript"></script>
@endsection
