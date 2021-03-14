<template>
  <ul class="menu-nav">
   
     <router-link
      v-if="role_id == 2"
      to="/users"
      v-slot="{ href, navigate, isActive, isExactActive }"
    >
      <li
        aria-haspopup="true"
        data-menu-toggle="hover"
        class="menu-item"
        :class="[
          isActive && 'menu-item-active',
          isExactActive && 'menu-item-active',
        ]"
      >
        <a :href="href" class="menu-link" @click="navigate">
          <span class="menu-text"> Users </span>
        </a>
      </li>
    </router-link>
    <!--  end of main menu -->
  </ul>
</template>

<script>
export default {
  name: "KTMenu",
  data() {
    return {
      role_id: 1,
    };
  },
  mounted() {
    
    this.$ApiService
      .get(`/getUser`)
      .then((response) => {
        this.role_id = response.data.data.role_id;
        
      })
      .catch((err) => {
       
      });
  },
  methods: {
    hasActiveChildren(match) {
      return this.$route["path"].indexOf(match) !== -1;
    },
  },
};
</script>
