<section class="content-header">
  <h1>
    Course
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
            <dd><?= h($course->name) ?></dd>
            <dt scope="row"><?= __('Level') ?></dt>
            <dd><?= $course->has('level') ? $this->Html->link($course->level->name, ['controller' => 'Levels', 'action' => 'view', $course->level->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($course->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($course->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($course->modified) ?></dd>
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
          <h3 class="box-title"><?= __('Exams') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($course->exams)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Tahun Ajaran') ?></th>
                    <th scope="col"><?= __('Schedule Start') ?></th>
                    <th scope="col"><?= __('Schedule End') ?></th>
                    <th scope="col"><?= __('Kkm') ?></th>
                    <th scope="col"><?= __('Duration') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Course Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($course->exams as $exams): ?>
              <tr>
                    <td><?= h($exams->id) ?></td>
                    <td><?= h($exams->name) ?></td>
                    <td><?= h($exams->tahun_ajaran) ?></td>
                    <td><?= h($exams->schedule_start) ?></td>
                    <td><?= h($exams->schedule_end) ?></td>
                    <td><?= h($exams->kkm) ?></td>
                    <td><?= h($exams->duration) ?></td>
                    <td><?= h($exams->status) ?></td>
                    <td><?= h($exams->created) ?></td>
                    <td><?= h($exams->modified) ?></td>
                    <td><?= h($exams->course_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Exams', 'action' => 'view', $exams->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Exams', 'action' => 'edit', $exams->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Exams', 'action' => 'delete', $exams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exams->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
          <h3 class="box-title"><?= __('Question Courses') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($course->question_courses)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Tahun Ajaran') ?></th>
                    <th scope="col"><?= __('Total Question') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Teacher Id') ?></th>
                    <th scope="col"><?= __('Course Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($course->question_courses as $questionCourses): ?>
              <tr>
                    <td><?= h($questionCourses->id) ?></td>
                    <td><?= h($questionCourses->tahun_ajaran) ?></td>
                    <td><?= h($questionCourses->total_question) ?></td>
                    <td><?= h($questionCourses->created) ?></td>
                    <td><?= h($questionCourses->modified) ?></td>
                    <td><?= h($questionCourses->teacher_id) ?></td>
                    <td><?= h($questionCourses->course_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'QuestionCourses', 'action' => 'view', $questionCourses->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'QuestionCourses', 'action' => 'edit', $questionCourses->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'QuestionCourses', 'action' => 'delete', $questionCourses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionCourses->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
          <h3 class="box-title"><?= __('Questions') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($course->questions)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Question') ?></th>
                    <th scope="col"><?= __('Option 1') ?></th>
                    <th scope="col"><?= __('Option 2') ?></th>
                    <th scope="col"><?= __('Option 3') ?></th>
                    <th scope="col"><?= __('Option 4') ?></th>
                    <th scope="col"><?= __('Option 5') ?></th>
                    <th scope="col"><?= __('Question Media') ?></th>
                    <th scope="col"><?= __('Option1 Media') ?></th>
                    <th scope="col"><?= __('Option2 Media') ?></th>
                    <th scope="col"><?= __('Option3 Media') ?></th>
                    <th scope="col"><?= __('Option4 Media') ?></th>
                    <th scope="col"><?= __('Option5 Media') ?></th>
                    <th scope="col"><?= __('Correct Answer') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Course Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($course->questions as $questions): ?>
              <tr>
                    <td><?= h($questions->id) ?></td>
                    <td><?= h($questions->question) ?></td>
                    <td><?= h($questions->option_1) ?></td>
                    <td><?= h($questions->option_2) ?></td>
                    <td><?= h($questions->option_3) ?></td>
                    <td><?= h($questions->option_4) ?></td>
                    <td><?= h($questions->option_5) ?></td>
                    <td><?= h($questions->question_media) ?></td>
                    <td><?= h($questions->option1_media) ?></td>
                    <td><?= h($questions->option2_media) ?></td>
                    <td><?= h($questions->option3_media) ?></td>
                    <td><?= h($questions->option4_media) ?></td>
                    <td><?= h($questions->option5_media) ?></td>
                    <td><?= h($questions->correct_answer) ?></td>
                    <td><?= h($questions->created) ?></td>
                    <td><?= h($questions->modified) ?></td>
                    <td><?= h($questions->course_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Questions', 'action' => 'view', $questions->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Questions', 'action' => 'edit', $questions->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questions', 'action' => 'delete', $questions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questions->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
          <h3 class="box-title"><?= __('Teacher Courses') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($course->teacher_courses)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Tahun Ajaran') ?></th>
                    <th scope="col"><?= __('Semester') ?></th>
                    <th scope="col"><?= __('Total Hours') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Teacher Id') ?></th>
                    <th scope="col"><?= __('Course Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($course->teacher_courses as $teacherCourses): ?>
              <tr>
                    <td><?= h($teacherCourses->id) ?></td>
                    <td><?= h($teacherCourses->tahun_ajaran) ?></td>
                    <td><?= h($teacherCourses->semester) ?></td>
                    <td><?= h($teacherCourses->total_hours) ?></td>
                    <td><?= h($teacherCourses->created) ?></td>
                    <td><?= h($teacherCourses->modified) ?></td>
                    <td><?= h($teacherCourses->teacher_id) ?></td>
                    <td><?= h($teacherCourses->course_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'TeacherCourses', 'action' => 'view', $teacherCourses->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'TeacherCourses', 'action' => 'edit', $teacherCourses->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'TeacherCourses', 'action' => 'delete', $teacherCourses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacherCourses->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
