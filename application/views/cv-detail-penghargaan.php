<div class="main-title">
        <h1>Penghargaan</h1>
</div>

      <div class="content">

          <div class="row">

            <div class="col-md-12">

                <?php
                    if(empty($penghargaan)) echo '<h4>Kosong</h4>';
                    $a = 0;

                    foreach($penghargaan as $item):

                      if ($a != $item->tahun_penghargaan) {
                        if ($a!=0)
                        { ?>
                        </div>
                      <?php }
                        $a = $item->tahun_penghargaan;

                ?>
                <div class="exp">
                <div class="hgroup" >
                  <h4><?= $item->tahun_penghargaan?></h4>
                </div>
                <p style="color:black">Pada tahun <?= $item->tahun_penghargaan?> sebagai <?= $item->sebagai ?> pada <?= $item->nama_penghargaan?> dari <?= $item->pemberi_penghargaan ?>
                </p>
              <?php } else { ?>
              <?php
                $a = $item->tahun_penghargaan; ?>
                <p style="color:black">Pada tahun <?= $item->tahun_penghargaan?> sebagai <?= $item->sebagai ?> pada <?= $item->nama_penghargaan?> dari <?= $item->pemberi_penghargaan ?>
                </p>
            <?php
          }
                endforeach;
                ?>

              </div>

            </div>

          </div>
