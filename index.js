panel.plugin("indistnctchatter/umami", {
	components: {
		'k-umami-view': {
			template: `
				<k-panel-inside class="k-umami-view">
						<k-section>
							<iframe v-if="sharedLink" umami-embed v-bind:src="sharedLink + '&embed=true&theme=light&background=%23efefef'" scrolling="no" frameborder="0" loading="lazy" class="umami-iframe"></iframe>
							<?php /* <script async src="https://plausible.io/js/embed.host.js"></script> */ ?>
							<div style="margin-top: 30px; text-align: center;" v-else>
								<code>You need to set indistinctchatter.umami.sharedLink in config.php</code>
							</div>
						</k-section>
				</k-panel-inside>
			`,
			props: ["sharedLink"],
		},
	},
});