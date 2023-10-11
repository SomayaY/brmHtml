// alert("test");
function printHi() {
    console.log("hi");
}

function p(name, age) {
    console.log("My name is :" + name + "  my age is :" + age);
}


let robot = {
    name: 'chemist',
    color: 'orang'

};

console.log(robot['name']);

function robotCharacters(name) {
    if (name == 'chemis') {
        document.write('1-Chemistry specialist <br> ');
    } else if (name == 'coder') {
        document.write('1-Chemistry specialist <br> ');
    }
}


function w(count) {
    console.log("the numbers are :");
    while (count < 10) {

        console.log(count);
        count++;

    }
}

function f(count) {
    console.log("the numbers are :");
    for (count = 0; count < 10; count++) {
        console.log(count);
    }
}

function robotBrint() {

    let r = ['chemist', 'coder', 'faheem', 'sportsman'];

    for (let c = 0; c < r.length; c++) {
        console.log(r[c]);
    }

}

function robotBrint2() {

    let r = ['chemist', 'coder', 'faheem', 'sportsman'];

    r.forEach(function(element){
        console.log(element);
    })

}