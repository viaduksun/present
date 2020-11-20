const linkSite = "http://present.local/";

document.querySelectorAll(".add-to-cart").forEach(function(add){
	add.onclick = function(e){
		const addRequest = new XMLHttpRequest();
			 addRequest.open("POST", linkSite + "modules/cart/add-product.php", false);
			 addRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			 addRequest.send('id=' + add.dataset.id);
		
		const quantCart = document.querySelector('.quantity-cart');
		quantCart.innerText = Number(quantCart.innerText) + 1;
		
		document.querySelector('.drop-cart').innerHTML = addRequest.response;
		console.log(addRequest.response);
	}
});

document.querySelectorAll('.change-quant').forEach(function(input){
	input.oninput = function(){
		input.parentNode.parentNode.nextElementSibling.nextElementSibling.firstElementChild.firstElementChild.innerText = input.value * input.dataset.price;
		const index = input.parentNode.parentNode.parentNode.rowIndex;
		document.querySelector('.cart-card').children[index].children[0].children[2].children[1].children[0].innerText = "× " + input.value;
		document.querySelector('.cart-card').children[index].children[0].children[2].children[2].children[0].innerText = input.value * input.dataset.price;

		document.querySelector('.drop-cart').children[index - 1].children[1].children[1].children[0].innerText = input.value + " × ";
		document.querySelector('.drop-cart').children[index - 1].children[1].children[1].children[2].innerText = " = " + input.value * input.dataset.price;
		checkQuant();

		const chngeRequest = new XMLHttpRequest();
		chngeRequest.open("POST", linkSite + "modules/cart/change-quant.php", false);
		chngeRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		chngeRequest.send("id=" + input.dataset.id + "&quant=" + input.value);
	}
});

function checkQuant(){
	const quantSum = document.querySelector('.all-quant');
	var sum = 0;
	var quant = 0;
	document.querySelectorAll('.change-quant').forEach(function(input){
		quant += Number(input.value);
	});
	quantSum.innerText = quant;
	document.querySelectorAll('.result-sum').forEach(function(div){
		sum += Number(div.innerText);
	});
	document.querySelectorAll('.sum').forEach(function(span){
		span.innerText = sum;
	});

	let quantCart = document.querySelector('.quantity-cart');
		quantCart.innerText = quant;
}

checkQuant();

function deleteItem(obj, id) {
	const chngeRequest = new XMLHttpRequest();
	chngeRequest.open("POST", linkSite + "modules/cart/delete.php", false);
	chngeRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	chngeRequest.send("id=" + id);
	const index = obj.parentNode.parentNode.rowIndex;
	obj.parentNode.parentNode.remove();

	document.querySelector('.drop-cart').children[index - 1].remove();
	document.querySelector('.cart-card').children[index].remove();
	checkQuant();
}