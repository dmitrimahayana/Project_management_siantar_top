<!-- Page heading -->
<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-building-o"></i> Purchase Order</h2>
    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
        <a href="index.html"><i class="fa fa-home"></i> Home</a> 
        <!-- Divider -->
        <span class="divider">/</span> 
        <a href="#" class="bread-current">PO</a>
    </div>
    <div class="clearfix"></div>
</div>
<!-- Page heading ends -->

<div class="col-md-12">
    <div class="widget wgreen">
        <div class="widget-head">
            <div class="pull-left">Data List PO</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a href="#" class="wclose">
                    <i class="fa fa-times"></i>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content" style="padding: 10px">
            <!-- Modal Section -->

            <button type="button" class="btn btn-sm btn-primary" onclick="window.location.href= '<?= base_url().$this->uri->segment(1, 0).'/'.$this->uri->segment(2, 0).'/viewNewPo' ?>'"><i class="fa fa-plus fa-fw"></i> Tambahkan PO</button>
            <div class="page-tables">
                <div class="table-responsive">
                    <div class="clearfix">
                        <br />
                    </div>
                    <table cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%" style="white-space: nowrap">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>Kode PO</th>
                                <th>Nama PO</th>
                                <th>Total Harga</th>
                                <th>Kode Proyek</th>
                                <th>Kode PP</th>
                                <th>Kode Supplier</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listPo as $key => $item) {
                                $id_bar = $item['PERMINTAAN_PEMBELIAN_ID'];
                                ?>
                                <tr id="item_<?php echo $id_bar; ?>">
                                    <td>
                                        <?= $key + 1 ?>
                                    </td>
                                    <td>
                                        <?= $item['KODE_PO'] ?>
                                    </td>
                                    <td>
                                        <?= $item['PURCHASE_ORDER_NAMA'] ?>
                                    </td>
                                    
                                    <td><?= $item['TOTAL'] ?></td>
                                    <td><?= $item['PROJECT_KODE'] ?></td>
                                    <td>
                                        <?= $item['PERMINTAAN_PEMBELIAN_KODE'] ?>
                                    </td>
                                    <td><?= $item['SUPPLIER_KODE'] ?></td>
                                    <td><?= $item['STATUS_PO_NAMA'] ?></td>
                                    
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-xs dropdown-toggle btn-info" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?= base_url(). $this->uri->segment(1, 0) . '/' . $this->uri->segment(2, 0) . '/viewDetail/' .$item['PURCHASE_ORDER_ID']  ?>"><i class="fa fa-eye fa-fw"></i> Detail</a></li>
                                                <li><a href="javascript:fillUpdate(<?php echo $id_bar; ?>)"><i class="fa fa-refresh fa-fw"></i> Ubah</a></li>
                                                <li><a href="javascript:confirmDelete(<?php echo $id_bar; ?>)"><i class="fa fa-trash-o fa-fw"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
            <!-- End of Modal Section -->
        </div>

    </div>
</div>
