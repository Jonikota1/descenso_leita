@extends('layouts.app')
@section('content')
<style>
    body {
   background-color: #2e4057;
   margin:0;
}

.patterns {
  height: 100vh;
}



svg text {
  font-family: Lora;
  letter-spacing: 10px;
  stroke: #ffa5d8;
  font-size: 150px;
  font-weight: 700;
  stroke-width: 3;
 
  animation: textAnimate 5s infinite alternate;
  
}

@keyframes textAnimate {
  0% {
    stroke-dasharray: 0 50%;
    stroke-dashoffset:  20%;
    fill:hsl(189, 68%, 75%)

  }
  
  100% {
    stroke-dasharray: 50% 0;
    stroke-dashoffstet: -20%;
    fill: hsla(189, 68%, 75%,0%)
  }
  
}



</style>
<body>
  <div class="patterns">
  <svg width="100%" height="100%">
    <defs>
      <pattern id="polka-dots" x="0" y="0"                    width="100" height="100"
               patternUnits="userSpaceOnUse">
        <circle fill="#be9ddf" cx="25" cy="25" r="3"></circle>
      </pattern>  
        <style>
     @import url("https://fonts.googleapis.com/css?  family=Lora:400,400i,700,700i");
   </style>
      
    </defs>
              
    <rect x="0" y="0" width="100%" height="100%" fill="url(#polka-dots)"> </rect>
     
    
   
 <text x="50%" y="60%"  text-anchor="middle"  >
   Gracias
 </text>
 </svg>
</div>
 
</body>

@endsection