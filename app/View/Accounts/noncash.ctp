<div class="row">
    <?php echo $this->Element('user-navigation'); ?>
    <div class="large-12 columns">
        <ul class="breadcrumbs">
            <li><a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'dashboard')) ?>">Dashboard</a></li>
            <li><a href="<?php echo Router::url(array('controller' => 'accounts', 'action' => 'index')) ?>">Akun</a></li>
            <li><a href="#">Tambah</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="large-8 large-offset-2 columns">
        <h2 class="special-font">Tambah Data Akun Non-Tunai</h2>
        <p class="lead">Isi formulir di bawah ini untuk menambahkan data akun non-tunai Anda.</p>
        
        <!-- Form Tambah -->
        
        <form id="formID" action="<?php echo Router::url(array('controller' => 'accounts', 'action' => 'noncash'))?>" method="POST" class="custom">
        <fieldset>
            <legend>Data Akun</legend>
            <div class="row">
                <div class="large-5 columns">
                    <label>Nama Bank</label>
                    <input type="text" name="data[Account][bank_name]"/>
                    <label>Atas Nama</label>
                    <input type="text" name="data[Account][name]"/>                                                                                                    
                    <div class="row collapse">
                        <label>Saldo Awal</label>
                        <div class="large-9 columns">
                            <input type="text" name="data[Account][balance]"/>
                        </div>
                            <div class="large-3 columns">
                            <span class="postfix">Rp</span>
                        </div>
                    </div>                 
                </div>                
                <div class="large-6 columns">
                    <label>Nomor Rekening</label>
                    <input type="text" name="data[Account][number]"/>
                    <label>Cabang</label>
                    <input type="text" name="data[Account][branch]"/>
                </div>
            </div>
        </fieldset>
        <input type="submit" class="success button" value="Simpan Data"/>
    </form>
    </div>
   
</div>

<script>
    $(function() {
        $(document).foundation();        
        $('#formID').validationEngine();
    });
</script>