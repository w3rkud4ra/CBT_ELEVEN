<style>
  .banner{
    height: 150px;
    background-image: linear-gradient(#94d3ac, #ccedd2);
  }
</style>
<div class = "banner">
  <section class="content">
    <h1>
      Siswa
      <small><?php echo __('Data Profil'); ?></small>
    </h1>
  </section>
  </div>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Informasi'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php echo $this->Html->image('student.png', ['class' => 'profile-user-img img-responsive img-circle', 'alt' => 'User profile picture']); ?>
          
          <p class="text-muted text-center" style = "padding-top:20px">NIS. <?= h($student->nis) ?></p>
          <h3 class="profile-username text-center"><?= h($student->name) ?></h3>
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b><?= __('Kelas') ?></b><p class = "pull-right"><?= $student->has('level') ? $this->Html->link($student->level->name, ['controller' => 'Levels', 'action' => 'view', $student->level->id]) : '' ?></p>
            </li>
            <li class="list-group-item">
              <b><?= __('Kom. Keahlian') ?></b><p class = "pull-right"><?= $student->has('level') ? $this->Html->link($student->level->major->name, ['controller' => 'Majors', 'action' => 'view', $student->level->major->id]) : '' ?></p>
            </li>
            <li class="list-group-item">
              <b><?= __('Username') ?></b><p class = "pull-right"><?= h($student->userame) ?></p>
            </li>
            <li class="list-group-item">
              <b><?= __('Kata Sandi') ?></b><p class = "pull-right"><?= h($student->password) ?></p>
            </li>
            <li class="list-group-item">
              <b><?= __('Email') ?></b><p class = "pull-right"><?= h($student->email) ?></p>
            </li>
            <li class="list-group-item">
              <b><?= __('No. Handphone') ?></b><p class = "pull-right"><?= h($student->phone) ?></p>
            </li>
            <li class="list-group-item" style = "height:80px">
              <b><?= __('Alamat') ?></b><br /><p class = "pull-right"><?= h($student->address) ?></p>
            </li>
          </ul>
          <?php echo $this->Html->link(__('Cetak Kartu Ujian'), ['controller' => 'students', 'target' => '_blank','action' => 'viewCert',h($student->id)], ['class'=>'btn btn-info btn-block', 'target' =>'_blank']) ?>
          <?php echo $this->Html->link(__('Cetak Hasil Ujian'), ['controller' => 'students', 'target' => '_blank','action' => 'frontCert',h($student->id)], ['class'=>'btn btn-success btn-block', 'target' =>'_blank']) ?>
        </div>
      </div>
    </div> 
    <div class="col-md-8">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-address-book-o"></i>
          <h3 class="box-title"><?= __('Hasil Ujian') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($student->results)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Total Grade') ?></th>
                    <th scope="col"><?= __('Exam Id') ?></th>
                    <th scope="col"><?= __('Student Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($student->results as $results): ?>
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
