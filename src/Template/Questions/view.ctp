<section class="content-header">
  <h1>
    Question
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
            <dt scope="row"><?= __('Course') ?></dt>
            <dd><?= $question->has('course') ? $this->Html->link($question->course->name, ['controller' => 'Courses', 'action' => 'view', $question->course->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($question->id) ?></dd>
            <dt scope="row"><?= __('Question Media') ?></dt>
            <dd><?= $this->Number->format($question->question_media) ?></dd>
            <dt scope="row"><?= __('Option1 Media') ?></dt>
            <dd><?= $this->Number->format($question->option1_media) ?></dd>
            <dt scope="row"><?= __('Option2 Media') ?></dt>
            <dd><?= $this->Number->format($question->option2_media) ?></dd>
            <dt scope="row"><?= __('Option3 Media') ?></dt>
            <dd><?= $this->Number->format($question->option3_media) ?></dd>
            <dt scope="row"><?= __('Option4 Media') ?></dt>
            <dd><?= $this->Number->format($question->option4_media) ?></dd>
            <dt scope="row"><?= __('Option5 Media') ?></dt>
            <dd><?= $this->Number->format($question->option5_media) ?></dd>
            <dt scope="row"><?= __('Correct Answer') ?></dt>
            <dd><?= $this->Number->format($question->correct_answer) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($question->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($question->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Question') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($question->question); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Option 1') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($question->option_1); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Option 2') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($question->option_2); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Option 3') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($question->option_3); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Option 4') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($question->option_4); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Option 5') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($question->option_5); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Answers') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($question->answers)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Selected Answer') ?></th>
                    <th scope="col"><?= __('Score') ?></th>
                    <th scope="col"><?= __('Student Id') ?></th>
                    <th scope="col"><?= __('Question Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($question->answers as $answers): ?>
              <tr>
                    <td><?= h($answers->id) ?></td>
                    <td><?= h($answers->selected_answer) ?></td>
                    <td><?= h($answers->score) ?></td>
                    <td><?= h($answers->student_id) ?></td>
                    <td><?= h($answers->question_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Answers', 'action' => 'view', $answers->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Answers', 'action' => 'edit', $answers->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Answers', 'action' => 'delete', $answers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answers->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
