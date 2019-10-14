    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <p>Are you sure you want to delete the user <?php echo $user[0]->email;?></p>
            <?php echo form_open("auth/delete_user/".$user[0]->id);?>
            <p>
              <?php //echo lang('delete_user_confirm_y_label', 'confirm');?>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="confirm" value="yes" checked="checked">
                <label class="form-check-label">Yes</label>
              </div>
              <?php //echo lang('delete_user_confirm_n_label', 'confirm');?>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="confirm" value="no">
                <label class="form-check-label">No</label>
              </div>
              
            </p>

            <?php echo form_hidden($csrf); ?>
            <?php echo form_hidden(array('id'=>$user[0]->id)); ?>

            <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>

            <?php echo form_close();?>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->