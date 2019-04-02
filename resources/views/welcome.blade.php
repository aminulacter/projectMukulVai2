@extends('layouts.base')
@section('content')

  <v-carousel hide-controls interval="5000" height="600">
      
    <v-carousel-item
        v-for="(item,i) in caroselItems"
        :key="i"
        :src="item.src"
        reverse-transition="fade-transition"
        transition="fade-transition"
       >
      <v-layout align-end justify-start row fill-height>
        <v-flex xs10 offset-xs1>
        <v-card class="transparent" flat >
        <v-card-text class="carosalbot" >
                
          <p class="red--text text-xs-left">@{{item.message}}</p>
          <p class="red--text text-xs-left"> @{{item.message2}}</p>
        </v-card-text>
      </v-card>
        </v-flex>
      </v-layout>
      
      </v-carousel-item>
  </v-carousel>
     
@endsection
@section('scripts')
<script>
  new Vue({ 
     el: '#app',
     data: {
         drawer: false,
         links:[
           { icon:'dashboard', text:'Dashboard', route: '/'},
           { icon:'folder', text:'Events', route: '/events'},
           { icon:'person', text:'Galary', route: '/galary'},

         ],
         items: [
   { icon: 'folder', iconClass: 'grey lighten-1 white--text', title: 'Photos', subtitle: 'Jan 9, 2014' },
   { icon: 'folder', iconClass: 'grey lighten-1 white--text', title: 'Recipes', subtitle: 'Jan 17, 2014' },
   { icon: 'folder', iconClass: 'grey lighten-1 white--text', title: 'Work', subtitle: 'Jan 28, 2014' }
 ],
 items2: [
   { icon: 'assignment', iconClass: 'blue white--text', title: 'Vacation itinerary', subtitle: 'Jan 20, 2014' },
   { icon: 'call_to_action', iconClass: 'amber white--text', title: 'Kitchen remodel', subtitle: 'Jan 10, 2014' }
 ],
  caroselItems: [
          {
            src: '{{ url("/img/bg_1.jpg")}}',
            message: "We Care about your health",
            message2: "Your health is our top priority",
          },
          {
            src: '{{ url("/img/bg_2.jpg")}}',
            message: "Helping You stay Happy",
            message2: "We bring hope to our client",
          },
         
        ]

  }
})
</script>  
@endsection

     

