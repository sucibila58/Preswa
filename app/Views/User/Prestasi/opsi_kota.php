<div class="form-group col-md-6">
    <label>Kota</label>
    <select class="form-control" name="kota" id="kota" required="required">
        <option value="">-- Pilih Kota --</option>
        <?php
        foreach ($data_kota as $dataKota) {
        ?>
        <option value="<?php echo $dataKota['id_kota'];?>"><?php echo $dataKota['nama_kota'];?></option>
        <?php } ?>
    </select>
</div>
<div style="clear:both;"></div>