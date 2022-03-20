<template>
    <div class="my-1">
        <h6 class="text-center">Vue application container</h6>
        <div class="text-center">
            <span class="badge bg-secondary mr-3" v-for="word in words" :key="word.text">{{ word.text}}</span>
        </div>
    </div>

</template>
<script>
import WordsService from "../../../../js/services/WordsService";

export default {
    name: "HelloWorld",
    setup: () => ({
        title: 'How To Install Vue 3 in Laravel 8 From Scratch'
    }),
    data() {
        return {
            words: [],
        }
    },
    mounted() {
        this.fetchWords();
        console.log('Hello world mounted');
    },
    methods: {
        fetchWords() {
            WordsService.getAll()
                .then(response => {
                    this.words = response.data.data;
                })
                .catch(e => {
                    console.log(e);
                });
            ;
        }
    }
}

</script>
