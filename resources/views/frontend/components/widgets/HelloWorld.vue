<template>
    <div class="my-5">
        <h1>Hello worlds</h1>
    </div>

</template>
<script>
export default {
    name: "HelloWorld",
    setup: () => ({
        title: 'How To Install Vue 3 in Laravel 8 From Scratch'
    }),
    data() {
        return {
            greeting: 'Hello World!'
        }
    },
    mounted() {
        console.log('Hello world mounted');
    }
}
</script>
