<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Question
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
          <?php echo $this->Form->create($question, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('question');
                echo $this->Form->control('option_1');
                echo $this->Form->control('option_2');
                echo $this->Form->control('option_3');
                echo $this->Form->control('option_4');
                echo $this->Form->control('option_5');
                echo $this->Form->control('question_media');
                echo $this->Form->control('option1_media');
                echo $this->Form->control('option2_media');
                echo $this->Form->control('option3_media');
                echo $this->Form->control('option4_media');
                echo $this->Form->control('option5_media');
                echo $this->Form->control('correct_answer');
                echo $this->Form->control('course_id', ['options' => $courses, 'empty' => true]);
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
