<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Exams

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('tahun_ajaran') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('schedule_start') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('schedule_end') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('kkm') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('duration') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($exams as $exam): ?>
                <tr>
                  <td><?= $this->Number->format($exam->id) ?></td>
                  <td><?= h($exam->name) ?></td>
                  <td><?= h($exam->tahun_ajaran) ?></td>
                  <td><?= h($exam->schedule_start) ?></td>
                  <td><?= h($exam->schedule_end) ?></td>
                  <td><?= $this->Number->format($exam->kkm) ?></td>
                  <td><?= $this->Number->format($exam->duration) ?></td>
                  <td><?= $this->Number->format($exam->status) ?></td>
                  <td><?= h($exam->created) ?></td>
                  <td><?= h($exam->modified) ?></td>
                  <td><?= $exam->has('course') ? $this->Html->link($exam->course->name, ['controller' => 'Courses', 'action' => 'view', $exam->course->id]) : '' ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $exam->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $exam->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $exam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exam->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>