<?php
/**
 * Template Name: Posts
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>



<div id="app">
<section class="posts-promo has-greyscale theme-dark">
  <div class="grid-lg">
    <div class="posts-promo__grid">
      <header class="posts-promo__header">
        <h2 class="posts-promo__title">Articles</h2>
      </header>

      <div class="posts-promo__content post-feed">
        <div class="post-feed__grid">
          <article class="post" v-for="post in posts">
            <a class="post__link" :href="post.link">
              <figure class="post__figure has-preloader">
                <img class="post__img js-lazy" v-html="post.featured_media.rendered" data-src="">
                <span class="preloader"></span>
              </figure>
              <header class="post__header" data-scroll="stagger-in">
              <h3 class="post__title oh"><span class="js-letters js-no-mobile" v-html="post.title.rendered"></span></h3>
                <p class="post__text" v-html="post.excerpt.rendered">
                  
                </p>
                <span class="post__btn btn-white">Read Post</span>
              </header>
            </a>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/axios@0.15.3/dist/axios.min.js"></script>

<script type="text/javascript">
let ax = axios.create({
  baseURL: 'http://127.0.0.1/stephenscaff/wp-json/wp/v2/posts'
});

new Vue({
  el: '#app',
  
  data () {
    return {
      posts: [],
      term: '',
      isLoading: false
    };
  },
  
  mounted () {
    this.isLoading = true;
    
    ax.get('posts').then(response => {
      this.posts = response.data;
      this.isLoading = false;
          console.log(this.posts);
    });


  },
  
  methods: {
    
  }
})
</script>

<!-- Footer-->  
<?php get_footer(); ?>