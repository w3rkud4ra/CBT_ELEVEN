<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TeacherCourse $teacherCourse
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Teacher Course
      <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($teacherCourse, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('tahun_ajaran');
                echo $this->Form->control('semester');
                echo $this->Form->control('total_hours');
                echo $this->Form->control('teacher_id', ['options' => $teachers, 'empty' => true]);
                echo $this->Form->control('course_id', ['options' => $courses, 'empty' => true]);
                echo $this->Form->control('level_id', ['options' => $levels, 'empty' => true]);
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
