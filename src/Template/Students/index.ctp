<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Siswa

    <div class="pull-right"><?php echo $this->Html->link(__('Tambah'), ['action' => 'add'], ['class'=>'btn btn-success btn-sm']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('Data'); ?></h3>

          <div class="box-tools">
            <?=$this->Form->create("", ['type' => 'get'])?>
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="keyword" class="form-control pull-right" placeholder="<?php echo __('Cari'); ?>">
                <div class="input-group-btn">
                  <button class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            <?=$this->Form->end()?>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="example2" class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('No') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('nis') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Nama') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('kata sandi') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Kelas') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($students as $student): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= h($student->nis) ?></td>
                  <td><?= h($student->name) ?></td>
                  <td><?= h($student->userame) ?></td>
                  <td><?= h($student->password) ?></td>
                  <td><?= h($student->email) ?></td>
                  <td><?= h($student->phone) ?></td>
                  <td><?= $student->has('level') ? $this->Html->link($student->level->name, ['controller' => 'Levels', 'action' => 'view', $student->level->id]) : '' ?></td>
                  <td class="actions text-center">
                      <?= $this->Html->link(__(''), ['action' => 'view', $student->id], ['class'=>'btn btn-info btn-xs fa fa-eye', 'title' => 'Lihat Data']) ?>
                      <?= $this->Html->link(__(''), ['action' => 'edit', $student->id], ['class'=>'btn btn-warning btn-xs fa fa-pencil', 'title' => 'Uabh Data']) ?>
                      <?= $this->Form->postLink(__(''), ['action' => 'delete', $student->id], ['confirm' => __('Apakah Anda yakin menghapus data siswa # {0}?', $student->name), 'class'=>'btn btn-danger btn-xs fa fa-trash', 'title' => 'Hapus Data']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <?php
        $paginator = $this->Paginator->setTemplates([
          'number'=>'<li class = "page-item"><a href="{{url}}" class = "page-link">{{text}}</a></li>',
          'current'=>'<li class = "page-item active"><a href="{{url}}" class = "page-link">{{text}}</a></li>',
          'first'=>'<li class = "page-item"><a href="{{url}}" class = "page-link">&laquo;</a></li>',
          'last'=>'<li class = "page-item"><a href="{{url}}" class = "page-link">&raquo;</a></li>',
          'prevActive'=>'<li class = "page-item"><a href="{{url}}" class = "page-link">Previous</a></li>',
          'nextActive'=>'<li class = "page-item"><a href="{{url}}" class = "page-link">Next</a></li>',
        ]);
      ?>
      <div class = "pull-right">
        <nav>
          <ul class = 'pagination'>
            <?php
              echo $paginator->first();
              if ($paginator->hasPrev()) {
                # code...
                echo $paginator->prev();
              }
              echo $paginator->numbers();
              if ($paginator->hasNext()) {
                # code...
                echo $paginator->next();
              }
              echo $paginator->last();
            ?>
          </ul>
        </nav>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>

<?php echo $this->Html->css('AdminLTE./bower_components/datatables.net-bs/css/dataTables.bootstrap.min', ['block' => 'css']); ?>

<!-- DataTables -->
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net/js/jquery.dataTables.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net-bs/js/dataTables.bootstrap.min', ['block' => 'script']); ?>

<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
<?php $this->end(); ?>