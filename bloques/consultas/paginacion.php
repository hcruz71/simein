
    <!-- jquery 3.3.1 -->
    <script src="../../assets/vendor/jquery/jquery-3.6.1.min.js"></script>
    <?php


function paginate($reload, $page, $tpages, $adjacents) {
	$prevlabel = "<i class='fa fa-chevron-left'></i>";
	$nextlabel = "<i class='fa fa-chevron-right'></i>";
	$out = '<ul class="pagination">';
	
	// previous label

	if($page==1) {
		$out.= "<li class='disabled'><span><a>$prevlabel</a></span></li>";
	} else if($page==2) {
		$out.= "<li><span><a href='javascript:void(0);' onclick='load(1)' class='btn-primary'>$prevlabel</a></span></li>";
	}else {
		$out.= "<li><span><a href='javascript:void(0);' onclick='load(".($page-1).")' class='btn-primary'>$prevlabel</a></span></li>";

	}
	$out.= "<li><b>Selector</b></li>";
	// next

	if($page<$tpages) {
		$out.= "<li><span><a href='javascript:void(0);' onclick='load(".($page+1).")' class='btn-primary'>$nextlabel</a></span></li>";
	}else {
		$out.= "<li class='disabled'><span><a class='btn-primary'>$nextlabel</a></span></li>";
	}
	
	$out.= "</ul>";


	return $out;
}
?>

