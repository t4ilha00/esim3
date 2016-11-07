<h1>Muokkaa asiakkaiden tietoja</h1>
<FORM action="muokkaa_asiakkaat" method="POST">
<TABLE>
<TR><TH>Etunimi</TH><TH>Sukunimi</TH><TH>Email</TH></TR>

<?php
foreach ($asiakkaat as $rivi) {
	echo '<tr><td>';
	echo '<input type="text" name="en[]" value="'.$rivi['etunimi'].'"></td>';
	echo '<td><input type="text" name="sn[]" value="'.$rivi['sukunimi'].'"></td>';
	echo '<td><input type="text" name="email[]" value="'.$rivi['email'].'"></td>';
	echo '<input type="hidden" name="id[]" value="'.$rivi['id_asiakas'].'"></td>';
	echo '</tr>';
}
?>
</TABLE>
<a href="listaa"><button>Peruuta</button></a>
<input type="submit" name="btnTallenna" value="Tallenna">
</FORM>