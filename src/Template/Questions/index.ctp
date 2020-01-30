<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Questions

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
                  <th scope="col"><?= $this->Paginator->sort('question_media') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('option1_media') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('option2_media') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('option3_media') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('option4_media') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('option5_media') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('correct_answer') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($questions as $question): ?>
                <tr>
                  <td><?= $this->Number->format($question->id) ?></td>
                  <td><?= $this->Number->format($question->question_media) ?></td>
                  <td><?= $this->Number->format($question->option1_media) ?></td>
                  <td><?= $this->Number->format($question->option2_media) ?></td>
                  <td><?= $this->Number->format($question->option3_media) ?></td>
                  <td><?= $this->Number->format($question->option4_media) ?></td>
                  <td><?= $this->Number->format($question->option5_media) ?></td>
                  <td><?= $this->Number->format($question->correct_answer) ?></td>
                  <td><?= h($question->created) ?></td>
                  <td><?= h($question->modified) ?></td>
                  <td><?= $question->has('course') ? $this->Html->link($question->course->name, ['controller' => 'Courses', 'action' => 'view', $question->course->id]) : '' ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $question->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id), 'class'=>'btn btn-danger btn-xs']) ?>
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