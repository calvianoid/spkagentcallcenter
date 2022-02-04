<div class="page-header">
    <h1>Perangkingan</h1>
</div>


<div class="col-lg-12">

    <div class="row">
        <div class="panel panel-primary">

            <div class="panel-heading">Table Perhitungan</div>
            <div class="panel-body">
                <h2>Data Alternatif Terhadap Kriteria</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <!-- <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <?php
                            $no = 1;
                            $table = $this->page->getData('table1');
                            // foreach ($table as $item => $value) {
                            //     foreach ($value as $heading => $itemValue) {
                            //         ?>
                            //         <th class="text-center"><?php //echo $heading ?></th>
                            //         <?php
                            //     }
                            //     break;
                            // }
                            // ?>
                        </tr> -->
                        <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">C1</th>
                            <th class="text-center">C2</th>
                            <th class="text-center">C3</th>
                            <th class="text-center">C4</th>
                            <th class="text-center">C5</th>
                            <th class="text-center">C6</th>
                            <th class="text-center">C7</th>
                            <th class="text-center">C8</th>
                            <th class="text-center">C9</th>
                            <th class="text-center">C10</th>
                            <th class="text-center">C11</th>
                            <th class="text-center">C12</th>
                            <th class="text-center">C13</th>
                            <th class="text-center">C14</th>
                        </tr>
                        <?php
                        foreach ($table as $item => $value) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no ?></td>
                                <?php
                                foreach ($value as $itemValue) {
                                    ?>
                                    <td class="text-center"><?php echo $itemValue ?></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>

                    </table>
                </div>

                <h2>Normalisasi R</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <!-- <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <?php
                            $no = 1;
                            $table = $this->page->getData('table2');
                            //foreach ($table as $item => $value) {
                                //foreach ($value as $heading => $itemValue) {
                                    ?>
                                    <th class="text-center"><?php //echo $heading ?></th>
                                    <?php
                                //}
                                //break;
                            //}
                            ?>
                        </tr> -->
                        <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">C1</th>
                            <th class="text-center">C2</th>
                            <th class="text-center">C3</th>
                            <th class="text-center">C4</th>
                            <th class="text-center">C5</th>
                            <th class="text-center">C6</th>
                            <th class="text-center">C7</th>
                            <th class="text-center">C8</th>
                            <th class="text-center">C9</th>
                            <th class="text-center">C10</th>
                            <th class="text-center">C11</th>
                            <th class="text-center">C12</th>
                            <th class="text-center">C13</th>
                            <th class="text-center">C14</th>
                        </tr>
                        <?php
                        foreach ($table as $item => $value) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no ?></td>
                                <?php
                                foreach ($value as $itemValue) {
                                    ?>
                                    <td class="text-center"><?php echo $itemValue ?></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                    </table>
                </div>

                <div class="table-responsive ">
                    <table class="table table-bordered">
                        <tr class="active">
                            <th class="col-md-1 text-center">Kode</th>
                            <th class="text-center">Kriteria</th>
                            <th class="text-center">Sifat</th>
                            <th class="text-center">Nilai min /max</th>
                        </tr>
                        <?php
                        $dataSifat = $this->page->getData('dataSifat');
                        $no = 1;
                        foreach ($dataSifat as $item => $value) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $value->kriteria ?></td>
                                <td class="text-center"><?php echo $value->nama_kriteria ?></td>
                                <td class="text-center"><?php echo $value->sifat ?></td>
                                <td class="text-center">
                                    <?php
                                    $valueMinMax = $dataSifat = $this->page->getData('valueMinMax');
                                    if (isset($valueMinMax['min' . $item])) {
                                        echo $valueMinMax['min' . $item] . ' - Minimal';
                                    }
                                    if (isset($valueMinMax['max' . $item])) {
                                        echo $valueMinMax['max' . $item] . ' - Maksimal';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                    </table>
                </div>

                <h2>Proses Perangkingan</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <!-- <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <?php
                            $no = 1;
                            $table = $this->page->getData('table3');
                            // foreach ($table as $item => $value) {
                            //     foreach ($value as $heading => $itemValue) {
                            //         ?>
                            //         <th class="text-center"><?php //echo $heading ?></th>
                            //         <?php
                            //     }
                            //     break;
                            // }
                            ?>
                        </tr> -->
                        <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">C1</th>
                            <th class="text-center">C2</th>
                            <th class="text-center">C3</th>
                            <th class="text-center">C4</th>
                            <th class="text-center">C5</th>
                            <th class="text-center">C6</th>
                            <th class="text-center">C7</th>
                            <th class="text-center">C8</th>
                            <th class="text-center">C9</th>
                            <th class="text-center">C10</th>
                            <th class="text-center">C11</th>
                            <th class="text-center">C12</th>
                            <th class="text-center">C13</th>
                            <th class="text-center">C14</th>
                        </tr>
                        <?php
                        foreach ($table as $item => $value) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no ?></td>
                                <?php
                                foreach ($value as $itemValue) {
                                    ?>
                                    <td class="text-center"><?php echo $itemValue ?></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                    </table>
                </div>

                <div class="table-responsive ">
                    <table class="table table-bordered">
                        <tr class="active">
                            <th class="col-md-1 text-center">Kode</th>
                            <th class="text-center">Kriteria</th>
                            <th class="text-center">Bobot</th>
                        </tr>
                        <?php
                        $bobot = $this->page->getData('bobot');
                        $no = 1;
                        foreach ($bobot as $item => $value) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $value->kriteria ?></td>
                                <td class="text-center"><?php echo $value->nama_kriteria ?></td>
                                <td class="text-center"><?php echo $value->bobot ?></td>

                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                    </table>
                </div>
                <h2>Hasil Perangkingan</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <!-- <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <?php
                            $no = 1;
                            $table = $this->page->getData('tableFinal');
                            // foreach ($table as $item => $value) {
                            //     foreach ($value as $heading => $itemValue) {
                            //         ?>
                            //         <th class="text-center"><?php //echo $heading ?></th>
                            //         <?php
                            //     }
                            //     break;
                            // }
                            ?>
                        </tr> -->
                        <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">C1</th>
                            <th class="text-center">C2</th>
                            <th class="text-center">C3</th>
                            <th class="text-center">C4</th>
                            <th class="text-center">C5</th>
                            <th class="text-center">C6</th>
                            <th class="text-center">C7</th>
                            <th class="text-center">C8</th>
                            <th class="text-center">C9</th>
                            <th class="text-center">C10</th>
                            <th class="text-center">C11</th>
                            <th class="text-center">C12</th>
                            <th class="text-center">C13</th>
                            <th class="text-center">C14</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Rangking</th>
                        </tr>
                        <?php
                        foreach ($table as $item => $value) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no ?></td>
                                <?php
                                foreach ($value as $itemValue) {
                                    ?>
                                    <td class="text-center"><?php echo $itemValue ?></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                    </table>
                </div>

                <?php
                $table = $this->page->getData('tableFinal');
                foreach ($table as $item => $value) {
                    if ($value->Rangking == 1) {
                        ?>
                        <div class="alert alert-success" role="alert">
                            <h4><b>Kesimpulan : </b> Berdasarkan hasil perhitungan yang sudah dilakukan menggunakan metode Simple Additive 
                                Weighting (SAW) rangking teratas merupakan karyawan baru agent call center yang direkomendasikan untuk dipilih.
                                <!-- <?php //echo $value->Universitas ?> dengan nilai <?php //echo $value->Total ?> -->
                            </h4>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

</div>

