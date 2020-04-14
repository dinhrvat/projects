//Assignment 6.1: JS Stalker Exercise

// var fname = prompt("What is your First Name?");
// var lname = prompt("What is your Last Name?");
// var age = prompt("What is your age?");

// console.log("Your name is "+ fname + " " + lname + " and you are " + age + " years old!");


// //Assignment 6.2: Age Calculator
// //Enter your age and find out how many days you’ve been alive.

// var daysOfExistence = age * 365;

// console.log("You have been alive on this Earth for about " + daysOfExistence + " days.");


// Assignment 7.1: Conditionals Exercise
// Create a JS Conditional that asks the user for their age and does the following:
// ● If their age is negative
// ○ Print an error message to the console
// ● If their age is 21
// ○ Print “happy 21st birthday!!” to the console
// ● If their age is odd
// ○ Print “your age is odd!” to the console
// ● If their age is even
// ○ Print “your age is even!” to the console

// var age = prompt("What is your age?");

// if(age < 0)
// {
//     console.log("That is a negative value");
// }
// else if(age >= 0 && age < 18)
// {
//     console.log("You may not enter.");
// }
// else if(age == 21)
// {
//     console.log("Happy 21st Birthday! Drink up!");
// }
// else if(age > 21)
// {
//     console.log("Enjoy the night.");
// }

// if(age % 2 == 0)
// {
//     console.log("That is an even number.")
// }
// else
// {
//     console.log("That is an odd number.");
// }


// Assignment 7.2: Guessing Game
// Create a JS Conditional that asks the user to guess a number.
// ● If the number is correct ○ Alert “You got it right”
// ● If the number is too high
// ○ Alert “Too high. Guess again!”
// ● If the number is too low
// ○ Alert “Too low. Guess again

// var guessnumber = prompt("Let's play a game(SAW Voice): You have to guess a number between 1-10. If you guess right, you live. Good luck!");
// var num = 10;

// while(guessnumber != num)
// {
//     prompt("Guess again");
// }
//     if(guessnumber < num)
//     {
//         alert("Too low. Guess again.");
//     }
//     else if(guessnumber > num)
//     {
//         alert("Too high. Guess again.");
//     }
//     else
//     {
//         alert("Congratulations on your luck. You got it right.");
//     }

// Assignment 7.3: While Loops Problem Set
// ● Print all numbers between -10 and 19 to the console
// ● Print all even numbers between 10 and 40 to the console
// ● Print all odd numbers between 300 and 333 to the console
// ● Print all numbers divisible by 5 AND 3 between 5 and 50 to the console

// var x = -10;
// while(x <= 19)
// {
//     console.log(x)
//     x++;
// }
// var y = 10;
// while(y <= 40)
// {
//     console.log(y);
//     y+=2;
// }
// var z = 301;
// while(z <= 333)
// {
//     if(z%2 != 0)
//     {
//         console.log(z);
//     }
// //     
//     z+=2;
// }
// var a = 5;
// while(a <= 50)
// {
//     if((a % 5) == 0 && (a % 3) == 0)
//     {
//         console.log(a);
//     }
   
//     a++;
// }

// Assignment 7.4: Annoying Game
// ● Ask the user “Are we there yet?”
// ● Keep asking again and again until they enter “yes” OR “yeah”
// ● Then, alert “Yay, we finally made it!”


// var ask = prompt("Are we there yet?");
// while(ask != "yes" || "yea" || "yeah")
// {
//     var prompt("Are we there yet?");
// }

//     alert("Yay, we finally made it!");

// Assignment 7.5: For Loops Problem Set
// ● Print all numbers between -10 and 19 to the console
// ● Print all even numbers between 10 and 40 to the console
// ● Print all odd numbers between 300 and 333 to the console
// ● Print all numbers divisible by 5 AND 3 between 5 and 50 to the console

// for(var i = -10; i <= 19; i++)
// {
//     console.log(i);
// }

// for(var i = 10; i <= 40; i+=2)
// {
//     console.log(i);
// }

// for(var i = 300; i <= 333; i++)
// {
//     if(i % 2 != 0)
//     {
//         console.log(i);
//     }
// }

// for(var i = 5; i <= 50; i++)
// {
//     if((i % 5) == 0 && ((i % 3) == 0))
//     {
//         console.log(i);
//     }
// }




/*
Assignment 8.1: Functions Problem Set
 ●Write a function isEven() which takes a single numeric argument and returns true
 if the number is even, and false otherwise.

 ●Write a function factorial() which takes a single numeric argument and returns 
 the factorial of that number.
    ○The factorial of 4 is 4 x 3 x 2 x 1○The factorial of 6 is 6 x 5 x 4 x 3 x 2 x 1

 ●Write a function 
 kebabToSnake() which takes a single kebab-cased string argument and returns the snake_cased version.
 ○Basically, replace “-”s with 
 “_”s
 ○kebabToSnake(“hello-world”); => “hello_world”○kebabToSnake(“dogs-are-awesome”); => “dogs_are_awesome”
*/

isEven(10);
document.write(factorialize(4));
document.write(kebabToSnake("dogs-are-awesomeeee"));

function isEven(num)
{
    if(num % 2 == 0)
    {
        return true;
    }
    false;
}

function factorialize(num) {
    // If the number is less than 0, reject it.
    if (num < 0) 
          return -1;
      
    // If the number is 0, its factorial is 1.
    else if (num == 0) 
        return 1;
      
    // Otherwise, call the recursive procedure again
      else {
          return (num * factorialize(num - 1));
      }}


document.write(kebabToSnake("dogs-are-awesomeeee"));
function kebabToSnake(str)
{
    var myString = str.replace(/-/g, "_");
    return myString;
}