<!-- Modal -->
<div class="modal fade" id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="announcementLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="POST" id="announcement_form">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="announcementLabel">Add New Record</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label>Title</label>
              <textarea type="text" class="form-control" id="title" name="title" placeholder="Title of Report"></textarea>
            </div>
            <div class="form-group">
              <label>Content</label>
              <textarea type="text" class="form-control" id="content" name="content" placeholder="Content of Report"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="action_button" id="action_button" value="Save" class="btn btn-primary">
        </div>
      </div>
    </form>
  </div>
</div>