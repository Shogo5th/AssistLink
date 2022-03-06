<template>
  <div :class="{fadeIn: visible}">
    <slot v-if="visible"></slot>
  </div>
  
</template>
<script>
  export default {
    data() {
      return {
        visible: false
      };
    },
    created() {
      window.addEventListener("scroll", this.handleScroll);
    },
    destroyed() {
      window.removeEventListener("scroll", this.handleScroll);
    },
    methods: {
      handleScroll() {
        if (!this.visible) {
          var top = this.$el.getBoundingClientRect().top;
          this.visible = top < window.innerHeight + 100;
        }
      }
    }
  }
</script>
<style>
.fadeIn {
  animation: fadeIn 1s;
}
@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(150px);
    transition: all 0.5s cubic-bezier(.17,.67,.83,.67);
  }
  100% {
    opacity: 1;
    transform: translateY(0px);
  }
}
</style>