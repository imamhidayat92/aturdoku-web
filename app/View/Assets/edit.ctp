<div class="row">
    <?php echo $this->Element('user-navigation'); ?>
    <div class="large-12 columns">
        <ul class="breadcrumbs">
            <li><a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'dashboard')) ?>">Dashboard</a></li>
            <li><a href="<?php echo Router::url(array('controller' => 'assets', 'action' => 'index')) ?>">Data Aset</a></li>
            <li><a href="#">Ubah</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="large-8 large-offset-2 columns">
        <h2 class="special-font">Ubah Data Aset</h2>
        <p class="lead">Ubah formulir di bawah ini untuk melakukan pengubahan data aset Anda.</p>
        
        <!-- Form Edit -->
        
        <form action="<?php echo Router::url(array('controller' => 'assets', 'action' => 'edit'))?>" method="POST">
        <fieldset>
            <legend>Data Aset</legend>
            <div class="row">
                <div class="large-4 columns">
                    <div class="row collapse">
                        <label>Nilai</label>
                        <div class="large-9 columns">
                            <input type="text" name="data[Asset][value]" value="<?php echo $data['Asset']['value']?>"/>
                        </div>
                        <div class="large-3 columns">
                            <span class="postfix">Rupiah</span>
                        </div>
                    </div>
                  <label>Tahun</label>
                  <input type="text" name="data[Asset][year]" value="<?php echo $data['Asset']['year']?>"/>
                </div>
                <div class="large-8 columns">
                    <label>Nama Aset</label>
                    <input name="data[Asset][name]" value="<?php echo $data['Asset']['name']?>"/>
                </div>
            </div>
        </fieldset>
        <input type="submit" class="success button" value="Simpan Data"/>
    </form>
    </div>
   
</div>