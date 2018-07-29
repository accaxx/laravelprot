<template>
    <div class="container">
        <h1 class="title">LaraVue Blog App</h1>
        <ul>
            <li v-for="post in posts.data">{{ post.title }} ({{ post.comments.length }})</li>
        </ul>
    </div>
</template>

<script>
export default {
    async asyncData({ app }) {
    const posts = await app.$axios.$get('http://localhost:8000/')
    return {posts};
  }
}
</script>

<style>
    body {
        font-size: 16px;
        font-family: Verdana, sans-serif;
    }

    .container {
        width:500px;
        margin:auto;
    }

    h1 {
        font-size: 16px;
        border-bottom: 1px solid #ddd;
        padding: 16px 0;
    }

    li {
        line-height: 1.5;
    }

    ul {
        padding: 0;
        list-style: none;
    }
</style>

