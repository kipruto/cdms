<!-- Modal -->
<div class="modal fade" id="sample_result" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Preliminary Result Submission</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('samples.store')}}">
                @csrf
                <div class="modal-body">
                    @include('samples.form')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Abort</button>
                    <button type="submit" class="btn btn-success">Submit Sample Result</button>
                </div>
            </form>
        </div>
    </div>
</div>
