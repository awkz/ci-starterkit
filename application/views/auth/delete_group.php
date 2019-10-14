    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <p>Are you sure you want to delete the group <?php echo $group[0]->name;?></p>
            <?php echo form_open(current_url());?>
            <p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="confirm" value="yes" checked="checked">
                <label class="form-check-label">Yes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="confirm" value="no">
                <label class="form-check-label">No</label>
              </div>
              
            </p>

            <?php echo form_hidden($csrf); ?>
            <?php echo form_hidden(array('id'=>$group[0]->id)); ?>

            <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>

            <?php echo form_close();?>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->