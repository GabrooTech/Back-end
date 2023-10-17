const item = document.getElementById('output')
const altotp = document.getElementById('altotp')
const secalt = document.getElementById('secalt')
const thialt = document.getElementById('thialt')
const foralt = document.getElementById('foralt')
const fifalt = document.getElementById('fifalt')
let count = 0;
const counter = document.getElementById('counter');
document.getElementById('add-animation').addEventListener('click', event => {
  const cl = counter.classList
  const c = 'animated-counter'
  count ++;
  counter.innerText = count;
  cl.remove(c, cl.contains(c));
  setTimeout(() =>
  counter.classList.add('animated-counter'), 1)
})
var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    var file = event.target.files[0];
    const fileDataURL = file => new Promise((resolve,reject) => {
        let fr = new FileReader();
        fr.onload = () => resolve( fr.result);
        fr.onerror = reject;
        fr.readAsDataURL( file)
    });
    output.onload = function() {
        fileDataURL( file)
        .then(function(data) {
          document.getElementById("output").src = data;
          localStorage.setItem("main-image", data);
        })
        .catch(err => console.log(err));
    }
};
var loadFileSm = function(event) {
    var altotp = document.getElementById('altotp');
    altotp.src = URL.createObjectURL(event.target.files[0]);
    var file = event.target.files[0];
    const fileDataURL = file => new Promise((resolve,reject) => {
        let fr = new FileReader();
        fr.onload = () => resolve( fr.result);
        fr.onerror = reject;
        fr.readAsDataURL( file)
    });
    altotp.onload = function() {
        fileDataURL( file)
        .then(function(data) {
          document.getElementById("altotp").src = data;
          localStorage.setItem("main-alt-image", data);
        })
        .catch(err => console.log(err));
    }
};
var loadFileSa = function(event) {
    var secalt = document.getElementById('secalt');
    secalt.src = URL.createObjectURL(event.target.files[0]);
    var file = event.target.files[0];
    const fileDataURL = file => new Promise((resolve,reject) => {
        let fr = new FileReader();
        fr.onload = () => resolve( fr.result);
        fr.onerror = reject;
        fr.readAsDataURL( file)
    });
    secalt.onload = function() {
        fileDataURL( file)
        .then(function(data) {
          document.getElementById("secalt").src = data;
          localStorage.setItem("second-alt-image", data);
        })
        .catch(err => console.log(err));
    }
  };
  var loadFileta = function(event) {
    var thialt = document.getElementById('thialt');
    thialt.src = URL.createObjectURL(event.target.files[0]);
    var file = event.target.files[0];
    const fileDataURL = file => new Promise((resolve,reject) => {
        let fr = new FileReader();
        fr.onload = () => resolve( fr.result);
        fr.onerror = reject;
        fr.readAsDataURL( file)
    });
    thialt.onload = function() {
        fileDataURL( file)
        .then(function(data) {
          document.getElementById("thialt").src = data;
          localStorage.setItem("third-alt-image", data);
        })
        .catch(err => console.log(err));
    }
  };
  var loadFilefora = function(event) {
    var foralt = document.getElementById('foralt');
    foralt.src = URL.createObjectURL(event.target.files[0]);
    var file = event.target.files[0];
    const fileDataURL = file => new Promise((resolve,reject) => {
        let fr = new FileReader();
        fr.onload = () => resolve( fr.result);
        fr.onerror = reject;
        fr.readAsDataURL( file)
    });
    foralt.onload = function() {
        fileDataURL( file)
        .then(function(data) {
          document.getElementById("foralt").src = data;
          localStorage.setItem("fourth-alt-image", data);
        })
        .catch(err => console.log(err));
    }
  };
  var loadFilefira = function(event) {
    var fifalt = document.getElementById('fifalt');
    fifalt.src = URL.createObjectURL(event.target.files[0]);
    var file = event.target.files[0];
    const fileDataURL = file => new Promise((resolve,reject) => {
        let fr = new FileReader();
        fr.onload = () => resolve( fr.result);
        fr.onerror = reject;
        fr.readAsDataURL( file)
    });
    fifalt.onload = function() {
        fileDataURL( file)
        .then(function(data) {
          document.getElementById("fifalt").src = data;
          localStorage.setItem("fifth-alt-image", data);
        })
        .catch(err => console.log(err));
    }
  };
  function changeImage(event){
    document.querySelector(".mnimg").src = event.children[0].src
  }