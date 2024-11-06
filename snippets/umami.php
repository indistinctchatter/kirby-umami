<?php if(option('debug') !== true && !kirby()->user()): ?>
<script defer data-domain="<?= option('indistinctchatter.umami.domain') ?? parse_url($kirby->url('index'))['host'] ?>" src="<?= option('indistinctchatter.umami.scriptHost') ?? 'https://umami.is' ?>/js/<?= option('floriankarsten.umami.scriptName') ?? 'umami' ?>.js"></script>
<?php endif; ?>
