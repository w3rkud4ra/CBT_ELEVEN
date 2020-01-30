<section class="content-header">
  <h1>
    Question Course
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
            <dd><?= h($questionCourse->tahun_ajaran) ?></dd>
            <dt scope="row"><?= __('Teacher') ?></dt>
            <dd><?= $questionCourse->has('teacher') ? $this->Html->link($questionCourse->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $questionCourse->teacher->id]) : '' ?></dd>
            <dt scope="row"><?= __('Course') ?></dt>
            <dd><?= $questionCourse->has('course') ? $this->Html->link($questionCourse->course->name, ['controller' => 'Courses', 'action' => 'view', $questionCourse->course->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($questionCourse->id) ?></dd>
            <dt scope="row"><?= __('Total Question') ?></dt>
            <dd><?= $this->Number->format($questionCourse->total_question) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($questionCourse->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($questionCourse->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
