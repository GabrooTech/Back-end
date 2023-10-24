function getDominantColor(imageObject, ctx) {
    ctx.drawImage(imageObject, 0, 0, 1, 1);
    const i = ctx.getImageData(0, 0, 1, 1).data;
    return "#" + ((1 << 24) + (i[0] << 16) + (i[1] << 8) + i[2]).toString(16).slice(1);
  }
  function dominantColor() {
    const canvas = document.getElementById("canvas"),
          preview = document.getElementById("preview"),
          ctx = canvas.getContext("2d");
  
    canvas.width = 1
    canvas.height = 1
    preview.width = 400
    preview.height = 400
    const input = document.querySelector(".img_input");
    input.onchange = event => {
      const file = event.target.files[0]
      const reader = new FileReader()
      const fileDataURL = file => new Promise((resolve,reject) => {
        let fr = new FileReader();
        fr.onload = () => resolve( fr.result);
        fr.onerror = reject;
        fr.readAsDataURL( file)
    });
      reader.onload = readerEvent => {
        const image = new Image()
        image.onload = function() {
          fileDataURL( file)

          var dominantColorNow = getDominantColor(image, ctx);
          var styleText = document.getElementById("dominant_color_output").innerHTML = dominantColorNow;
          var styleElement = document.createElement("style");
          styleElement.innerText = styleText;
          document.head.appendChild(styleElement);
        }
        image.src = readerEvent.target.result;
      }
      reader.readAsDataURL(file, "UTF-8");
    }
}
dominantColor();
var price_output;
var off_price_output;
var final_price_output = document.querySelector(".js_price_output")
var final_price = document.querySelector("js_price_output")
var product_price = document.querySelector(".js_price").addEventListener("change", changePirce())
var off_price = document.querySelector(".js_off_price").addEventListener("change", changeOffPirce())
function changePirce(){
  var x = document.querySelector(".js_price")
  x.value = x.value;
  console.log(x.value)
  price_output = x.value;
}
function changeOffPirce(){
  var y = document.querySelector(".js_off_price")
  y.value = y.value;
  console.log(y.value)
  off_price_output = y.value
  final_price = (off_price_output / 100) * price_output;
  final_price = price_output - final_price;
  console.log(final_price)
  final_price_output.innerHTML = final_price;
  final_price_output.value = final_price;
}
console.log(final_price)
