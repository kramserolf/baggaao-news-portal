<!-- Modal -->
<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="newsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="POST" id="news_form" enctype="multipart/form-data">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newsLabel">Add New Record</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <img id="load_image" src="{{asset('images/default.jpg')}}" class="img-thumbnail" alt="Report Image" runat="server"  width="125" height="125" style="border: 1px solid; border-color: seagreen; min-width:125px; min-height:125px; max-width:125px; max-height:125px; background-size:cover;">
          </div>
          <form>
            <div class="form-group">
              <label>Photo:</label>
              <input type="file" name="image" id="image" class="form-control-file">
            </div>
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