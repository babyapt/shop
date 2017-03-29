<div class="container mymenu">
	<div class="row">
		<div class="col-xs-6 c1" data-href="?page=shop">
			<span class="fa-stack fa-lg">
				<i class="fa fa-square fa-stack-2x"></i>
				<i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
			</span><br/>
			<span>
				ร้านค้า
			</span>
		</div>
		<div class="col-xs-6 c2">
			<span class="fa-stack fa-lg">
				<i class="fa fa-square fa-stack-2x"></i>
				<i class="fa fa-address-card fa-stack-1x fa-inverse"></i>
			</span><br/>
			<span>
				ค้างชำระ
			</span>
		</div>
		<div class="col-xs-6 c3">
			<span class="fa-stack fa-lg">
				<i class="fa fa-square fa-stack-2x"></i>
				<i class="fa fa-area-chart fa-stack-1x fa-inverse"></i>
			</span><br/>
			<span>
				รายงาน
			</span>
		</div>
		<div class="col-xs-6 c4">
			<span class="fa-stack fa-lg">
				<i class="fa fa-square fa-stack-2x"></i>
				<i class="fa fa-dashboard fa-stack-1x fa-inverse"></i>
			</span><br/>
			<span>
				Admin
			</span>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$('.mymenu>.row>div').on('click',function(e){
			e.preventDefault();
			location.href=$(this).data('href'); 
	})
});
</script>
