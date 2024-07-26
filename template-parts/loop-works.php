<a class="works-page-each-link" href="<?php the_permalink(); ?>">
            <div class="works__content-wrapper--gray">
              <div class="works__content--left">
                <?php the_post_thumbnail('medium'); ?>
              </div>
              <div class="works__content--right">
                <div class="content-area">
                  <h3><?php the_title(); ?></h3>
                  <p><?php
                      if (mb_strlen(get_the_content(), 'UTF-8') > 80) {
                        $content = mb_substr(strip_tags(get_the_content()), 0, 80, 'UTF-8');
                        echo $content . '……';
                      } else {
                        echo strip_tags(get_the_content());
                      }
                      ?></p>
                </div>

                <div class="category-area">
                  <?php
                  // カスタムフィールド「skills」を取得して表示
                  $skills = get_field('skills');
                  if ($skills) : ?>
                    <ul class="works__content--skill">
                      <?php foreach ($skills as $skill) : ?>
                        <li><?php echo esc_html($skill); ?></li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>

                  <ul class="works__content--rink">
                    <?php the_category(); ?>
                  </ul>
                  <!-- <p class="site-address">
                        <?php echo esc_html(get_post_meta(get_the_ID(), 'url', true)); ?>
                      </p> -->

                </div>
              </div>
            </div>
          </a>