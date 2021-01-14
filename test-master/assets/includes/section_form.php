<section id="requestinfo" class="<?php print ($site['responsive']['form']['collapsible'])?'collapsible':''; ?>">
	<header>Request Info</header>
	<div class="content">
		<form name="enterpriseform" id="enterpriseform" action="http://webservices.plattformpartners.com/ilm/default.ashx" XXaction="<?php print honeypotUrl(); ?>"  method="post" class="enterpriseform" novalidate="novalidate">
			<?php print honeypotField(); ?>
			<input name="FormID" id="FormID" value="<?php echo $site['form']['FormID']; ?>" type="hidden">
			<input name="CampaignID" id="CampaignID" value="<?php echo $site['form']['CampaignID']; ?>" type="hidden">
			<input name="AffiliateLocationID" id="AffiliateLocationID" value="<?php echo $site['form']['AffiliateLocationID']; ?>" type="hidden">
			<input name="VendorID" id="VendorID" value="<?php echo $site['form']['VendorID']; ?>" type="hidden">
			<input name="returntourl" id="returntourl" value="" type="hidden">
			<input name="LocationID" id="LocationID" value="43572" type="hidden">
			<fieldset class="step">
				<legend>Step 1</legend>
				<div class="fields">
					
					<!--<div class="field-wrapper" data-field-name="LocationID" data-field-type="select">
						<label for="LocationID">Curriculum Label</label>
						<div class="field">
							<div class="inner">
								<select name="LocationID" id="LocationID" title="Program" data-validate="required" data-placeholder="Select a Location" data-placeholder-alternate="Select a Location First"></select>
							</div>
						</div>
					</div>-->
					<div class="field-wrapper" data-field-name="CurriculumID" data-field-type="select">
						<label for="CurriculumID">Curriculum</label>
						<div class="field">
							<div class="inner">
								<select name="CurriculumID" id="CurriculumID" title="Program" data-validate="required" data-placeholder="Program of Interest">
								<option value="" selected="selected">Program Interest</option>
								</select>
							</div>
						</div>
					</div>
					<div class="field-wrapper half_left" data-field-name="firstname" data-field-type="text">
						<label for="firstname">First Name</label>
						<div class="field">
							<div class="inner">
								<input name="firstname" id="firstname" value="" placeholder="First Name" title="First Name" type="text" data-validate="required matchTitle matchPlaceholder">
							</div>
						</div>
					</div>
					<div class="field-wrapper half_right" data-field-name="lastname" data-field-type="text">
						<label for="lastname">Last Name</label>
						<div class="field">
							<div class="inner">
								<input name="lastname" id="lastname" value="" placeholder="Last Name" title="Last Name" type="text" data-validate="required matchTitle matchPlaceholder">
							</div>
						</div>
					</div>
					
					<div class="field-wrapper half_left" data-field-name="dayphone" data-field-type="tel">
						<label for="dayphone">Phone</label>
						<div class="field">
							<div class="inner">
								<input name="dayphone" id="dayphone" value="" placeholder="Phone Number" title="Phone" type="tel" data-validate="required phoneUS">
							</div>
						</div>
					</div>
					<div class="field-wrapper half_right" data-field-name="zip" data-field-type="tel">
						<label for="zip">Zip</label>
						<div class="field">
							<div class="inner">
								<input name="zip" id="zip" value="" placeholder="Zip" title="Zip" type="tel" data-validate="required matchPlaceholder zipUS">
							</div>
						</div>
					</div>
					<div class="field-wrapper" data-field-name="email" data-field-type="email">
						<label for="email">Email</label>
						<div class="field">
							<div class="inner">
								<input name="email" id="email" value="" placeholder="Email Address" title="Email" type="email" data-validate="required email">
							</div>
						</div>
					</div>
					<div class="field-wrapper actions" data-field-name="submit" data-field-type="submit">
						<div class="field">
							<button name="submit" id="submit" title="Learn More" type="submit">Learn More</button>
						</div>
					</div>
				</div>
			</fieldset>
			<fieldset class="step">
				<legend>Step 2</legend>
				
			</fieldset>
			<!--<div class="field-wrapper" data-field-name="privacypolicy"  data-field-type="privacypolicy">
				<div class="privacypolicy">
					<a href="privacypolicy.php">Privacy Policy</a>
				</div>
			</div>-->

		</form>
	</div>
</section>