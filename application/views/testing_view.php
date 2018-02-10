<table cellspacing="0" cellpadding="1" border="1">
        <tr>
            <td>Branch Name</td>
            <td>Amount</td>
            <td>Balance</td>
        </tr>
    ';
foreach ($branches as $b){
$tbl .= '<tr>
        <td>'.$b['branch'].'</td>

    ';
}
foreach($amount as $a){
$tbl .= '
        <td>'.$a['amount_charged'].'</td>

    </tr>'
    ;

    }
$tbl.='

</table>
';
$pdf->writeHTML($tbl, true, false, false, false, '');


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_016.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+
?>
