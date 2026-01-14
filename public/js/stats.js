window.onload = function (){
    
//   document.getElementById("daysCounter").innerHTML=dayOfYear(dateProp()); 
  document.getElementById('todayDeposit').innerHTML = getRandomInt(10023, 18432);
 document.getElementById('totalDeposit').innerHTML = getRandomInt(124723, 238432);
     document.getElementById('totalWithdraw').innerHTML = getRandomInt(100000, 115000);
      document.getElementById('totalMember').innerHTML = getRandomInt(1000, 1500);
}


setInterval(function(){
                var todayDep = parseInt(document.getElementById('todayDeposit').innerHTML);
             document.getElementById('todayDeposit').innerHTML = (todayDep+getRandomInt(50, 500)).toString();
             
    var totalDep = parseInt(document.getElementById('totalDeposit').innerHTML);
             document.getElementById('totalDeposit').innerHTML = (totalDep+getRandomInt(500, 5000)).toString();
             
     var totalWith= parseInt(document.getElementById('totalWithdraw').innerHTML); document.getElementById('totalWithdraw').innerHTML = (totalWith+getRandomInt(10, 200)).toString();
     
     var totalMember= parseInt(document.getElementById('totalMember').innerHTML); document.getElementById('totalMember').innerHTML = (totalMember+1).toString();
    
},2200);  //86400000 = 1 day in milliseconds
             
//creates curent UTCDate Object
const dateProp = () => {
var dateObj = new Date();
var month = dateObj.getUTCMonth() + 1; //months from 1-12
var day = dateObj.getUTCDate();
var year = dateObj.getUTCFullYear();
var newDate = year + "/" + month + "/" + day;
return newDate;
}

//Returns day of the year starting from 2021 January 1st
const dayOfYear = date => {
    const myDate = new Date(date);
    const firstJan = new Date(2021, 0, 1);
    const differenceInMillieSeconds = myDate - firstJan;
    var result = Math.round((differenceInMillieSeconds / (1000 * 60 * 60 * 24) + 1));
        return result - 1;
};

// Returns a random integer between min (inclusive) and max (inclusive).
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}


// Create our number formatter.
    var formatter = new Intl.NumberFormat('en-US', {
  style: 'currency',
  currency: 'USD',
    });
