<!-- Delete Subcounty Modal -->
<div class="modal modal-danger fade" id="delete_sample" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Destroy Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('samples.destroy','test')}}">
                @method('DELETE')
                @csrf
                <div class="modal-body">

                    <h5>Are you sure you want to destroy this sample?</h5>
                    <input type="hidden" name="sample_id" id="sample_id" value="{{$sample->sample_id}}">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Abort!</button>
                    <button type="submit" class="btn btn-danger">Yes, Destroy</button>
                </div>
            </form>
        </div>
    </div>
</div>
