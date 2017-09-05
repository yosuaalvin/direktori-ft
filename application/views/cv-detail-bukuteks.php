<div class="main-title">
        <h1>Buku Teks</h1>
</div>

      <div class="content">

          <div class="row">

            <div class="col-md-12">

                <?php
                    if(empty($buku_teks)) echo '<h4>Kosong</h4>';
                    $a = 0;
                    $bukutekslengkap = '';
                    foreach($buku_teks as $item):
                      $penulisarray = explode(",",$item->penulis);
                      $jml = count($penulisarray);
                      $penulis = '';
                      for ($x = 0; $x < $jml; $x++) {
                      if ($x!=$jml-1)
                      {
                        $penulis .= implode(' ',array_reverse(explode(' ',$penulisarray[$x]))) . ", ";
                      }
                      else
                      {
                        $penulis .= implode(' ',array_reverse(explode(' ',$penulisarray[$x])));
                      }
                      }
                      $tahun_terbit = "(" . $item->tahun_terbit . ")";
                      $judul_buku = $item->judul_buku;
                      $penerbit = $item->penerbit;
                      $bukutekslengkap = $penulis . " . " . $tahun_terbit . " . " . $judul_buku . " . " . $penerbit . ".";
                      if ($a != $item->tahun_terbit) {
                        if ($a!=0)
                        { ?>
                        </div>
                      <?php }
                        $a = $item->tahun_terbit;

                ?>
                <div class="exp">
                <div class="hgroup" >
                  <h4><?= $item->tahun_terbit?></h4>
                </div>
                <p style="color:black"><?= $bukutekslengkap ?>
                </p>
              <?php } else { ?>
              <?php
                $a = $item->tahun_terbit;
                ?>
                <p style="color:black"><?= $bukutekslengkap ?>
              </p>
            <?php
          }
                endforeach;
                ?>

              </div>

            </div>

          </div>
