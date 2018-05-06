<template>
  <a class="text-purple"><i class="material-icons">chat_bubble</i>{{totalcomments}}</a>
</template>

<script>


  export default {
  props: ['post'],
  
    components: {
     
    },

    created() {
      window.eventBus.$on('commentAddedEvent', comment => this.handleNewCommentAdded(comment));
      this.loadComments();
    },

    data() {
      return {
        comments: []
      }
    },
    computed: {
                  totalcomments() {
                        var commento = 0
                        
                        this.comments.forEach( (comment) => {
                              commento++
                        })

                        return commento
                  }
            },

    methods: {
      handleNewCommentAdded(comment) {
        this.comments.unshift(comment);
      },
      loadComments() {
        var url = window.Laravel.basePath + '/get/commentcount';
        var postData = {
          post_id: this.post
        };
        axios.post(url, postData).then(response => {
          this.comments = response.data;
        })
      }
    }
  }
</script>