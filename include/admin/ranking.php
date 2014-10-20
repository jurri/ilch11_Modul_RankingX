<?php
defined ('main') or die ( 'no direct access' );
defined ('admin') or die ( 'only admin access' );

$design = new design ( 'Admins Area', 'Admins Area', 2 );
$design->header();

if(isset($_POST['sub_insert'])){
	$p1 = $_POST['s_p1'];
	$p2 = $_POST['s_p2'];
	$p3 = $_POST['s_p3'];
	$p4 = $_POST['s_p4'];
	$p5 = $_POST['s_p5'];
	$p6 = $_POST['s_p6'];
	$p7 = $_POST['s_p7'];
	$p8 = $_POST['s_p8'];
	$p9 = $_POST['s_p9'];
	$p10 = $_POST['s_p10'];
	$p11 = $_POST['s_p11'];
	$p12 = $_POST['s_p12'];
	$p13 = $_POST['s_p13'];
	$p14 = $_POST['s_p14'];
	$p15 = $_POST['s_p15'];
	db_query("DELETE FROM prefix_uranking");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p1', 1, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p2', 2, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p3', 3, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p4', 4, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p5', 5, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p6', 6, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p7', 7, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p8', 8, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p9', 9, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p10', 10, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p11', 11, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p12', 12, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p13', 13, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p14', 14, now())");
	db_query("INSERT INTO prefix_uranking (ur_uname, ur_platz, ur_dtmcreate) VALUES ('$p15', 15, now())");
}


$erg1 = db_query("SELECT * FROM prefix_user");
$erg2 = db_query("SELECT * FROM prefix_user");
$erg3 = db_query("SELECT * FROM prefix_user");
$erg4 = db_query("SELECT * FROM prefix_user");
$erg5 = db_query("SELECT * FROM prefix_user");
$erg6 = db_query("SELECT * FROM prefix_user");
$erg7 = db_query("SELECT * FROM prefix_user");
$erg8 = db_query("SELECT * FROM prefix_user");
$erg9 = db_query("SELECT * FROM prefix_user");
$erg10 = db_query("SELECT * FROM prefix_user");
$erg11 = db_query("SELECT * FROM prefix_user");
$erg12 = db_query("SELECT * FROM prefix_user");
$erg13 = db_query("SELECT * FROM prefix_user");
$erg14 = db_query("SELECT * FROM prefix_user");
$erg15 = db_query("SELECT * FROM prefix_user");
$erg_p1 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 1"));
$erg_p2 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 2"));
$erg_p3 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 3"));
$erg_p4 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 4"));
$erg_p5 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 5"));
$erg_p6 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 6"));
$erg_p7 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 7"));
$erg_p8 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 8"));
$erg_p9 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 9"));
$erg_p10 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 10"));
$erg_p11 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 11"));
$erg_p12 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 12"));
$erg_p13 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 13"));
$erg_p14 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 14"));
$erg_p15 = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking WHERE ur_platz = 15"));
$erg_time = db_fetch_assoc(db_query("SELECT * FROM prefix_uranking ORDER BY ur_dtmcreate DESC"));
$erg_doppelt = db_query("SELECT count(*) zahl, ur_uname FROM prefix_uranking GROUP BY ur_uname");
?>

