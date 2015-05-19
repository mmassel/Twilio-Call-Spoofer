<?php
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$str=implode(" ",str_split($_REQUEST['Digits']));
echo "<Response><Say voice='woman' language='en-gb'>
You entered " . $str. "  I will connect you now.  One moment please.;
</Say>
<Dial callerId='+[enterTwilioNumber]'>
<Number>+1"
. $_REQUEST['Digits'] . "</Number>
</Dial>
</Response>";
?>
