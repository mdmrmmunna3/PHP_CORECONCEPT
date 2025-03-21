// findout the fibonacci number 

// function fibonacci($num) {
//     let a = 0;
//     let b = 1;
//     console.log(a);

//     for (let i = 2; i < $num; i++) {
//         const next = a + b;
//         console.log(next);

//         a = b;
//         b = next;
//     }


// }

// const number = 10;
// console.log(fibonacci(number));

// another way 

const fibona = (numb) => {
    let fibo = [0, 1];

    for (let i = 2; i < numb; i++) {
        fibo[i] = fibo[i - 1] + fibo[i - 2];
    }
    return fibo;
}

const fibonumber = 10;

console.log(fibona(fibonumber));

// factorial number 

const factorial = (num) => {
    return (num <= 1) ? 1 : num * factorial(num - 1);
}

console.log(factorial(5));

// check the prime number 

const isPrime = (num) => {
    if (num <= 1) {
        return false;
    }

    for (let i = 2; i < num; i++) {
        if (num % i == 0) {
            return false;
        }
    }
    return true;
}

const number = 8;
// console.log(number);
// console.log(number, isPrime(number) ? 'is prime number' : 'is not prime number');

function isPalindrome(str) {
    const checkPalin = str.toLowerCase().replace(/[^a-z0-9]/g, '');

    return checkPalin === checkPalin.split('').reverse().join('');
}

const stringValue = 'mom';
// console.log(isPalindrome(stringValue) ? 'is palindrome' : 'not palindrome');

// maximum number

const findMaximum = (arr) => {
    const maximum = Math.max(...arr);
    console.log('maximum number of an array', maximum);
    return maximum;
}
const number2 = [54, 32, 45, 78];
findMaximum(number2);


// find out the second largest number

const findSecondLargest = (arr) => {
    const sortedNumber = arr.sort((a, b) => b - a);

    const secondLargest = sortedNumber[1] ?? null;
    console.log('Second largest number of the array:', secondLargest);
    return secondLargest;
}
const num3 = [54, 32, 45, 78];
findSecondLargest(num3);

/**
 * what is javascript?
 * 
 * javascript is a high level , dynamic and interpreted programming language that is primarly used to add interactivity and functionalty to the web pages.
 * 
 * JavaScript হল একটি প্রোগ্রামিং ভাষা যা ওয়েব পেজের জন্য ইন্টারঅ্যাকটিভিটি এবং ডাইনামিক কার্যকারিতা যোগ করতে ব্যবহৃত হয়। এটি একটি হাই-লেভেল, এজ-ভিত্তিক এবং অবজেক্ট-ওরিয়েন্টেড ভাষা। JavaScript মূলত ওয়েব ব্রাউজারে রান করে, তবে এখন এটি Node.js-এর মাধ্যমে সার্ভার সাইডেও ব্যবহার করা হয়।
 * 
 * what is react js ?
 *  React is a most popular open-source javascript library used for bulding user interface. especialyy for single page application where a user can intract with the app without reloading the entire page. it was developed by facebook and widly use for web application.
 * 
 * React.js (বা শুধুমাত্র React) একটি জনপ্রিয় ওপেন-সোর্স জাভাস্ক্রিপ্ট লাইব্রেরি যা ব্যবহারকারী ইন্টারফেস (UI) তৈরি করার জন্য ব্যবহৃত হয়, বিশেষ করে একক-পৃষ্ঠার অ্যাপ্লিকেশন (SPA) গুলির জন্য যেখানে ব্যবহারকারী অ্যাপ্লিকেশনে ইন্টারঅ্যাক্ট করে, কিন্তু পুরো পৃষ্ঠা রিলোড হয় না। এটি ফেসবুক দ্বারা তৈরি করা হয়েছে এবং ওয়েব ডেভেলপমেন্টে ব্যাপকভাবে ব্যবহৃত হয়।
 * 
 * what is node js ?
 * node js is a open source javascript runtime environment that allow you to run javascript code in the server side. outside the web browser.
 * Node.js হল একটি ওপেন-সোর্স জাভাস্ক্রিপ্ট রানটাইম পরিবেশ যা জাভাস্ক্রিপ্ট কোডকে সার্ভার সাইডে রান করতে সক্ষম করে। এটি Google Chrome's V8 JavaScript engine ব্যবহার করে, যা দ্রুত এবং দক্ষ।
 * 
 * 
 * diff between props and state
 * 
 * props: props are used to pass data from parent component to child component .
 * state: state is used to manage data that can change over time within a comoponent. when the changes, react re-render the component to replect those changes.
 * 
 * let fruit = "apple";

switch(fruit) {
    case "banana":
        console.log("Yellow fruit");
        break;
    case "apple":
    case "pear":
        console.log("Green or red fruit");
        break;
    case "orange":
        console.log("Orange fruit");
        break;
    default:
        console.log("Unknown fruit");
}


let day = 3;
let dayName;

switch(day) {
    case 1:
        dayName = "Monday";
        break;
    case 2:
        dayName = "Tuesday";
        break;
    case 3:
        dayName = "Wednesday";
        break;
    case 4:
        dayName = "Thursday";
        break;
    case 5:
        dayName = "Friday";
        break;
    case 6:
        dayName = "Saturday";
        break;
    case 7:
        dayName = "Sunday";
        break;
    default:
        dayName = "Invalid day";
}

console.log(dayName);  // Output: Wednesday

$("#myElement").addClass("highlight").fadeIn().css("color", "red");
$("#myButton").click(function() {
    alert("Button clicked!");
});

const arr = [44, 33, 44, 33, 6];

const uniqueNumber = arr.filter(num => arr.indexOf(num) === arr.lastIndexOf(num))[0];

console.log(uniqueNumber); // Output: 6

 *  */ 