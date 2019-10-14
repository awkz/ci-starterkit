    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title"><?php echo anchor('auth/groups', 'Back', array('title' => 'Back!','class'=>'btn btn-info btn-primary'));?></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php echo form_open("auth/create_group");?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label"><?php echo lang('create_group_name_label');?></label>
                                    <?php echo form_input($group_name);?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label"><?php echo lang('create_group_desc_label');?></label>
                                    <?php echo form_input($description);?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                            </div>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->