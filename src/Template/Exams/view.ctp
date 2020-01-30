<section class="content-header">
  <h1>
    Exam
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Name') ?></dt>
            <dd><?= h($exam->name) ?></dd>
            <dt scope="row"><?= __('Tahun Ajaran') ?></dt>
            <dd><?= h($exam->tahun_ajaran) ?></dd>
            <dt scope="row"><?= __('Course') ?></dt>
            <dd><?= $exam->has('course') ? $this->Html->link($exam->course->name, ['controller' => 'Courses', 'action' => 'view', $exam->course->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($exam->id) ?></dd>
            <dt scope="row"><?= __('Kkm') ?></dt>
            <dd><?= $this->Number->format($exam->kkm) ?></dd>
            <dt scope="row"><?= __('Duration') ?></dt>
            <dd><?= $this->Number->format($exam->duration) ?></dd>
            <dt scope="row"><?= __('Status') ?></dt>
            <dd><?= $this->Number->format($exam->status) ?></dd>
            <dt scope="row"><?= __('Schedule Start') ?></dt>
            <dd><?= h($exam->schedule_start) ?></dd>
            <dt scope="row"><?= __('Schedule End') ?></dt>
            <dd><?= h($exam->schedule_end) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($exam->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($exam->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Levels') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($exam->levels)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Major Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($exam->levels as $levels): ?>
              <tr>
                    <td><?= h($levels->id) ?></td>
                    <td><?= h($levels->name) ?></td>
                    <td><?= h($levels->created) ?></td>
                    <td><?= h($levels->modified) ?></td>
                    <td><?= h($levels->major_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Levels', 'action' => 'view', $levels->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Levels', 'action' => 'edit', $levels->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Levels', 'action' => 'delete', $levels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $levels->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Results') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($exam->results)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Total Grade') ?></th>
                    <th scope="col"><?= __('Exam Id') ?></th>
                    <th scope="col"><?= __('Student Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($exam->results as $results): ?>
              <tr>
                    <td><?= h($results->id) ?></td>
                    <td><?= h($results->total_grade) ?></td>
                    <td><?= h($results->exam_id) ?></td>
                    <td><?= h($results->student_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Results', 'action' => 'view', $results->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Results', 'action' => 'edit', $results->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Results', 'action' => 'delete', $results->id], ['confirm' => __('Are you sure you want to delete # {0}?', $results->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
