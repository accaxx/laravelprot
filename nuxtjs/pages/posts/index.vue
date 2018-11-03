<template>
    <div class="container">
        <h1 class="title">Search</h1>
        search by :
        <ul>
        </ul>
    </div>
</template>

<script>
export default {
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

    h1 a {
        float: right;
        color: #1f648b;
        text-decoration: none;
    }

    h1 a:hover {
        color: #2ab27b;
    }

    a:visited {
        color: #a94442;
    }

    li {
        line-height: 1.5;
    }

    ul {
        padding: 0;
        list-style: none;
    }
</style>

