<div class="main-title">
        <h1>Nara Sumber</h1>
</div>

      <div class="content">

          <div class="row">

            <div class="col-md-12">

                <?php
                    if(empty($seminar)) echo '<h4>Kosong</h4>';
                    $a = 0;

                    foreach($seminar as $item):
                      $date = DateTime::createFromFormat("Y-m-d", $item->waktu);
                      if ($a != $date->format("Y")) {
                        if ($a!=0)
                        { ?>
                        </div>
                      <?php }
                        $a = $date->format("Y");

                ?>
                <div class="exp">
                <div class="hgroup" >
                  <h4><?= $date->format("Y")?></h4>
                </div>
                <p style="color:black">Pada tahun <?= $date->format("Y") ?> sebagai <?= $item->sebagai ?> pada <?= $item->nama_seminar?>, <?= $item->tema?> bertempat di <?= $item->tempat ?>
                </p>
              <?php } else { ?>
              <?php
                $a = $date->format("Y"); ?>
                <p style="color:black">Pada tahun <?= $date->format("Y") ?> sebagai <?= $item->sebagai ?> pada <?= $item->nama_seminar?>, <?= $item->tema?> bertempat di <?= $item->tempat ?>
                </p>
            <?php
          }
                endforeach;
                ?>

              </div>

            </div>

          </div>
