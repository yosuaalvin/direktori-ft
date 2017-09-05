<div class="main-title">
        <h1>Pengabdian Masyarakat</h1>
</div>

      <div class="content">

          <div class="row">

            <div class="col-md-12">

                <?php
                    if(empty($pengabdian)) echo '<h4>Kosong</h4>';
                    $a = 0;

                    foreach($pengabdian as $item):

                      if ($a != $item->tahun_mulai) {
                        if ($a!=0)
                        { ?>
                        </div>
                      <?php }
                        $a = $item->tahun_mulai;

                ?>
                <div class="exp">
                <div class="hgroup" >
                  <h4><?= $item->tahun_mulai?></h4>
                </div>
                <p style="color:black"><?= $item->judul ?>.
                Sumber Dana : <?= $item->sumber_dana ?>.
                </p>
              <?php } else { ?>
              <?php
                $a = $item->tahun_mulai; ?>
                <p style="color:black"><?= $item->judul ?>.
                Sumber Dana : <?= $item->sumber_dana ?>.
              </p>
            <?php
          }
                endforeach;
                ?>

              </div>

            </div>

          </div>
