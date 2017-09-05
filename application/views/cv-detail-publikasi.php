<div class="main-title">
        <h1>Publikasi Ilmiah</h1>
</div>

      <div class="content">

          <div class="row">

            <div class="col-md-12">

                <?php
                    if(empty($publikasi)) echo '<h4>Kosong</h4>';
                    $a = 0;
                      $publikasilengkap = '';
                      foreach($publikasi as $item):
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
                        $tahun = "(" . $item->tahun . ")";
                        $judul = $item->judul;
                        $nama_jurnal = "In " . $item->nama_jurnal;
                        $nomor_jurnal = " (" . $item->nomor_jurnal . ")";
                        $publikasilengkap = $penulis . " . " . $tahun . " . " . $judul . " . " . $nama_jurnal . $nomor_jurnal . ".";
                      if ($a != $item->tahun) {
                        if ($a!=0)
                        { ?>
                        </div>
                      <?php }
                        $a = $item->tahun;

                ?>
                <div class="exp">
                <div class="hgroup" >
                  <h4><?= $item->tahun?></h4>
                </div>
                <p style="color:black"><?= $publikasilengkap ?>
                </p>
              <?php } else { ?>
              <?php
                $a = $item->tahun;
                ?>
                <p style="color:black"><?= $publikasilengkap ?>
              </p>
            <?php
          }
                endforeach;
                ?>

              </div>

            </div>

          </div>
