<?= $this->extend('temp/headfoot'); ?>
<?= $this->Section('pages'); ?>
<!-- isi konten -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header text-center">
        <div class="container-fluid">
            <div class="container">
                    <h1 class="text-bold">Kasus Covid - 19</h1>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $kasus [0]['positif']; ?></h3>

                            <p>Total Pasien Positif</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-hospital"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $kasus [0]['sembuh']; ?></h3>

                            <p>Total Pasien Sembuh</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-male"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3><?= $kasus [0]['meninggal']; ?></h3>

                            <p>Total Pasien Meniggal</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bed"></i>
                        </div>                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?= $global ['value']; ?></h3>

                            <p>Global Data</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- datatable -->
                <div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Provinsi</th>
                                    <th>Positif</th>
                                    <th>Sembuh</th>
                                    <th>Meninggal</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                                        <?php foreach ($provinsi as $prv => $value) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $value['attributes']['Provinsi']; ?></td>
                                                <td><?= $value['attributes']['Kasus_Posi']; ?></td>
                                                <td><?= $value['attributes']['Kasus_Semb']; ?></td>
                                                <td><?= $value['attributes']['Kasus_Meni']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>                                
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- isi konten -->
<?= $this->endSection('pages'); ?>