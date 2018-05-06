<template>
  <a class="hello">
  <vue-goodshare-facebook has_icon></vue-goodshare-facebook>

   <vue-goodshare-twitter has_icon></vue-goodshare-twitter>

   <vue-goodshare-pinterest has_icon></vue-goodshare-pinterest>

   <vue-goodshare-whats-app has_icon></vue-goodshare-whats-app>


  </a>
</template>

<script>

import VueGoodshareFacebook from 'vue-goodshare/src/providers/Facebook.vue'
import VueGoodshareTwitter from 'vue-goodshare/src/providers/Twitter.vue'
import VueGoodsharePinterest from 'vue-goodshare/src/providers/Pinterest.vue'
import VueGoodshareWhatsApp from 'vue-goodshare/src/providers/WhatsApp.vue'


export default {
  name: 'HelloSocial',
  components:{
    VueGoodshareTwitter,
    VueGoodshareFacebook,
    VueGoodsharePinterest,
    VueGoodshareWhatsApp,
  }
}
</script>