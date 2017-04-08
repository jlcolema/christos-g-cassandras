			</div>

			<?php if ( ! is_page( 'home' ) ) : ?>

				<div class="secondary" role="complementary">

					<h3>Sidebar</h3>

					<p>For items like search, related news, categories, etc.</p>

				</div>

			<?php endif; ?>

		</div>

	</main>

	<div id="pre-footer" class="pre-footer">

		<div class="wrap">

			<div class="h-card pre-footer-h-card">

				<div class="h-card-section">

					<div class="u-logo">

						<?php get_template_part( 'inc/logo' ); ?>

					</div>

					<ul class="affiliations">

						<li class="u-url">

							<a href="http://www.bu.edu/eng" rel="external">College of Engineering</a>

						</li>

						<li class="u-url">

							<a href="http://www.bu.edu/eng/departments/se" rel="external">Division of Systems Engineering</a>

						</li>

						<li class="u-url">

							<a href="http://www.bu.edu/systems" rel="external">Center for Information &amp; Systems Engineering</a>

						</li>

					</ul>

				</div>

				<div class="h-card-section">

					<div class="p-name">Christos G. Cassandras</div>

					<ul class="positions">

						<li class="p-job-title">Distinguished Professor of Engineering</li>

						<li class="p-job-title">Head, Division of Systems Engineering</li>

						<li class="p-job-title">Professor of Electrical and Computer Engineering</li>

					</ul>

					<div class="p-adr">

						<div class="p-organization-name">Boston University</div>

						<div class="p-street-address">15 St. Mary&rsquo;s St.</div>

						<span class="p-locality">Brookline,</span>

						<span class="p-region">MA</span>

						<span class="p-postal-code">02446</span>

					</div>

					<div class="p-tel">

						<span class="p-label">Tel:</span> (617) 353-7154

					</div>

					<div class="p-tel fax">

						<span class="p-label">Fax:</span> (617) 353-4830

					</div>

					<div class="u-email">

						<span class="p-label">Email:</span> <a href="mailto:cgc@bu.edu">cgc@bu.edu</a>

					</div>

				</div>

				<div class="h-card-section">

					<div class="p-geo">

						<a href="https://maps.google.com/maps?ll=42.349494,-71.106669&z=15&t=m&hl=en-US&gl=US&mapclient=embed&q=15%20St%20Marys%20St%20Brookline%2C%20MA%2002446" rel="external">

							<picture>

								<source srcset="<?php bloginfo( 'template_directory' ); ?>/assets/img/map-small.png" media="(min-width: 800px)">

								<img srcset="<?php bloginfo( 'template_directory' ); ?>/assets/img/map-large.png" alt="A very nice description.">

							</picture>

						</a>

					</div>

				</div>

			</div>

		</div>

	</div>

	<footer id="footer" class="footer" role="contentinfo">

		<div class="wrap">

			<p id="copyright" class="copyright">Copyright <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <span>All rights reserved.</span></p>

			<div class="site-by">

				Site by <a href="http://academicwebpages.com" rel="external">Academic Web Pages</a>

			</div>

		</div>

	</footer>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<script>

		window.jQuery || document.write( '<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery.js"><\/script>' )

	</script>

	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/global.js"></script>

	<?php wp_footer(); ?>

</body>

</html>
