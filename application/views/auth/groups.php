    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title"><?php echo anchor('auth/create_group', 'Create a new group', array('title' => 'Create a new group!','class'=>'btn btn-info btn-primary'));?>&nbsp
              </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th>Group Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($groups as $row)
                    {
                        echo '<tr>';
                        echo '<td>'.$row->name.'</td>';
                        echo '<td>'.$row->description.'</td>';
                        echo '<td>
                                <a href="'.site_url('auth/edit_group/'.$row->id ).'"  class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                <a href="'.site_url('auth/delete_group/'.$row->id ).'"  class="btn btn-danger btn-xs"><i class="fa fa-edit"></i> Delete</a>';
                                
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


