<?php snippet('head') ?>

<section class="c-section c--no-padding" role="main">
    <div class="c-contain">

        <div class="c-grid">

            <div class="c-text-content">
                <figure>

                    <div style="background-color:#111;">
                        <div class="u-context u-clip u-bg-center u-bg-cover u-width-full js-lazy"
                        data-src="content/<?= $page->diruri() ?>/<?php echo $page->coverImage()?>"
                        style="padding-bottom:100%; margin-bottom:1rem;">
                        </div>
                    </div>

                    <div class="u-half-transparent a-fade-in">
                        <?php echo $page->column1()->markdown()->widont() ?>
                    </div>

                </figure>
            </div>

            <div class="c-text-content a-fade-in">
                <?php echo $page->column2()->markdown()->widont() ?>
            </div>

            <div class="c-text-content a-fade-in">
                <?php echo $page->column3()->markdown()->widont() ?>
            </div>

        </div>

    </div>
</section>

<?php snippet('footer') ?>
