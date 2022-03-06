<template>
  <div>
    <h2>{{ message }}</h2>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: "",
    };
  },
  created() {
    this.hello();
  },
  methods: {
    async hello() {
      const res = await axios.get("/api/hello");
      this.message = res.data;
    },
  },
};
</script>