const selectImage = document.querySelector('.select-image');
const inputFile = document.querySelector('#file');
const imgArea = document.querySelector('.img-area');

selectImage.addEventListener('click', function () {
	inputFile.click();
})

inputFile.addEventListener('change', function () {
	const image = this.files[0]
	if(image.size < 2000000) {
		const reader = new FileReader();
		reader.onload = ()=> {
			const allImg = imgArea.querySelectorAll('img');
			allImg.forEach(item=> item.remove());
			const imgUrl = reader.result;
			const img = document.createElement('img');
			img.src = imgUrl;
			imgArea.appendChild(img);
			imgArea.classList.add('active');
			imgArea.dataset.img = image.name;
		}
		reader.readAsDataURL(image);
	} else {
		alert("Image size more than 2MB");
	}
})

// Get the modal
var modal = document.getElementById("myModal");
var modal1 = document.getElementById("myView")

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("view");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close1")[0];
// Get the cancel button element
var cancelBtn = document.getElementById("cancel");

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
btn1.onclick = function() {
	modal1.style.display = "block";
}

// When the user clicks on the close modal button or outside of the modal, close the modal
window.onclick = function(event) {
	if (event.target == modal || event.target == modal1 || event.target == close) {
	  modal.style.display = "none";
	  modal1.style.display = "none";
	}
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
span1.onclick = function() {
	modal1.style.display = "none";
  }
// When the user clicks on the cancel button, close the modal
cancelBtn.onclick = function() {
	modal.style.display = "none";
  }
  

//

