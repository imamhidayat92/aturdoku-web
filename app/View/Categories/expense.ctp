<div class="row">
    <?php echo $this->Element('user-navigation'); ?>
    <div class="large-12 columns">
        <ul class="breadcrumbs">
            <li><a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'dashboard')) ?>">Dashboard</a></li>
            <li><a href="#">Atur Kategori</a></li>
        </ul>
    </div>
    <div class="large-3 columns">
        <h1 class="aturdoku-nav-head aturdoku-bg-black">KATEGORI</h1>
    </div>
    <div class="large-9 columns">
        <h2 class="special-font underline">Daftar Seluruh Kategori Pengeluaran</h2>
        <table>
            <thead>
                <tr>
                    <th width="40">No.</th>
                    <th width="200">Nama</th>
                    <th width="350">Deskripsi</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 0; foreach ($categories as $category) { ?>
                <tr>
                    <?php 
                        $nomor++;
                    ?>
                    <td><?php echo $nomor; ?></td>
                    <td><a href="<?php echo Router::url(array('controller' => 'categories', 'action' => 'view', $category['Category']['id'])) ?>"><?php echo $category['Category']['name']; ?></a></td>
                    <td><?php echo $category['Category']['description']; ?></td>
                    <td style="text-align: center;">
                        <?php echo $this->Html->link('Edit', array('controller' => 'categories','action' => 'edit', $category['Category']['id']), array('class' => 'tiny button secondary aturdoku-button')); ?>
                        <?php echo $this->Html->link('Hapus', array('controller' => 'categories','action' => 'delete', $category['Category']['id']), array('class' => 'tiny button alert aturdoku-button')); ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <form action="<?php echo Router::url(array('controller' => 'categories', 'action' => 'add_expense'))?>" method="POST">
            <fieldset>
                <legend>Tambah Kategori Pengeluaran</legend>
                <div class="row">
                    <div class="large-4 columns">
                      <label>Nama</label>
                        <input type="text" name="data[Category][name]"/>
                    </div>
                    <div class="large-8 columns">
                        <label>Deskripsi</label>
                        <input type="text" name="data[Category][description]" />
                    </div>
                </div>
            </fieldset>
            <input type="submit" class="alert button" value="Tambah Kategori"/>
        </form>
    </div>
</div>
