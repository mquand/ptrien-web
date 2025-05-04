
//open modal popup
    var modalBtns = document.querySelectorAll(".show__modal");

    modalBtns.forEach(function(btn) {
        btn.onclick = function() {
            var modal = btn.getAttribute('data-modal');
            document.getElementById(modal).style.display="block"; 
        };
    });
//close modal popup
var closeBtns = document.querySelectorAll(".close_modal--btn");

closeBtns.forEach(function(btn) {
    btn.onclick = function() {
        var modal = (btn.closest(".modal")).style.display="none"; 
    };
});
//close touch overlay
window.onclick = function(e){
    if(e.target.className === ".modal"){
        e.target.style.display = 'none';
    }
};

//click chuột đổi nền ảnh chi tiết sp
let bigimg=document.querySelector('.big_img img ');
function showimg(pic){
bigimg.src = pic;
}
//showpassword
function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

function selectProduct(element) {
    // Remove 'selected' class from all products
    const productList = document.querySelectorAll('.psize');
    productList.forEach(item => {
      item.classList.remove('selected');
    });

    // Add 'selected' class to the clicked product
    element.classList.add('selected');
  }