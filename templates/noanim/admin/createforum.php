<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Forum</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
<form method="POST" action="<?php echo base_url(); ?>admin/forumcreate/{id}">
    <div class="form-group">
        <label>Forum Title</label>
        <input class="form-control" name="blogtitle" required>
        <p class="help-block">The title of your forum!</p>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" id="posteditor" name="posteditor" rows="3"></textarea>
    </div>
    <button class="btn btn-outline btn-success" type="submit" value="submit">Create Forum</button>
</form>
</div>