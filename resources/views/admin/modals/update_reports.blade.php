<!-- Modal -->
<div class="modal fade" id="updateReportsModal" tabindex="-1" role="dialog" aria-labelledby="reportsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="POST" id="update_reports_form" enctype="multipart/form-data">
      @csrf
      @method("PUT")
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reportsLabel">Update Reports Record</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <img id="update_load_image" src="#" class="img-thumbnail" alt="Report Image" runat="server"  width="125" height="125" style="border: 1px solid; border-color: seagreen; min-width:125px; min-height:125px; max-width:125px; max-height:125px; background-size:cover;">
          </div>
          <form>
            <div class="form-group">
              <label>Photo:</label>
              <input type="file" name="update_image" id="update_image" class="form-control-file" required>
            </div>
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