						</div>
					</article>
					<!--<aside class="<?php print getClasses('aside'); ?>">
						<div class="content">
							<?php
								if(!$site['responsive']['form']['abovecontent'] && $site['page']['current']['page'] !== 'thankyou'){
									include('section_form.php');
								}
								include_once('assets/includes/sidebar.php');
							?>
						</div>
					</aside>-->
				</div>
			</main>


			<?php if($site['page']['current']['page'] !== 'thankyou'): ?>
				<section class="lower">
					<?php include_once('assets/includes/lower.php'); ?>
				</section>
			<?php endif; ?>


			<footer id="page-footer" role="footer" class="<?php print getClasses('footer'); ?>">
				<div class="content">
					<!--<nav role="footer navigation">
						<ul>
							<?php echo buildMenu($site['menu'], 'footer'); ?>
						</ul>
					</nav>-->
					
						<!--<span class="copyright">&copy; <?php echo $site['global']['copyright']; ?></span>
						<span class="sitelogo"><?php echo $site['global']['title']; ?></span>-->
						<p>© Copyright East-West University, 2017. All Rights Reserved.</p>
					
				</div>
				<div class="responsiveVersion" aria-hidden="true">
					<div data-responsive="desktop"></div>
					<div data-responsive="tablet"></div>
					<div data-responsive="mobile"></div>
				</div>
			</footer>
		</div>
		<div id="page-footer-scripts">
			<?php include_once('assets/includes/footer_scripts.php'); ?>
		</div>
	</body>
</html>