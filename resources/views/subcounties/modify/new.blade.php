<!--New Subcounty Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_subcounty">
    Add New Subcounty
</button>

<!-- New Subcounty Modal -->
<div class="modal fade" id="new_subcounty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Subcounty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('subcounties.store')}}">
                @csrf
                <div class="modal-body">
                    @include('subcounties.form')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
