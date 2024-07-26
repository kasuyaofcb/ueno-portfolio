<?php get_header(); ?>

  <main>
    <div class="each-page-content-wrapper">
      <h2 class="section__title">
        <span class="en">Contact</span>
        <span class="ja">お問合せ</span>
      </h2>
      <div class="wrapper">
        <ul class="contact-text">
          <li>お立ち寄りいただきありがとうございます。</li>
          <li>下記の項目をご入力ください。</li>
        </ul>

        <dl class="contact-container">
          <dt>
            <label for="name">お名前</label>
          </dt>
          <dd>
            <input type="text" id="name" name="name" autocomplete="given-name" required>
          </dd>
          <dt>
            <label for="email">メールアドレス</label>
          </dt>
          <dd>
            <input type="email" id="email" name="e-mail" autocomplete="email" required>
          </dd>
          <dt>
            <label for="message">お問合内容</label>
          </dt>
          <dd>
            <textarea class="message-box" id="message" name="message" required>
      </textarea>
          </dd>
        </dl>
        <div class="btn">
          <input id="confirm-btn" value="確認する">
        </div>

      </div>
    </div><!-- each-page-content-wrapper -->
  </main>


 <?php get_footer(); ?>