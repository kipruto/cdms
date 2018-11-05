<!-- Edit Station Modal -->
<div class="modal fade" id="delete_station" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Station</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('stations.destroy', 'test')}}">
                @method('delete')
                @csrf
                <div class="modal-body">
                    <p>Are you sure you want to delete?</p>
                    <input type="hidden" name="id" id="station_id" value="{{$station->id}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
