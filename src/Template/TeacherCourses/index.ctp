<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Teacher Courses

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
                  <th scope="col"><?= $this->Paginator->sort('semester') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('total_hours') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('teacher_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Kelas') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($teacherCourses as $teacherCourse): ?>
                <tr>
                  <td><?= $this->Number->format($teacherCourse->id) ?></td>
                  <td><?= h($teacherCourse->tahun_ajaran) ?></td>
                  <td><?= h($teacherCourse->semester) ?></td>
                  <td><?= $this->Number->format($teacherCourse->total_hours) ?></td>
                  <td><?= $teacherCourse->has('teacher') ? $this->Html->link($teacherCourse->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $teacherCourse->teacher->id]) : '' ?></td>
                  <td><?= $teacherCourse->has('course') ? $this->Html->link($teacherCourse->course->name, ['controller' => 'Courses', 'action' => 'view', $teacherCourse->course->id]) : '' ?></td>
                  <td><?= $teacherCourse->has('level') ? $this->Html->link($teacherCourse->level->name, ['controller' => 'Levels', 'action' => 'view', $teacherCourse->level->id]) : '' ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $teacherCourse->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teacherCourse->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teacherCourse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacherCourse->id), 'class'=>'btn btn-danger btn-xs']) ?>
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