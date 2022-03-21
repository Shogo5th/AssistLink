<template>
    <a
        href="#"
        class="goTop"
        @click="goTop"
        :class="{'show-scroll' : scrollHeader}">
        <i class='bx bxs-chevron-up goTop__icon' ></i>
    </a>
</template>

<script>

import { onMounted, ref } from 'vue';

export default {
    setup() {
        const scrollHeader = ref(false)

        // If scrolled more than or equal to 500 px, display icon
        function showgoTop() {
            if(window.scrollY >= 500) {
                scrollHeader.value = true
            } else {
                scrollHeader.value = false
            }
        }

        // If more than or equal to 500 px goTop
        function goTop() {
            if(window.scrollY >= 500) {

                window.scrollTo({
                    top: 0,
                behavior:'smooth'
                })
            }
        }   
        onMounted(() => {
            // can tell the browser that you will not use event's preventDefault() in your function.
            // This will allow the browser to handle screen depiction 
            // and function execution in the listener asynchronously.
            window.addEventListener("scroll", showgoTop, { passive: true }) 
        })

        return {
            goTop,
            scrollHeader,
            showgoTop,
        }
    }

}
</script>

<style lang="scss" scoped>
    .goTop {
        position: fixed;
        right: 1rem;
        bottom: -10%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: .5rem;
        background-color: rgba(123,111,113,.7);
        border-radius: .5rem;
        z-index: 99;
        transition: .4s;
        visibility: hidden;

        &:hover {
            background-color: var(--first-color);
        }

        &__icon {
            font-size: 2rem;
            color: var(--first-color-lighten);
        }
    } 

    .show-scroll {
        visibility: visible;
        bottom: 5rem;
  }
</style>