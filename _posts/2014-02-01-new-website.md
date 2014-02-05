---
layout: post
title: New Website!
---

I decided it was time to build a new website. So here we are, back to basics. I hope you like it.

### Peace out word press

I decided that I couldn't support the Wordpress abomination any longer and had to scrap it. For a seasoned PHP developer, having to cope with Wordpress' template system is such a heartache I couldn't face it any longer.

Here's a little snippet taken from one of the templates in Wordpress. Its from a file called 'content.php'. So its a PHP file right? Wrong. Its riddled with pieces of html and php all jumbled together so tightly coupled they are practically married.

{% highlight php linenos %}
<?php /* Show the post's tags, categories, and a comment link. */ ?>
     <footer class="entry-meta">

          <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'nuwhite' ), 'after' => '</div>' ) ); ?>
                  <?php endif; ?> <!-- End if 'post' == get_post_type() ?> -->

          <?php edit_post_link( __( 'Edit', 'nuwhite' ) ); ?>

<div class="entry-meta">
{% endhighlight %}

What even is this mess!? PHP is not a markup language, and it saddens me to see php abused like this.

Sorry for the rant, have a look around my new site and let me know what you think.