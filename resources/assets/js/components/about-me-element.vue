<template>
    <div class="column animated about-me__elements animationDelay" v-bind:class="element.number">
        <div class="item">
            <div class="profile-photo" v-bind:style="{ backgroundImage: 'url(' + element.photo + ')'  }"></div>
            <p class="text__size-med text__primary-font text__align-center text__fourth-color">{{ element.title }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        },

        props: [ 'element' ]
    }
</script>
