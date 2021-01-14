<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="//webservices.plattformad.com/cfe/JSON.ashx?JSONAction=FormProgramsExtended&formid=<?php echo $site['form']['FormID']; ?>&CurriculumCategoryID=<?php echo $site['form']['CurriculumCategoryID']; ?>"></script>

<script type="text/javascript" src="//webservices.plattformad.com/cfe/scripts/JSONObjectCurriculumHandlerCID.js"></script>
<script type="text/javascript" src="//tracking.plattformad.com/"></script>
<script type="text/javascript" src="//artifacts.plattformad.com/repository/scripts/SEOKeywordEngineTracking.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
var __ProgramPleaseSelectText =  "Program Interest";

InitCurriculumDropDown('LocationID','CurriculumID');
</script>
<?php
	if (!empty($site['assets']['js'])):
		foreach ($site['assets']['js'] as $js):
			if(empty($js['region']) || $js['region'] == 'footer'){
				echo '<script type="text/javascript" src="'.$js['src'].'"></script>';
			}
		endforeach;
	endif;
?>

<?php if($site['page']['current']['page'] == 'thankyou'): ?>


	<!-- BEGIN: Marin Software Tracking Script (Confirmation Page) -->
	<script type='text/javascript'>
	var _mTrack = _mTrack || [];
	_mTrack.push(['addTrans', {
	    currency :'USD',
	    items : [{
	        orderId : '<?php echo htmlspecialchars($_GET["EILMLeadID"]); ?>',
	        convType : 'lead',
	    }]
	}]);
	_mTrack.push(['processOrders']);
	(function() {
	    var mClientId = '16680p8z61355';
	    var mProto = (('https:' == document.location.protocol) ? 'https://' : 'http://');
	    var mHost = 'tracker.marinsm.com';
	    var mt = document.createElement('script'); mt.type = 'text/javascript'; mt.async = true; mt.src = mProto + mHost + '/tracker/async/' + mClientId + '.js';
	    var fscr = document.getElementsByTagName('script')[0]; fscr.parentNode.insertBefore(mt, fscr);
	})();
	</script>
	<noscript>
	<img width="1" height="1" src="https://tracker.marinsm.com/tp?act=2&cid=16680p8z61355&script=no" />
	</noscript>
	<!-- END: Copyright Marin Software -->

<?php else: ?>

	<!-- BEGIN: Marin Software Tracking Script (Landing Page) -->
	<script type='text/javascript'>
	var _mTrack = _mTrack || [];
	_mTrack.push(['trackPage']);

	(function() {
	var mClientId = '16680p8z61355';
	var mProto = (('https:' == document.location.protocol) ? 'https://' : 'http://');
	var mHost = 'tracker.marinsm.com';

	var mt = document.createElement('script'); mt.type = 'text/javascript'; mt.async = true; mt.src = mProto + mHost + '/tracker/async/' + mClientId + '.js';
	var fscr = document.getElementsByTagName('script')[0]; fscr.parentNode.insertBefore(mt, fscr);
	})();
	</script>
	<noscript>
	<img width="1" height="1" src="https://tracker.marinsm.com/tp?act=1&cid=16680p8z61355&script=no" />
	</noscript>
	<!-- END: Copyright Marin Software -->


<?php endif; ?>