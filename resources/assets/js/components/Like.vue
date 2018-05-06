<template>
      <div>
            <a style="color: gray" v-if="!auth_user_likes_post" @click="like()"><i class="material-icons">favorite</i>{{totallikes}}</a>
            <a class="text-danger" v-else @click="unlike()"><i class="material-icons">favorite</i>{{totallikes}}</a>   
      </div>
</template>

<script>
      export default {
            mounted() {

            },
            props: ['id'],
            computed: {
                  likers() {
                        var likers = []
                        
                        this.post.likes.forEach( (like) => {
                              likers.push(like.user.id)
                        })

                        return likers
                  },
                  totallikes() {
                        var likes = 0
                        
                        this.post.likes.forEach( (like) => {
                              likes++
                        })

                        return likes
                  },
                  auth_user_likes_post() {
                        var check_index = this.likers.indexOf( 
                              this.$store.state.auth_user.id
                         )

                         if (check_index === -1)
                              return false
                        else 
                              return true
                  },
                  post() {
                        return this.$store.state.posts.find( (post) => {
                              return post.id === this.id
                        })
                  }
            },
            methods: {
                  like() {
                        axios.get('/like/' + this.id)
                            .then( (resp) => {
                                  this.$store.commit('update_post_likes', {
                                        id: this.id,
                                        like: resp.data
                                  })
                            })
                  },
                  unlike() {
                        axios.get('/unlike/' + this.id)
                            .then( (response) => {

                                  this.$store.commit('unlike_post', {
                                        post_id: this.id,
                                        like_id: response.data
                                  })
                            })
                  }
            }
      }
</script>


<style>
      .avatar-like{
            border-radius: 50%;
      }
</style>