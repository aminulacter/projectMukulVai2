<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app1.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
        <div id="app">
                <v-app
                  dark
                  id="inspire"
                >
                  <v-navigation-drawer
                   
                    clipped
                    v-model="drawer"
                    app
                    disable-resize-watcher
                    disable-route-watcher
                  >
                    <v-list dense>
                      <v-list-tile v-for="item in items" :key="item.text" @click="">
                        <v-list-tile-action>
                          <v-icon>@{{ item.icon }}</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                          <v-list-tile-title>
                            @{{ item.text }}
                          </v-list-tile-title>
                        </v-list-tile-content>
                      </v-list-tile>
                      <v-subheader class="mt-3 grey--text text--darken-1">SUBSCRIPTIONS</v-subheader>
                      <v-list>
                        <v-list-tile v-for="item in items2" :key="item.text" avatar @click="">
                          <v-list-tile-avatar>
                            <img :src="`https://randomuser.me/api/portraits/men/${item.picture}.jpg`" alt="">
                          </v-list-tile-avatar>
                          <v-list-tile-title v-text="item.text"></v-list-tile-title>
                        </v-list-tile>
                      </v-list>
                      <v-list-tile class="mt-3" @click="">
                        <v-list-tile-action>
                          <v-icon color="grey darken-1">add_circle_outline</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-title class="grey--text text--darken-1">Browse Channels</v-list-tile-title>
                      </v-list-tile>
                      <v-list-tile @click="">
                        <v-list-tile-action>
                          <v-icon color="grey darken-1">settings</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-title class="grey--text text--darken-1">Manage Subscriptions</v-list-tile-title>
                      </v-list-tile>
                    </v-list>
                  </v-navigation-drawer>
                  <v-toolbar
                    color="red"
                    dense
                    fixed
                    clipped-left
                    app
                  >
                    <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
                    <v-icon class="mx-3">fab fa-youtube</v-icon> <v-icon>fas fa-paper-plane</v-icon>
                    <v-toolbar-title class="mr-5 align-center">
                      <span class="title">Youtube</span>
                    </v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-layout row align-center style="max-width: 650px">
                      <v-text-field
                        placeholder="Search..."
                        single-line
                        append-icon="search"
                        :append-icon-cb="() => {}"
                        color="white"
                        hide-details
                      ></v-text-field>
                    </v-layout>
                  </v-toolbar>
                  <v-content>
                    <v-container fill-height>
                      <v-layout justify-center align-center>
                        <v-flex shrink>
                          
                        </v-flex>
                      </v-layout>
                    </v-container>
                  </v-content>
                </v-app>
              </div>
              <script src="{{ asset('js/app.js') }}"></script> 
              <script>
                  new Vue({
  el: '#app',
  data: () => ({
      drawer: true,
      items: [
        { icon: 'trending_up', text: 'Most Popular' },
        { icon: 'subscriptions', text: 'Subscriptions' },
        { icon: 'history', text: 'History' },
        { icon: 'featured_play_list', text: 'Playlists' },
        { icon: 'watch_later', text: 'Watch Later' }
      ],
      items2: [
        { picture: 28, text: 'Joseph' },
        { picture: 38, text: 'Apple' },
        { picture: 48, text: 'Xbox Ahoy' },
        { picture: 58, text: 'Nokia' },
        { picture: 78, text: 'MKBHD' }
      ]
    }),
    props: {
      source: String
    }
    })
    </script>
</body>
</html>