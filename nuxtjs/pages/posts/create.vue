<template>
    <div class="container">
        <h1 class="title">Create Post</h1>
        <div>
            <input v-model="title" type="text" name="title" placeholder="title">
            <textarea v-model="body" type="text" name="body" class="postBody" rows="10" placeholder="body"></textarea>
              <p>{{ title }}</p>
              <p>{{ body }}</p>
            <button @click="createPost">submit</button>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                title: '',
                body: '',
                show_flag: 1
            }
        },
        // WIP
        methods: {
            createPost: function () {
                let params = new URLSearchParams();
                params.append('title', this.title);
                params.append('body', this.body);
                params.append('show_flag', this.show_flag);
                axios.post('/posts' + params);
            }
        }
    }
</script>

<style>
body {
  font-size: 16px;
  font-family: Verdana, sans-serif;
}

.container {
  width: 500px;
  margin: auto;
}

h1 {
  font-size: 16px;
  border-bottom: 1px solid #ddd;
  padding: 16px 0;
}

input {
    margin-top: 20px;
    width: 500px;
}

textarea {
    margin-top: 20px;
    width: 500px;
}

</style>