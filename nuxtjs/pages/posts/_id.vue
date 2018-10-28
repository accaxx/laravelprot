<template>
    <div class="container">
        <h1 class="title">{{ data.title }}</h1>
        <p>{{ data.body }}</p>

        <h1 class="comment">comments</h1>
        <ul>
            <li v-for="comment in data.comments">{{ comment.body }}</li>
        </ul>
        <h1 class="category">category</h1>
        <ul>
            <li v-for="category in data.categories">{{ category }}</li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        async asyncData ({params}) {
            let { data } = await axios.get(`http://localhost:8000/posts/${params.id}`)
            return data
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