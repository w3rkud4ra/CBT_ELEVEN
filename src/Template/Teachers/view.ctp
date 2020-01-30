<style>
  .banner{
    height: 150px;
    background-image: linear-gradient(#94d0d3, #cce7ed);
  }
</style>
<div class = "banner">
  <section class="content">
    <h1>
      Guru
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
          <?php echo $this->Html->image('teacher.png', ['class' => 'profile-user-img img-responsive img-circle', 'alt' => 'User profile picture']); ?>
          
          <p class="text-muted text-center" style = "padding-top:20px">NIP. <?= h($teacher->nip) ?></p>
          <h3 class="profile-username text-center"><?= h($teacher->name) ?></h3>
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b><?= __('Username') ?></b><p class = "pull-right"><?= $this->Html->link(__($teacher->user['username']), ['controller' => 'users', 'action' => 'edit', h($teacher->user_id)]) ?></p>
            </li>
            <li class="list-group-item">
              <b><?= __('Email') ?></b><p class = "pull-right"><?= h($teacher->email) ?></p>
            </li>
            <li class="list-group-item">
              <b><?= __('No. Handphone') ?></b><p class = "pull-right"><?= h($teacher->phone) ?></p>
            </li>
            <li class="list-group-item" style = "height:80px">
              <b><?= __('Alamat') ?></b><br /><p class = "pull-right"><?= h($teacher->address) ?></p>
            </li>
          </ul>
          <?php echo $this->Html->link(__('Ubah Data'), ['controller' => 'teachers', 'target' => '_blank','action' => 'viewCert',h($teacher->id)], ['class'=>'btn btn-info btn-block', 'target' =>'_blank']) ?>
          <?php echo $this->Html->link(__('Cetak Data Ujian'), ['controller' => 'teachers', 'target' => '_blank','action' => 'frontCert',h($teacher->id)], ['class'=>'btn btn-success btn-block', 'target' =>'_blank']) ?>
        </div>
      </div>
    </div> 
    <div class="col-md-8">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-address-book-o"></i>
          <h3 class="box-title"><?= __('Mata Pelajaran - Data Input Soal') ?></h3>
          <div class="pull-right"><?php echo $this->Html->link(__('Tambah'), ['controller' => 'QuestionCourses','action' => 'add', $teacher->id], ['class'=>'btn btn-success btn-sm']) ?></div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <?php if (!empty($teacher->question_courses)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('No') ?></th>
                    <th scope="col"><?= __('Tahun Ajaran') ?></th>
                    <th scope="col"><?= __('Mata Pelajaran') ?></th>
                    <th scope="col"><?= __('Jumlah Soal') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Tambah Soal') ?></th>
              </tr>
              <?php 
              $no = 1;
              foreach ($teacher->question_courses as $questionCourses): ?>
              <tr>
                    <td><?= $no++ ?></td>
                    <td><?= h($questionCourses->tahun_ajaran) ?></td>
                    <td><?= h($questionCourses->course->name) ?></td>
                    <td><?= h($questionCourses->total_question) ?></td>
                      <td class="actions text-center">
                      <?= $this->Html->link(__(''), ['controller' => 'questions', 'action' => 'add', $questionCourses->course->id], ['class'=>'btn btn-warning btn-sm fa fa-plus']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
     
    <div class="col-md-8">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-book"></i>
          <h3 class="box-title"><?= __('Mata Pelajaran - Data Mengajar') ?></h3>
          <div class="pull-right"><?php echo $this->Html->link(__('Tambah'), ['controller' => 'TeacherCourses','action' => 'add', $teacher->id], ['class'=>'btn btn-success btn-sm']) ?></div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <?php if (!empty($teacher->teacher_courses)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Tahun Ajaran') ?></th>
                    <th scope="col"><?= __('Semester') ?></th>
                    <th scope="col"><?= __('Kelas') ?></th>
                    <th scope="col"><?= __('Mata Pelajaran') ?></th>
                    <th scope="col"><?= __('Jumlah Jam') ?></th>
                    <th scope="col" class="actions text-center"><?= __('') ?></th>
              </tr>
              <?php 
              $no =1;
              foreach ($teacher->teacher_courses as $teacherCourses): ?>
              <tr>
                    <td><?= $no++ ?></td>
                    <td><?= h($teacherCourses->tahun_ajaran) ?></td>
                    <td><?= h($teacherCourses->semester) ?></td>
                    <td><?= h($teacherCourses->level['name']) ?></td>
                    <td><?= h($teacherCourses->course->name) ?></td>
                    <td><?= h($teacherCourses->total_hours) ?></td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>