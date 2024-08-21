// FizzBuzz
for (var i = 0; i <= 15; i++) { 
    if (i % 3 === 0 && i % 5 === 0) { 
        console.log('FizzBuzz');
    } else if (i % 3 === 0) {
        console.log('Fizz');
    } else if (i % 5 === 0) {
        console.log('Buzz');
    } else {
        console.log(i);
    }
}
// ====================================================================================
// Area & Circumference
let radius = Number(prompt("Please enter radius"));
console.log(`The Diameter is :${2*radius}`, `The Area Of Circle is :${Math.pow(radius, 2) * Math.PI}`, `The Circumference of Circle is :${2 * radius * Math.PI}`);
// =====================================================================================
// Even or odd 
let num = Number(prompt("Please Enter your number"));
if (num % 2 === 0) {
    console.log(`${num} is an even number`);
} else {
    console.log(`${num} is an odd number`);
}
// ========================================================================================
// sum of 2 nums 
let num1 = Number(prompt("Please Enter your first number"));
let num2 = Number(prompt("Please Enter your second number"));
console.log(`${num1} + ${num2}= ${num1 + num2}`);
// ===============================================================================================