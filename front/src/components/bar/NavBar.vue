<template>
  <div>
    <v-app-bar
      color="indigo"
      dense
      dark
    >
      <v-app-bar-nav-icon></v-app-bar-nav-icon>

      <v-toolbar-title>Page title</v-toolbar-title>

      <v-spacer></v-spacer>

      <!-- <v-btn icon>
        <v-icon>mdi-heart</v-icon>
      </v-btn> -->





    <!-- <v-btn icon>
        <search id="clickaway" v-on-clickaway="searchFalse" v-show="search_box" @click="searchFalse()"></search>
        <v-icon @click="clickSearch()">mdi-magnify</v-icon>
    </v-btn> -->


      <v-menu
        left
        bottom
      >
        <template v-slot:activator="{ on }">
          <v-btn icon v-on="on">
            <v-icon>mdi-dots-vertical</v-icon>
          </v-btn>
        </template>

        <v-list>
          <v-list-item
            v-for="n in 5"
            :key="n"
            @click="() => {}"
          >
            <v-list-item-title>Option {{ n }}</v-list-item-title>
          </v-list-item>
        </v-list>
      </v-menu>
    </v-app-bar>
  </div>
</template>

<script>
// import Search from './search/Search.vue';
import { mixin as clickaway } from 'vue-clickaway';

export default {
    // components: {Search},
    mixins: [ clickaway ],
    data() {
        return {
            search_box: false
        }
    },
    methods: {
        clickSearch() {
            this.search_box = !this.search_box
        },
        searchFalse() {
            this.search_box = false
        }
    }
}
</script>
