<style>
  div.container4 {
      height: 7em;
      position: relative;
  }
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Kumpulan File
  </h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo __('Upload File Gambar atau Audio'); ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php echo $this->Form->create(null, ['role' => 'form', 'enctype' => 'multipart/form-data']); ?>
          <div class="box-body no-padding"><br />
            <div class = "col-md-4 col-sm-12">
              <?php
                echo "<label>Upload file</label>";
                echo $this->Form->file('file', ['class' => 'form-control'])."<br />";
              ?>
            </div>
            <div class = "col-md-4 col-sm-12">
              <?php
                echo $this->Form->control('name', ['label'=>'Nama file']);
              ?>
            </div>
            <div class = "col-md-4 col-sm-12">
              <?php
                echo "<label>Jenis file</label>";
                echo $this->Form->select('type', ['Gambar', 'Audio'], ['class' => 'form-control']);
              ?>
            </div>
          </div>
          <!-- /.box-body -->
        <?php echo $this->Form->submit(__('Simpan', ['class'=>'btn btn-success btn-sm'])); ?>
        <?php echo $this->Form->end(); ?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->
</section>
<!-- Main content -->
<section class="content-header">
  <div class="box-tools" style = "padding-bottom:10px; margin-top:-30px">
    <?=$this->Form->create("", ['type' => 'get'])?>
      <div class="input-group input-group-sm" style="width: 150px;">
        <input type="text" name="keyword" class="form-control pull-right" placeholder="<?php echo __('Cari'); ?>">
        <div class="input-group-btn">
          <button class="btn btn-default"><i class="fa fa-search"></i></button>
        </div>
      </div>
    <?=$this->Form->end()?>
  </div>
  <div class = "row">
  <?php foreach ($managerFiles as $managerFile): ?>
    <div class = "col-md-4">
      <div class="box box-solid">
        <div class="box-header with-border">
          <?php 
            if (h($managerFile->type) == 0) {
              echo "<i class='fa fa-file-photo-o'></i>";
            }else if(h($managerFile->type) == 1){
              echo "<i class='fa fa-file-audio-o'></i>";
            }
          ?>
          <h3 class="box-title"><?= h($managerFile->name) ?></h3>
          <div class="pull-right"><?= $this->Form->postLink(__(''), ['action' => 'delete', $managerFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $managerFile->id), 'class'=>'btn btn-danger btn-xs fa fa-trash']) ?></div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class = "container4"><center>
          <?php 
            if (h($managerFile->type) == 0) {
              echo $this->Html->image("../upload/".$managerFile->file, ['height' => '120px']);
            }else if(h($managerFile->type) == 1){
              //  echo $this->Html->media("../upload/".$managerFile->file);
              ?>
              <audio controls>
                  <source src="<?='../upload/'.$managerFile->file?>" type="audio/mp3">
              </audio>
              <?php
            }
          ?>
          </center>
          </div>
          <br />
          <center>
          <small>
          <?php
            if (h($managerFile->type) == 0) {
              echo "Gambar";
            }else if (h($managerFile->type) == 1) {
              echo "Audio";
            }else{
              echo "Tidak ada Format";
            }
          ?>
          </small>
          </center>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <?php
  $paginator = $this->Paginator->setTemplates([
    'number'=>'<li class = "page-item"><a href="{{url}}" class = "page-link">{{text}}</a></li>',
    'current'=>'<li class = "page-item active"><a href="{{url}}" class = "page-link">{{text}}</a></li>',
    'first'=>'<li class = "page-item"><a href="{{url}}" class = "page-link">&laquo;</a></li>',
    'last'=>'<li class = "page-item"><a href="{{url}}" class = "page-link">&raquo;</a></li>',
    'prevActive'=>'<li class = "page-item"><a href="{{url}}" class = "page-link">Previous</a></li>',
    'nextActive'=>'<li class = "page-item"><a href="{{url}}" class = "page-link">Next</a></li>',
  ]);
?>
<div class = "pull-right">
  <nav>
    <ul class = 'pagination'>
      <?php
        echo $paginator->first();
        if ($paginator->hasPrev()) {
          # code...
          echo $paginator->prev();
        }
        echo $paginator->numbers();
        if ($paginator->hasNext()) {
          # code...
          echo $paginator->next();
        }
        echo $paginator->last();
      ?>
    </ul>
  </nav>
</div>


</section>