<!-- Modal -->
<div class="modal fade" id="updateAnnouncementModal" tabindex="-1" role="dialog" aria-labelledby="reportsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="POST" id="update_announcement_form">
      @csrf
      @method("PUT")
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reportsLabel">Update Record</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label>Title</label>
              <textarea type="text" class="form-control" id="update_title" name="update_title" placeholder="Title of Report"></textarea>
            </div>
            <div class="form-group">
              <label>Content</label>
              <textarea type="text" class="form-control" id="update_content" name="update_content" placeholder="Content of Report"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="hidden" name="hidden_id" id="hidden_id" value="id">
          <input type="submit" name="update_action_button" id="update_action_button" value="Update" class="btn btn-primary">
        </div>
      </div>
    </form>
  </div>
</div>