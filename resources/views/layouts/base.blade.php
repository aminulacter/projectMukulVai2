<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app1.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<style>
    [v-cloak]{
        display: none;
    }
    .iconmenu{
        padding-top: 20px;
    }
    .topmenubtn{
        background-color: white;
    }
    .firstHead{
        background-color: #f2f2f2;
        color: #000;
        text-shadow: none
    }
    .menuRound
    {
        height: 80%;
    }
    .menuImage{
        height: 62px;
    }
    a{
        text-decoration: none;
    }
</style>
<body>
  <div id="app" v-cloak>
    <v-app>
       <v-content>
          
                   
                    <v-container class="firstHead " fluid >
                            <v-layout align-center justify-space-between row fill-height >
                                <v-flex md3 sm-12>
                                        <v-layout align-start justify-space-between row fill-height>
                                                <v-flex md4>
                                                        <v-layout align-center justify-sart row fill-height>
                                                            <v-flex md-3 mr-2>
                                                                    <v-img  src="{{ asset('img/logo11.png') }}"  height="100" width="100"></v-img>
                                                            </v-flex>
                                                            <v-flex md-9>
                                                                  <a href="/">  <span class="font-weight-medium title">Doctors'<span class="red--text">Point</span></span></a>
                                                            </v-flex>
                                                                
                                                        </v-layout></v-flex>
                                                                                                      
                                </v-flex>
                                <v-flex md9 class="hidden-sm-and-down">
                                        <v-layout align-start justify-space-between row fill-height>
                                            <v-flex md4>
                                                    <v-layout align-center justify-sart row fill-height>
                                                        <v-flex md-4>
                                                                <v-btn  fab flat class="topmenubtn"><v-icon color="blue darken-2" small class='iconmenu'>fas fa-map</v-icon></v-btn>
                                                        </v-flex>
                                                        <v-flex md-8>
                                                                <span> House No-12, Road-2, Monsurabad, Adabor, Dhaka </span>
                                                        </v-flex>
                                                            
                                                    </v-layout>
                                                    
                                            </v-flex>
                                            <v-flex md4>
                                                    <v-layout align-center justify-start row fill-height>
                                                            <v-flex md-4>
                                                                    <v-btn  fab flat class="topmenubtn"><v-icon color="blue darken-2" small class='iconmenu' >fas fa-paper-plane</v-icon></v-btn>
                                                            </v-flex>
                                                            <v-flex md-8>
                                                                <span>Email: akhteraminul@gmail.com</span>  
                                                            </v-flex>
                                                                
                                                        </v-layout>
                                                    
                                            </v-flex>
                                            
                                            <v-flex md4>
                                                    <v-layout align-center justify-start row fill-height>
                                                            <v-flex md-4>
                                                                    <v-btn  fab flat class="topmenubtn"><v-icon color="blue darken-2" small>call</v-icon></v-btn>
                                                            </v-flex>
                                                            <v-flex md-8>
                                                                   <span>Phone: +8801704762867</span>  
                                                            </v-flex>
                                                                
                                                        </v-layout>
                                                  
                                            </v-flex>
                                        </v-layout>
                                </v-flex>
                            </v-layout>
                       </v-container>
                
            <v-toolbar dark color="primary">
                <v-toolbar-side-icon class="hidden-md-and-up"></v-toolbar-side-icon>
                <v-toolbar-title>Doctors' Point</v-toolbar-title>
                    
               
                <v-spacer></v-spacer>
                <v-toolbar-items class="hidden-sm-and-down">
                    <v-btn flat href="/">Link One</v-btn>
                    <v-btn flat>Link Two</v-btn>
                    <v-btn flat>Link Three</v-btn>
                </v-toolbar-items>
                <v-toolbar-items>
                        <v-btn flat>English</v-btn>
                    </v-toolbar-items>
                <v-toolbar-items class="menuRound">
                    <v-btn   small round color="orange darken-3" dark >Appointment</v-btn>                    
                </v-toolbar-items>
            </v-toolbar>
                
          
           <v-container>
                @yield('content')
          </v-container>
       </v-content>
    </v-app>
  </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>