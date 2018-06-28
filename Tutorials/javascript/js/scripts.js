
//DOM

var total, num1, num2;

function totalPay(num1, num2){
	total = num1*num2;
	return total;
}

var grandTotal = totalPay(10,20);
var calculator = document.getElementById('result').innerHTML = grandTotal + " Dollars";


/*
// functions with return values

var num1;

function multx20(num){
	num*=20;
	return num;
}

var result = multx20(3);
result*=2;
console.log("The result value is: " + result);

const TAX = .16;
var quantity;

function totalPay(num){
	num = num+ (num*TAX);
	return num;
}

var result = totalPay(100);
console.log(result*1.03);


/*
// functions with arguments

function sum(num1, num2){
	console.log(num1+num2);
}

sum(2,2);

var fruits = [];

function fruitArray(fruit){
	fruits.push(fruit);
	console.log(fruit);
}

fruitArray('peach');
fruitArray('apple');
fruitArray('strawberry');
fruitArray('melon');

console.log(fruits);

const TAX = 0.16;
var total = 0;

function cart(article, price){
	console.log('Article: ' + article + " Price: " + price);
	total += price + (TAX*price);
	console.log("Tax: " + price*TAX);
	console.log("Total: $" + total.toFixed(2))
}

cart("beer", 20);


/*
// functions

function sum(){
	console.log(2+2);
}

sum();

function sum2(){
	console.log(2+1);
}

sum2();

function fruitArray(){
	var fruits = ['strawberry', 'orange', 'apple', 'peach']
	console.log(fruits);
}

fruitArray();

var myFunction = function(){
	var fruits = ['strawberry', 'orange', 'apple', 'peach']
	console.log(fruits);
}

myFunction();

var car = {
	name: 'Mustang',
	motor: 5.5,
	color: 'blue',
	classic: true,
	year: 1965
}

function seeObject(car){
	console.log(this.name);
	console.log(this.motor);
	console.log(this.color);
	console.log(this.classic);
	console.log(this.year);
}

car.showCar = seeObject;
car.showCar();


/*
//operators

var paymentAmount = 100;
var credit = 101;
var phoneRefill = 10;

if(credit > paymentAmount){
	console.log("Payment done");
	credit -= paymentAmount;
	console.log("your credit is: " + credit);
	if(phoneRefill < credit){
		console.log("The refill was successfully done");
		credit -= phoneRefill;
		console.log("your credit is: " + credit);
	} else{
		console.log("Not enough credit for refill");
	}
}else{
	console.log("Payment was not possible");
}




/*
//switch statement

var paymentMethod = '';

switch (paymentMethod){
	case 'CC':
		console.log("Payment was done with a credit card");
		break;
	case 'cash':
		console.log("Payment was done with cash");
		break;
	case 'paypal':
		console.log("Payment was done with paypal");
		break;
	default: 
		console.log("Invalid method");
}


/*

//and or

var paymentAmount = 100;
var credit= 101;
var phoneRefill = 10;
var validUser = true;

if(credit > paymentAmount && validUser){
	console.log("payment was correct");
} else {
	console.log("payment was not possible");
}

var paymentAmount = 1000;
var cash = 500;
var creditCard = true;

if(cash > paymentAmount || creditCard){
	console.log("Payment done");
} else{
	console.log("You don't have enough cash");
}



/*
// if

var cost = 100;
var budget = 500;

if(budget < cost){
	console.log("Not enough budget to pay");
} else{
	console.log("The payment was successfully processed");
}

var age1 = 20;
var age2 = 20;

if(age1 > age2){
	console.log("age1 is greater");
} else if(age1 == age2){
	console.log("They're equal");
} else{
	console.log("age2 is greater");
}


var age3 = '20';
var age4 = 20;

if(age3 === age4){
	console.log("They're equal");
} else{
	console.log("not equal");
}

var text1 = "Hello World";
var text2 = "hello world";

if(text1.toLowerCase() == text2.toLowerCase()){
	console.log("They're equal");
} else{
	console.log("not equal");
}


/*

// strings

var text = "This is a string";
console.log(text);
console.log(typeof(text));
console.log(text.toUpperCase());
console.log(text.length);
console.log(text.split(" ")); //splits string by space
console.log(text.indexOf("string"));
console.log(text.slice(0,11));
console.log(text.toLowerCase());



/*
// date

var date = new Date()
console.log("Current year is: "+ date.getFullYear());
console.log("Current day is: "+ date.getDate());
console.log("Current day of the week is: "+ date.getDay());
console.log("Current hour is: "+ date.getHours());
console.log("With: "+ date.getMinutes());



/*
//numbers

var num1 = '15';
var num2 = -20;
var num3 = 21.5;
var num4 = 20;
var num5 = '3.1416';
var num6 = -30.5;

console.log(typeof(num1));
console.log(typeof(num2));
console.log(typeof(num3));
console.log(typeof(num4));
console.log(typeof(num5));
console.log(typeof(num6));

var num7 = parseInt(num1);
console.log(num7 + 20);

var num8 = parseFloat(num5);
console.log((num8 + 20).toFixed(2));

var num9 = Number(num1);
console.log(typeof(num9));

/*
//white space

var name ="Juan";
console.log(name);

var person = {
	name: 'Juan',
	profession: 'web developer'
}

console.log(person);



/*
var premierLeague = ['Chelsea', 'ManUtd', 'Liverpool', 'Arsenal'];

var laLiga= new Array('Barca', 'Real', 'Atleti');
premierLeague.push("ManCity");
premierLeague[2] = 'Leicester';


console.log(laLiga.reverse());
console.log(premierLeague);
console.log(premierLeague.indexOf('ManUtd')+1);
premierLeague.pop();
console.log(premierLeague);

premierLeague.splice(1,2);
console.log(premierLeague);

// filter

console.log('Filter');
var premierLeague = ['Chelsea', 'ManUtd', 'Liverpool', 'Arsenal'];
var newArray = premierLeague.filter(function(team){
	return (team !== 'Chelsea')
});

console.log(newArray);

/*
var car = {
	name: 'Mustang',
	motor: 5.5,
	color: 'blue',
	classic: true,
	year: 1965
}

console.log(car.name);
console.log(car.motor);
console.log(car.color);
console.log(car.classic);
console.log(car.year);

var name = prompt('What\'s your name?');
var country = prompt('Where are you from?');
alert("Welcome, " + name + " from " + country);

var model = 'Mustang';
var motor = 5.5;
var color = 'blue';

var model2, motor2, color2;

model2='Camaro';
motor2 =5.8;
color2 = 'black';

model = 'Challenger';

var model = 'Mustang';
console.log(model);
*/