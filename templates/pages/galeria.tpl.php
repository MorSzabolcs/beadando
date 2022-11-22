<!DOCTYPE html>
<html>
    <body>
        <div id="header">
            <img src="images/kep.jpg" alt="kep"><br><br><br>
        </div>
                <div id="wrapper">
                    <div id="sidebar1">
                        <div class="module">
                            <h3>Hírlevelek</h3>
                            <ul class="list">
                                <li><a href="https://www.ecolinst.hu/index.php/15-hrl/80-hrl2-3">Hírlevél 2020/04</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/15-hrl/79-hrl2-2">Hírlevél 2020/03</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/15-hrl/58-hrl2">Hírlevél 2020/02</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/15-hrl/57-hrl1">Hírlevél 2020/01</a></li>
                            </ul>
                        </div>
                        <div class="module">
                            <h3>Tudástár</h3>
                            <ul class="list">
                                <li><a href="https://www.ecolinst.hu/index.php/gomszoll">Környezetpolitika</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/med">Médiából</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/fil">Filmek</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/sza">Szakanyagok</a></li>
                            </ul>
                        </div>
                        <div class="module">
                            <h3>Lezárt Projektek</h3>
                            <ul class="list">
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/26-climate">Climate Needs Farmers</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/25-valtozatos">A változatosság az élet</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/24-esto">ESTO projekt</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/23-kozertek">Közösségek helyi értékei Európa tükrében</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/22-szolgfejl">Szolgáltatás-fejlesztéssel a fenntartható fejlődésért</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/21-infokozp">Gömörszőlősi információs központ</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/20-svajci">Svájci-Magyar Együttműködési program</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/19-fenntarthato">Fenntartható életmód tudásátadás Gömörszőlősön</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/18-vidtaj">Vidéki táj és tájfajták védelme</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/17-gomorf">Gömör földje</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/16-kornypol">Környezetpolitikai döntések elősegítése</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/15-herman">Herman Ottó nyomában</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/14-avason">Környezeti tudatosság fejlesztése az Avason</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/10-lezproj/12-etalajok">Vidéktől a nagyvárosig - az egészséges talajokért!</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="content2">
                        <?php
                            include('./includes/config.inc.php');
                               
                            $kepek = array();
                            $olvaso = opendir($MAPPA);
                            while (($fajl = readdir($olvaso)) !== false)
                                if (is_file($MAPPA.$fajl)) {
                                    $vege = strtolower(substr($fajl, strlen($fajl)-4));
                                    if (in_array($vege, $TIPUSOK))
                                        $kepek[$fajl] = filemtime($MAPPA.$fajl);            
                                }
                            closedir($olvaso);
                            
                        ?>
                        <div id="galeria">
                            <h2>Galéria</h2>
                            <?php
                            arsort($kepek);
                            foreach($kepek as $fajl => $datum)
                            {
                            ?>
                                <div class="kep">
                                    <a href="<?php echo $MAPPA.$fajl ?>">
                                        <img src="<?php echo $MAPPA.$fajl ?>">
                                    </a>            
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div id="sidebar2">
                        <div class="module">
                            <h3>Pályázatok</h3>
                            <div class="palyazatok">
                                <p><a href="https://www.ecolinst.hu/index.php/mkoze/9-futoprojekt/64-top-gomor-szive-sziv-utjai"><img src="images/palyazat1.jpg" alt="palyazat" width="210px" height="auto"></a></p>
                                <p><a href="https://www.ecolinst.hu/index.php/mkoze/9-futoprojekt/13-eforras"><img src="images/palyazat2.jpg" alt="palyazat" width="210px" height="auto"></a></p>
                                <p><a href="https://www.ecolinst.hu/index.php/mkoze/9-futoprojekt/66-kehop"><img src="images/palyazat3.png" alt="palyazat" width="210px" height="auto"></a></p>
                            </div>
                        </div>
                        <div class="module">
                            <h3>Aktualitások</h3>
                            <ul class="list">
                                <li><a href="https://www.ecolinst.hu/index.php/11-hirek/90-pohanka-vendeghaz-atadas">Új, magas minőségű szálláshellyel bővült az intézeti infrastruktúra</a><br><span>2021.09.21</span></li>
                                <li><a href="https://www.ecolinst.hu/index.php/11-hirek/89-somosi-eletmod-projekt">Zárul a SOMOSI ÉLETMÓD... elnevezésű projekt</a><br><span>2021.04.09</span></li>
                                <li><a href="https://www.ecolinst.hu/index.php/11-hirek/87-fenntarthato-fejlodes-hetvege">Egy hétvége a fenntarthatóság jegyében</a><br><span>2020.10.23</span></li>
                                <li><a href="https://www.ecolinst.hu/index.php/11-hirek/86-komposztfutesu-meleghaz">A komposztfűtésű melegház építése</a><br><span>2020.10.23</span></li>
                                <li><a href="https://www.ecolinst.hu/index.php/11-hirek/85-ideje-mulcsolni">Ideje mulcsolni!</a><br><span>2020.10.23</span></li>
                                <li><a href="https://www.ecolinst.hu/index.php/11-hirek/84-a-napenergia-hasznositasa">A napenergia hasznosítása</a><br><span>2020.10.23</span></li>
                                <li><a href="https://www.ecolinst.hu/index.php/11-hirek/83-fenntarthatosagi-hatasvizsgalatok">Fenntarthatósági hatásvizsgálatok - Egyetemi tananyag mindenkinek</a><br><span>2020.10.16</span></li>
                            </ul>
                        </div>
                        <div class="module">
                            <h3>Futó Projektek</h3>
                            <ul class="list">
                                <li><a href="https://www.ecolinst.hu/index.php/9-futoprojekt/91-zold-forras-ptkf-329-2020">Zöld Forrás</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/9-futoprojekt/88-pohanka-vendeghaz">Pohánka Vendégház</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/9-futoprojekt/74-noplanetb">Nincs B-Bolygó!</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/9-futoprojekt/61-core-orchard">CORE projekt - A hagyományos gyümölcsösökért</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/9-futoprojekt/64-top-gomor-szive-sziv-utjai">TOP - Gömör Szíve - Szív útjai</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/9-futoprojekt/66-kehop">KEHOP - Energiatudatos életmód Gömörben</a></li>
                                <li><a href="https://www.ecolinst.hu/index.php/9-futoprojekt/13-eforras">EFOP - Az élet forrása</a></li>
                            </ul>
                        </div>
                        <div class="module">
                            <h3>Partnereink</h3>
                            <div class="partnereink">
                                <p><a href="https://www.expodom.hu"><img src="images/partnerek1.jpg" width="210px" height="auto"></a></p>
                                <p><a href="https://bpdigital.hu"><img src="images/partnerek2.png" width="210px" height="auto"></a></p>
                                <p><a href="https://fuvar.hu"><img src="images/partnerek3.png" width="210px" height="auto"></a></p>
                                <p><a href="https://mersz.hu"><img src="images/partnerek4.jpg" width="210px" height="auto"></a></p>
                                <p><a href="https://www.szotar.net"><img src="images/partnerek5.png" width="210px" height="auto"></a></p>
                                <p><a href="https://clinident.hu"><img src="images/partnerek6.png" width="210px" height="auto"></a></p>
                                <p><a href="https://benu.hu"><img src="images/partnerek7.png" width="210px" height="auto"></a></p>
                                <p><a href="https://jatekhotel.hu"><img src="images/partnerek8.png" width="210px" height="auto"></a></p>
                                <p><a href="https://solar-kit.hu"><img src="images/partnerek9.png" width="210px" height="auto"></a></p>
                            </div>
                        </div>
                    </div>
                </div>
    </body>
</html>