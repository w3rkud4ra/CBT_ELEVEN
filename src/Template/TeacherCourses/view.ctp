<section class="content-header">
  <h1>
    Teacher Course
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
            <dt scope="row"><?= __('Tahun Ajaran') ?></dt>
            <dd><?= h($teacherCourse->tahun_ajaran) ?></dd>
            <dt scope="row"><?= __('Semester') ?></dt>
            <dd><?= h($teacherCourse->semester) ?></dd>
            <dt scope="row"><?= __('Teacher') ?></dt>
            <dd><?= $teacherCourse->has('teacher') ? $this->Html->link($teacherCourse->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $teacherCourse->teacher->id]) : '' ?></dd>
            <dt scope="row"><?= __('Course') ?></dt>
            <dd><?= $teacherCourse->has('course') ? $this->Html->link($teacherCourse->course->name, ['controller' => 'Courses', 'action' => 'view', $teacherCourse->course->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($teacherCourse->id) ?></dd>
            <dt scope="row"><?= __('Total Hours') ?></dt>
            <dd><?= $this->Number->format($teacherCourse->total_hours) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($teacherCourse->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($teacherCourse->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
