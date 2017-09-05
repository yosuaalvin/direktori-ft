
								<div class="main-title">
									<h1>Profil</h1>
								</div>
<div class="content">

  <!--Block content-->
  <div class="block-content margBSmall">

  <div class=" profile margBSmall">
                    <h1 style="text-transform: capitalize;"><?= $identitas->nama_lengkap ?></h1>
                    <h3 style="text-transform: capitalize;">Dosen <?= $identitas->prodi ?> UNDIP</h3>
                </div>

  <!--Row-->
  <div class="row">
    <div class="col-md-12">
      <p style="color:black"><?= $identitas->deskripsi_singkat ?></p>
    </div>


  </div>
  <!--End row-->

  </div>
  <!--End block content-->



  <!--Block content-->
  <div class="block-content">

    <div class="info">

      <!--Row-->
			<!--
      <div class="row">
        <div class="col-md-12">

          <ul class="info-list clearfix">
            <li><span class="inf" style="text-align:left;padding-left:20px">Jabatan Fungsional</span>  <span class="value" style="text-align:left;padding-left:20px"><?= $identitas->jabatan_fungsional ?></span></li>
            <li><span class="inf" style="text-align:left;padding-left:20px">Jabatan Struktural</span>  <span class="value" style="text-align:left;padding-left:20px"><?= $identitas->jabatan_struktural ?></span></li>
            <li><span class="inf" style="text-align:left;padding-left:20px">NIDN</span>  <span class="value" style="text-align:left;padding-left:20px"><?= $identitas->nidn ?></span></li>
            <li><span class="inf" style="text-align:left;padding-left:20px">Tempat Lahir</span>  <span class="value" style="text-align:left;padding-left:20px"><?= $identitas->tempat_lahir ?></span></li>
            <li><span class="inf" style="text-align:left;padding-left:20px">Tanggal Lahir</span>  <span class="value" style="text-align:left;padding-left:20px"><?= date_format(date_create($identitas->tanggal_lahir),"d-m-Y") ?></span></li>
            <li><span class="inf" style="text-align:left;padding-left:20px">Alamat Rumah</span>  <span class="value" style="text-align:left;padding-left:20px"><?= $identitas->alamat_rumah ?></span></li>
            <li><span class="inf" style="text-align:left;padding-left:20px">Alamat Kantor</span>  <span class="value" style="text-align:left;padding-left:20px"><?= $identitas->alamat_kantor ?></span></li>
            <li><span class="inf" style="text-align:left;padding-left:20px">Nomor Telepon</span>  <span class="value" style="text-align:left;padding-left:20px"><?= $identitas->kontak_kantor ?></span></li>
            <li><span class="inf" style="text-align:left;padding-left:20px">Alamat E-mail</span>  <span class="value" style="text-align:left;padding-left:20px"><?= $identitas->email ?></span></li>
            <li><span class="inf" style="text-align:left;padding-left:20px"><br><br>Lulusan yang dihasilkan<br><br><br></span>
            <span class="value" style="text-align:left;padding-left:20px">
            <?php
  					$meluluskan = $identitas->meluluskan;
  					if ($meluluskan!='')
  					{
  					preg_match_all("/([^,= ]+):([^,= ]+)/", $meluluskan, $r);
  					$result = array_combine($r[1], $r[2]);
  					?>
                      D3 : <?= $result['D3']?><br>
                      S1 : <?= $result['S1']?><br>
                      Profesi : <?= $result['Pr']?><br>
                      S2 : <?= $result['S2']?><br>
                      S3 : <?= $result['S3']?>
  					<?php
  					}
  					?>
          </span></li>
          <li><span class="inf" style="text-align:left;padding-left:20px">Mata kuliah yang diampu</span>  <span class="value" style="text-align:left;padding-left:20px"><?= $identitas->mk_diampu ?></span></li>
          <li><span class="inf" style="text-align:left;padding-left:20px">Research Interests</span>  <span class="value" style="text-align:left;padding-left:20px"><?= $identitas->research_interests ?></span></li>

          </ul>

        </div>

      </div>
		-->
      <!--End row-->
                  </div>

                </div>
  <!--End block content-->

</div>