<style type="text/css">
<!--
.Stil1 {color: #333333}
.Stil2 {color: #FF0000}
-->
</style>
<?php
while($row = db_fetch_assoc($erg_doppelt)){
	if($row['ur_uname'] == "-"){
		echo "<b>Felder sind entweder nicht gef&uuml;llt oder Member kommen doppelt vor :)</b><br/>";
	}else{
		echo "<font color='#ff0000'><b>".$row['ur_uname']."</b></font><br/>";
	}
}
?>
<p class="Stil1"> Die-Couch-Potatoes Rangliste - Stand <?php echo $erg_time['ur_dtmcreate']; ?> Uhr</p>
<form name="form1" method="post" action="?ranking">
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
	echo "<select name='s_p1'><option>-</option>";
	while($row = db_fetch_assoc($erg1)){
		if($row['name'] == $erg_p1['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
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
        <span class="Stil1">
<?php
	echo "<select name='s_p2'><option>-</option>";
	while($row = db_fetch_assoc($erg2)){
		if($row['name'] == $erg_p2['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>			
		</span>    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/3.jpg" width="60" height="60" /><br />
    <span class="Stil1">
<?php
	echo "<select name='s_p3'><option>-</option>";
	while($row = db_fetch_assoc($erg3)){
		if($row['name'] == $erg_p3['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>		
	</span>
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
        <span class="Stil1">
<?php
	echo "<select name='s_p4'><option>-</option>";
	while($row = db_fetch_assoc($erg4)){
		if($row['name'] == $erg_p4['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>			
		</span>    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/5.jpg" width="60" height="60" /><br />
        <span class="Stil1">
<?php
	echo "<select name='s_p5'><option>-</option>";
	while($row = db_fetch_assoc($erg5)){
		if($row['name'] == $erg_p5['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>			
		</span></div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/6.jpg" width="60" height="60" /><br />
    <span class="Stil1">
<?php
	echo "<select name='s_p6'><option>-</option>";
	while($row = db_fetch_assoc($erg6)){
		if($row['name'] == $erg_p6['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>	
	</span></div>
    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/7.jpg" width="60" height="60" /><br />
    <span class="Stil1">
<?php
	echo "<select name='s_p7'><option>-</option>";
	while($row = db_fetch_assoc($erg7)){
		if($row['name'] == $erg_p7['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>		
	</span></div>
    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/8.jpg" width="60" height="60" /><br />
        <span class="Stil1">
<?php
	echo "<select name='s_p8'><option>-</option>";
	while($row = db_fetch_assoc($erg8)){
		if($row['name'] == $erg_p8['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>			
		</span>    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/9.jpg" width="60" height="60" /><br />
    <span class="Stil1">
<?php
	echo "<select name='s_p9'><option>-</option>";
	while($row = db_fetch_assoc($erg9)){
		if($row['name'] == $erg_p9['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>		
	</span>    </div>
    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/10.jpg" width="60" height="60" /><br />
    <span class="Stil1">
<?php
	echo "<select name='s_p10'><option>-</option>";
	while($row = db_fetch_assoc($erg10)){
		if($row['name'] == $erg_p10['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>		
	</span></div>
    <br />
    </div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"><img src="/11.jpg" width="60" height="60" /><br />
        <span class="Stil1">
<?php
	echo "<select name='s_p11'><option>-</option>";
	while($row = db_fetch_assoc($erg11)){
		if($row['name'] == $erg_p11['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>			
		</span></div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/12.jpg" width="60" height="60" /><br />
        <span class="Stil1">
<?php
	echo "<select name='s_p12'><option>-</option>";
	while($row = db_fetch_assoc($erg12)){
		if($row['name'] == $erg_p12['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>			
		</span>    </div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/13.jpg" width="60" height="60" /><br />
        <span class="Stil1">
<?php
	echo "<select name='s_p13'><option>-</option>";
	while($row = db_fetch_assoc($erg13)){
		if($row['name'] == $erg_p13['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>			
		</span></div>
    </td>
    <td><div align="center"></div></td>
    <td><div align="center"><img src="/14.jpg" width="60" height="60" /><br />
    <span class="Stil1">
<?php
	echo "<select name='s_p14'><option>-</option>";
	while($row = db_fetch_assoc($erg14)){
		if($row['name'] == $erg_p14['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>		
	</span></div>
    <br /> 
    </div></td>
    <td><div align="center"></div></td>
    <td><div align="center">
    <td><div align="center"><img src="/15.jpg" width="60" height="60" /><span class="Stil1">
<?php
	echo "<select name='s_p15'><option>-</option>";
	while($row = db_fetch_assoc($erg15)){
		if($row['name'] == $erg_p15['ur_uname']){
			echo "<option selected>".$row['name']."</option>";
		}else{
			echo "<option>".$row['name']."</option>";
		}
	}
	echo "</select>";	 
?>		
	</span><br />
      </p>
</div></td>
  </tr>
</table>
<input name="sub_insert" value="insert" type="submit"/>
</form>
<?php
$design->footer();
?>
