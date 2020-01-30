<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Question Courses

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
                  <th scope="col"><?= $this->Paginator->sort('tahun_ajaran') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('total_question') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('teacher_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($questionCourses as $questionCourse): ?>
                <tr>
                  <td><?= $this->Number->format($questionCourse->id) ?></td>
                  <td><?= h($questionCourse->tahun_ajaran) ?></td>
                  <td><?= $this->Number->format($questionCourse->total_question) ?></td>
                  <td><?= h($questionCourse->created) ?></td>
                  <td><?= h($questionCourse->modified) ?></td>
                  <td><?= $questionCourse->has('teacher') ? $this->Html->link($questionCourse->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $questionCourse->teacher->id]) : '' ?></td>
                  <td><?= $questionCourse->has('course') ? $this->Html->link($questionCourse->course->name, ['controller' => 'Courses', 'action' => 'view', $questionCourse->course->id]) : '' ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $questionCourse->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $questionCourse->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $questionCourse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionCourse->id), 'class'=>'btn btn-danger btn-xs']) ?>
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