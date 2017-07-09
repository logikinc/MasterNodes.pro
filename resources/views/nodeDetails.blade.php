<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">MasterNode: {!! $mnl['addr'] !!}</h4>
        </div>
        <div class="modal-body">
            Status: {!! $mnl['status'] !!}<Br>
            Addr: {!! $mnl['addr'] !!}<Br>
            City: {!! $mnl['ipData']['city'] !!}<br>
            Region: {!! $mnl['ipData']['region_name'] !!}<br>
            Country: {!! $mnl['ipData']['country_name'] !!}<br>
            Total Generated: {!! $mnl['total'] !!} {!! strtoupper(env('COIN')) !!}<br>
        </div>
    </div>
</div>