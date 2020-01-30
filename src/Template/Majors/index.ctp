<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Kompetensi Keahlian

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
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
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('No') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Nama') ?></th>
                  <th scope="col" class="actions text-right"><?= __('') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($majors as $major): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= h($major->name) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $major->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $major->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $major->id], ['confirm' => __('Are you sure you want to delete # {0}?', $major->id), 'class'=>'btn btn-danger btn-xs']) ?>
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