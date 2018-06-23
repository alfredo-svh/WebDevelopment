
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