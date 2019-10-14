    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title"><?php echo anchor('auth/create_user', 'Create a new user', array('title' => 'Create a new user!','class'=>'btn btn-info btn-primary'));?>&nbsp
            <?php echo anchor('auth/groups', 'Manage groups', array('title' => 'Manage groups!','class'=>'btn btn-info btn-primary'));?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Group Permission</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($users as $user)
                    {
                        echo '<tr>';
                        echo '<td>'.$user->first_name.'</td>';
                        echo '<td>'.$user->last_name.'</td>';
                        echo '<td>'.$user->username.'</td>';
                        echo '<td>'.$user->email.'</td>';
                        echo '<td>';
                        foreach($user->groups as $group){
                            echo $group->name.'<br>';
                        }
                        echo '</td>';
                        if($user->active){
                            echo '<td>Active</td>';
                        }else{
                            echo '<td>Inactive</td>';
                        }
                        echo '<td>
                                <a href="'.site_url('auth/edit_user/'.$user->id ).'"  class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>';
                                if($user->active){
                                    echo '<a href="'.site_url('auth/deactivate/'. $user->id ).'" class="btn btn-secondary btn-xs"><i class="fa fa-trash-o"></i> Deactive</a>';
                                }else{
                                    echo '<a href="'.site_url('auth/activate/'. $user->id ).'" class="btn btn-primary btn-xs"><i class="fa fa-trash-o"></i> Activate</a>';
                                    echo '<a href="'.site_url('auth/delete_user/'. $user->id ).'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a>';
                                }
                        echo'
                                </td>';
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->


