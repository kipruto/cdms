<!-- Delete Subcounty Modal -->
<div class="modal modal-danger fade" id="delete_subcounty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('subcounties.destroy','test')}}">
                @method('delete')
                @csrf
                <div class="modal-body">

                    <p>Are you sure you want to delete?</p>
                    <input type="hidden" name="id" id="subcounty_id" value="{{$subcounty->id}}">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
