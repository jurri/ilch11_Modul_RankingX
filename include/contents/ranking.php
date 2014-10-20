<?php
$title = $allgAr['title'].' :: Ranking';
$hmenu = 'Ranking';
$design = new design ( $title , $hmenu );
$design->header();

$x = 0;
$erg = db_query("SELECT * FROM prefix_uranking");
while($row = db_fetch_assoc($erg)){
	$date = $row['ur_dtmcreate'];
	$arr[$x] = $row['ur_uname'];
	$x++;
}
?>

<style type="text/css">
<!--
.Stil1 {color: #333333}
.Stil2 {color: #FF0000}
-->
</style>

<p class="Stil1"> Die-Couch-Potatoes Rangliste - Stand <?php echo $date; ?> Uhr</p>
<table width="600" border="0">
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center">
      <p><img src="/1.jpg" width="60" height="60" /><br />
         <span class="Stil1">
<?php		 
	echo $arr[0];
?>		 
		 </span></p>
      </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/2.jpg" width="60" height="60" /><br />
        <span class="Stil1"><?php echo $arr[1]; ?></span>    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/3.jpg" width="60" height="60" /><br />
    <span class="Stil1"><?php echo $arr[2]; ?></span>
    <br />
    </div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/4.jpg" width="60" height="60" /><br />
        <span class="Stil1"><?php echo $arr[3]; ?></span>    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/5.jpg" width="60" height="60" /><br />
        <span class="Stil1"><?php echo $arr[4]; ?></span></div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/6.jpg" width="60" height="60" /><br />
    <span class="Stil1"><?php echo $arr[5]; ?></span></div>
    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/7.jpg" width="60" height="60" /><br />
    <span class="Stil1"><?php echo $arr[6]; ?></span></div>
    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/8.jpg" width="60" height="60" /><br />
        <span class="Stil1"><?php echo $arr[7]; ?></span>    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/9.jpg" width="60" height="60" /><br />
    <span class="Stil1"><?php echo $arr[8]; ?></span>    </div>
    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/10.jpg" width="60" height="60" /><br />
    <span class="Stil1"><?php echo $arr[9]; ?></span></div>
    <br />
    </div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"><img src="/11.jpg" width="60" height="60" /><br />
        <span class="Stil1"><?php echo $arr[10]; ?></span></div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/12.jpg" width="60" height="60" /><br />
        <span class="Stil1"><?php echo $arr[11]; ?></span>    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/13.jpg" width="60" height="60" /><br />
        <span class="Stil1"><?php echo $arr[12]; ?></span></div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/14.jpg" width="60" height="60" /><br />
    <span class="Stil1"><?php echo $arr[13]; ?></span></div>
    <br /> 
    </div></td>
    <td><div align="center"></div></td>
    <td><div align="center">
    <td><div align="center"><img src="/15.jpg" width="60" height="60" /><span class="Stil1"><?php echo $arr[14]; ?></span><br />
      </p>
</div></td>
  </tr>
</table>
<br>
<br>
<p>Diese Rangliste ist ein Herausforderungssystem !</p>
<p> Jeder kann folgende Mitspieler herausfordern :</p>
<p> 1. alle die in seiner Reihe links neben ihm stehen</p>
<p>2. alle die eine Reihe h&ouml;her rechts von ihm stehen</p>
<p>Die Herausforderung muss im Forum unter &quot;Herausforderungen&quot; gepostet werden. <br />
Der Herausgeforderte muss innerhalb von 10 Tagen das Fordermatch bestreiten, ansonsten gilt das Match als verloren. Ausnahmen: Urlaub, Krankheit, etc. In diesen Fällen bitte im Forum darauf hinweisen.<br />
<br />
<strong> Gewinnt der Herausforderer:</strong><br />
Der Herausforderer nimmt den Platz des Geforderten ein. Dieser und alle anderen  dazwischen rutschen um eine Position nach hinten.</p>
<p> <strong>Gewinnt der Geforderte:</strong> <br />
  Alles bleibt, wie es war. Allerdings muss der Forderer 1 Monat ab dem Tag des Spieles warten, ehe er den gleichen Spieler wieder fordern darf. </p>
<p> <strong>Spielmodus: </strong>Es werden 18 Loch gespielt und der "Level-Kleinere" bestimmt den Kurs (Bei gleichem Level entscheidet der Forderer). Der Forderer muss die 18 Loch mit mind. 1 Schlag Vorsprung gewinnen - bei unentschieden hat der Geforderte seine Position verteidigt.</p>
<p><br>
<p>
<strong>  <span style="color:red">WICHTIG:</span></strong><br /></p>
- Das Ranking auf dieser Seite wird <strong>erst geändert</strong>, wenn das Ergebnis eines Spieles im Forum an der richtigen Stelle gepostet wurde!!!
<br>
- Sobald eine Herausforderung im Forum gepostet wurde, werden die Namen der beiden Spieler in <strong>rote Farbe geändert</strong>. Das bedeutet, dass sie in einer Herausforderung stehen und solange nicht von anderen gefordert werden können. Erst wenn das Ergebnis gepostet wurde, ändert sich die Farbe wieder in schwarz und es kann wieder gefordert werden.
<br>
- Für eine gültige Herausforderung ist die Position des Herausforderers und des Geforderten <strong>zum Zeitpunkt der Herausforderung</strong> entscheidend. Die Forderung bleibt gültig, wenn sich durch ein anderes Spiel zwischendurch die Positionen geändert haben. 
<br>
- <strong>Neue Mitglieder</strong></br> werden quasi unterhalb der Pyramide eingeordnet. Sie d&uuml;rfen <strong>jeden aus der untersten Pyramidenreihe herausfordern !</strong></p>
<p>Das heisst, alle neuen Mitglieder, die in der Pyramide noch nicht geführt sind, sind gleichgestellt und m&uuml;ssen sich nicht untereinander fordern !</p></p>
<?php
$design->footer();
?>
