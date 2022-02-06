<?php

function alert ($info){
echo "
<script type='text/javascript'>
$(document).ready(function(){
		alertify.alert('".$info."');
});
</script>
	";
}
function error ($info){
echo "
<script type='text/javascript'>
$(document).ready(function(){
		alertify.error('".$info."');
});
</script>
	";
}
function success ($info){
echo "
<script type='text/javascript'>
$(document).ready(function(){
		alertify.success('".$info."');
});
</script>
	";
}

?>
