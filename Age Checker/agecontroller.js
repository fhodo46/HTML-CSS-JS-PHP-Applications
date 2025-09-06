function checkAge(age){ 
    if(age<18){ document.getElementById("demo").innerHTML = "Je i/e mitur";}
   
   
    else if(age>= 18 && age <=65){ document.getElementById("demo").innerHTML = "Je i/e rritur";}
    else if(age>65){ document.getElementById("demo").innerHTML = "Je i/e moshuar";}
   
   
   
}