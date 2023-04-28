function result(){
   var student ={
    DAVID: {
        math:"30",
        Physics: "40",
        Literature: "60",
        Geography: "53",
        Chemistry: "61",
        Biology: "74"
    },
    ANTHONY: {
        math:"70",
        Physics: "80",
        Literature: "75",
        Geography: "85",
        Chemistry: "70",
        Biology: "72"
    },
    CHARLES: {
        math:"70",
        Physics: "100",
        Literature: "95",
        Geography: "87",
        Chemistry: "80",
        Biology: "81"
    },
    HEZRON: {
        math:"54",
        Physics: "70",
        Literature: "55",
        Geography: "85",
        Chemistry: "70",
        Biology: "85"
    },   
    KASIMU: {
        math:"60",
        Physics: "100",
        Literature: "35",
        Geography: "75",
        Chemistry: "82",
        Biology: "83"
    },
    PATRICK: {
        math:"55",
        Physics: "65",
        Literature: "75",
        Geography: "85",
        Chemistry: "54",
        Biology: "90"
        
    },
   }

   var studentname = document.getElementById('studentname').value;
   var input = studentname.toUpperCase();
   var definition = student[input];
   var output = document.getElementById('output');
   
   if(definition==undefined ){
    output.innerHTML=` There is no information about this student.<hr>`;
   }
   else{
    output.innerHTML=` Math = ${definition.math}. <br> Physics = ${definition.Physics}. <br> Literature = ${definition.Literature}. <br> Geogrphy = ${definition.Geography}. <br> Chemistry = ${definition.Chemistry}. <br> Biology = ${definition.Biology}<hr>`;
   };
};