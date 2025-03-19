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
console.log(number, isPrime(number) ? 'is prime number' : 'is not prime number');

function isPalindrome(str) {
    const checkPalin = str.toLowerCase().replace(/[^a-z0-9]/g, '');

    return checkPalin === checkPalin.split('').reverse().join('');
}

const stringValue = 'mom';
console.log(isPalindrome(stringValue) ? 'is palindrome' : 'not palindrome');