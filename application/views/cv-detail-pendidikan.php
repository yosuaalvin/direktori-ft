<div class="main-title">
        <h1>Riwayat Pendidikan</h1>
</div>

      <div class="content">

          <div class="row">

            <div class="col-md-12">

                <?php
                    $i=0;
                    if(empty($pendidikan)) echo '<h4>Kosong</h4>';
                    foreach($pendidikan as $item):
                ?>
                <div class="exp">
                <div class="hgroup" >
                  <h4><?= $item->tingkat ?> – <?= $item->bidang_ilmu ?> – <?= $item->nama_pt ?> (<?= $item->tahun_masuk?></span> - <span class="current"><?= $item->tahun_lulus ?>)

                </div>
                <!--
                <?php if ($item->tingkat=='D3'||$item->tingkat=='S1') {?>
                <p style="color:black">Judul Tugas Akhir : <?= $item->judul_ta ?><br>
                Pembimbing : <?= $item->pembimbing ?>
                </p>
                <?php } elseif ($item->tingkat=='S2') {?>
                <p style="color:black">Judul Tesis : <?= $item->judul_ta ?><br>
                Pembimbing : <?= $item->pembimbing ?>
                </p>
                <?php } elseif ($item->tingkat=='S3') {?>
                <p style="color:black">Judul Disertasi : <?= $item->judul_ta ?><br>
                Pembimbing : <?= $item->pembimbing ?>
                </p>
                <?php } ?>
                -->
                </div>
                <?php
                    endforeach;
                ?>

            </div>

          </div>

        </div>
