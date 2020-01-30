<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Siswa
      <small><?php echo __('Ubah'); ?></small>
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
          <?php echo $this->Form->create($student, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('nis');
                echo $this->Form->control('name', ['label' => 'Nama']);
                echo $this->Form->control('userame', ['label' => 'Username']);
                echo $this->Form->control('password', ['label' => 'Kata Sandi', 'type' => 'text']);
                echo $this->Form->control('email');
                echo $this->Form->control('phone');
                echo $this->Form->control('address', ['label' => 'Alamat']);
                echo $this->Form->control('level_id', ['options' => $levels, 'empty' => true]);
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Simpan')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
