<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
       

        <!-- Styles -->
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app1.css') }}" rel="stylesheet">
    </head>
    <div id="app">
        <v-app>
          <v-content>
            <template>
                <v-layout row>
                  <v-flex xs12 sm6 offset-sm3>
                    <v-card>
                      <v-toolbar color="light-blue" dark>
                        <v-toolbar-side-icon></v-toolbar-side-icon>
              
                        <v-toolbar-title>My files</v-toolbar-title>
              
                        <v-spacer></v-spacer>
              
                        <v-btn icon>
                          <v-icon>search</v-icon>
                        </v-btn>
              
                        <v-btn icon>
                          <v-icon>view_module</v-icon>
                        </v-btn>
                      </v-toolbar>
              
                      <v-list two-line subheader>
                        <v-subheader inset>Folders</v-subheader>
              
                        <v-list-tile
                          v-for="item in items"
                          :key="item.title"
                          avatar
                          @click=""
                        >
                          <v-list-tile-avatar>
                            <v-icon :class="[item.iconClass]">@{{ item.icon }}</v-icon>
                          </v-list-tile-avatar>
              
                          <v-list-tile-content>
                            <v-list-tile-title>@{{ item.title }}</v-list-tile-title>
                            <v-list-tile-sub-title>@{{ item.subtitle }}</v-list-tile-sub-title>
                          </v-list-tile-content>
              
                          <v-list-tile-action>
                            <v-btn icon ripple>
                              <v-icon color="grey lighten-1">info</v-icon>
                            </v-btn>
                          </v-list-tile-action>
                        </v-list-tile>
              
                        <v-divider inset></v-divider>
              
                        <v-subheader inset>Files</v-subheader>
              
                        <v-list-tile
                          v-for="item in items2"
                          :key="item.title"
                          avatar
                          @click=""
                        >
                          <v-list-tile-avatar>
                            <v-icon :class="[item.iconClass]">@{{ item.icon }}</v-icon>
                          </v-list-tile-avatar>
              
                          <v-list-tile-content>
                            <v-list-tile-title>@{{ item.title }}</v-list-tile-title>
                            <v-list-tile-sub-title>@{{ item.subtitle }}</v-list-tile-sub-title>
                          </v-list-tile-content>
              
                          <v-list-tile-action>
                            <v-btn icon ripple>
                              <v-icon color="grey lighten-1">info</v-icon>
                            </v-btn>
                          </v-list-tile-action>
                        </v-list-tile>
                      </v-list>
                    </v-card>
                  </v-flex>
                </v-layout>
              </template>
              <template>
                <div class="text-xs-center">
                  <v-menu transition="scale-transition">
                    <template v-slot:activator="{ on }">
                      <v-btn
                        dark
                        color="primary"
                        v-on="on"
                      >
                        Scale Transition
                      </v-btn>
                    </template>
                    <v-list>
                      <v-list-tile v-for="n in 5" :key="n" @click="">
                        <v-list-tile-title v-text="'Item ' + n"></v-list-tile-title>
                      </v-list-tile>
                    </v-list>
                  </v-menu>
                </div>
              </template>
          </v-content>
        </v-app>
      </div>
    
      
      <script src="{{ asset('js/app.js') }}"></script>
      <script>
         new Vue({ 
            el: '#app',
            data: {
      
                items: [
          { icon: 'folder', iconClass: 'grey lighten-1 white--text', title: 'Photos', subtitle: 'Jan 9, 2014' },
          { icon: 'folder', iconClass: 'grey lighten-1 white--text', title: 'Recipes', subtitle: 'Jan 17, 2014' },
          { icon: 'folder', iconClass: 'grey lighten-1 white--text', title: 'Work', subtitle: 'Jan 28, 2014' }
        ],
        items2: [
          { icon: 'assignment', iconClass: 'blue white--text', title: 'Vacation itinerary', subtitle: 'Jan 20, 2014' },
          { icon: 'call_to_action', iconClass: 'amber white--text', title: 'Kitchen remodel', subtitle: 'Jan 10, 2014' }
        ]
      
    
         }
     })
      </script>
     
    </body>
</html>
