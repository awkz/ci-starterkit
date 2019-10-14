    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <?php echo form_open(uri_string());?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label"><?php echo lang('edit_user_fname_label');?></label>
                            <?php echo form_input($first_name);?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label"><?php echo lang('edit_user_lname_label');?></label>
                            <?php echo form_input($last_name);?>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label"><?php echo lang('edit_user_phone_label');?></label>
                            <?php echo form_input($phone);?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label"><?php echo lang('edit_user_password_label');?></label>
                            <?php echo form_input($password);?>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label"><?php echo lang('edit_user_password_confirm_label');?></label>
                            <?php echo form_input($password_confirm);?>
                        </div>
                    </div>
                </div>
                <?php if ($this->ion_auth->is_admin()): ?>

                <h3><?php echo lang('edit_user_groups_heading');?></h3>
                <?php foreach ($groups as $group):?>
                    <?php
                        $gID=$group['id'];
                        $checked = null;
                        $item = null;
                        foreach($currentGroups as $grp) {
                            if ($gID == $grp->id) {
                                $checked= ' checked="checked"';
                            break;
                            }
                        }
                    ?>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                        <label class="form-check-label"><?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?></label>
                    </div>

                <?php endforeach?>

                <?php endif ?>

                <?php echo form_hidden('id', $user[0]->id);?>
                <?php echo form_hidden($csrf); ?>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                    </div>
                </div>
            <?php echo form_close();?>
            
                
                
            
            
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->