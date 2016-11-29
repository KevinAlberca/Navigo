<div class="modal fade" id="buyModal{{ $plan->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <form method="POST" action="{{ url('/subscription/checkout') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="pay" id="pay" value="{{ $plan->price}}" required />
                    <input type="hidden" name="duration" id="duration" value="{{ $plan->duration}}" required />
                    <button type="submit" class="btn btn-primary">Buy</button>
                </form>
            </div>
        </div>
    </div>
</div>
